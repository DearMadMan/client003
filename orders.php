<?php
define("MadMan",true);
require_once("./inc/init.php");
$act="";
if(!isset($_REQUEST['act']))
{
	$_REQUEST['act']='index';
}
$act=strtolower($_REQUEST['act']);
$user=array();
if(isset($_SESSION['user_id'])&&(is_numeric($_SESSION['user_id'])))
{
	$user=getUserInfo($_SESSION['user_id']);
	$smarty->assign("user",$user);
}
else
{
	if($act!="login"&&$act!="register"){
		JsJump("user.php?act=login");
	}

}

if($act=="prepayment")
{
	$price=intval($_REQUEST['price']);
	if(!empty($price))
	{
		$income_money=intval($_REQUEST['price']);
		$order_sn=time().str_pad(rand(0,99999),5,"0");
		$files=array("user_id",
				"income_money",
				"order_sn",
				"add_time",
				"pay_status");
		$data=array($user['id'],
			   $income_money,
			   $order_sn,
			   time(),
			   "0");
		$res=$db->AutoExcute("income","",$files,$data);
		if($res)
		{
			JsJump("plugin/YiiPay/Send.php?u=".$user['user_name']."&b=".$order_sn."&m=".$income_money);
		}
		else
		{
			JsAlertAndJump("Sorry！数据出错,请重新尝试","user.php?act=prepayment");
		}
	}
	else
	{
		JsAlertAndJump("充值金额必须为整数！","user.php?act=prepayment");
	}
}
elseif($act=="encashment")
{
	$price=intval($_REQUEST['price']);
	if(!empty($price))
	{
        $price=abs($price);
		if($price>$user['money'])
		{
			JsAlertAndJump("余额不足!申请失败","user.php?act=encashment");
		}
		/*
		if(!empty($user['agencies_id']))
		{
			$sq="select * from agencies where agencies_id=".$user['agencies_id'];
			$ag=$db->getRow($sq);
			if($price>$ag['income'])
			{
				JsAlertAndJump("加盟商款项不足，请联系客服","user.php?act=encashment");
			}
			else
			{
				$sq="update agencies set income=(income-$price) where agencies_id=".$user['agencies_id'];
				$r=$db->query($sq);
				if($db->GetAffectedRows()>0)
				{

				}else
				{
					JsAlertAndJump("Sorry！数据出错,请重新尝试","user.php?act=encashment");
				}
			}
		}
		*/
		$income_money=$price;
		$order_sn=time().str_pad(rand(0,99999),5,"0");
		$files=array("user_id",
				"expense_money",
				"order_sn",
				"add_time",
				"expense_status");
		$data=array($user['id'],
			   $income_money,
			   $order_sn,
			   time(),
			   "0");
		$res=$db->AutoExcute("expense","",$files,$data);
		if($res)
		{
			$sql="update users set money=money-".$price." where id='".$user["id"]."'";
			$db->query($sql);
			JsAlertAndJump("申请提现成功！","user.php?act=encashment");
		}
		else
		{
			JsAlertAndJump("Sorry！数据出错,请重新尝试","user.php?act=encashment");
		}
	}
	else
	{
		JsAlertAndJump("提现金额必须为整数！","user.php?act=encashment");
	}
}
elseif($act=='goods')
{
	$id=intval($_REQUEST['id']);
	if(isset($_REQUEST['id'])&&!empty($id))
	{


		$order_type=intval($_REQUEST["pay_type"]);
		$goods_id=intval($_REQUEST['id']);
		$user_id=$user['id'];
		$add_time=time();
		$order_sn=time().str_pad(rand(0,99999),5,"0");
		$sql="select * from goods where id=$goods_id";
		$goods=$db->getRow($sql);
		if(empty($goods))
		{
			JsAlertAndJump("Sorry!商品已经下架或停止销售,请稍后再来!","goods.php?id=$goods_id");
		}

		//进行用户积分与金钱判断
		if($order_type==1)
		{
			//余额支付
			if($user['money']<$goods['need_money'])
			{
				JsAlertAndJump("Sorry!您的余额不足以购买该商品!","goods.php?id=$goods_id");
			}
			//扣除金钱
			$sql="update users set money=money-".$goods['need_money']." where id=".$user['id'];
			$db->query($sql);
		}
		else
		{
			if($user['credits']<$goods['need_credits'])
			{
				JsAlertAndJump("Sorry!您的积分不足以购买该商品!","goods.php?id=$goods_id");
			}
			//扣除积分
		    $sql="update users set credits=credits-".$goods['need_credits']." where id=".$user['id'];
			$db->query($sql);
		}

		$files=array("goods_id",
				"user_id",
				"pay_type",
				"order_sn",
				"order_type",
				"add_time");
		$data=array($goods_id,
			   $user_id,
			   "1",
			   $order_sn,
			   $order_type,
			   time());
		$res=$db->AutoExcute("orders","",$files,$data);
		if($res)
		{
			//佣金判断
			$can_insert=true;
			if($goods['need_money']+$goods['need_credits']==0)
			{
				$can_insert=false;
			}
			if($order_type==1&&$can_insert)
			{

				//加盟商

				if($user['agencies_id']!=0)
			{
				$sql="select * from agencies where id=".$user['agencies_id'];
				$agencies=$db->getRow($sql);
				if(!empty($agencies))
				{
					$sql="update agencies set income=income+".floor($GLOBALS['configs']['agency_goods']*$goods["need_money"])." where id='".$user['agencies_id']."'";
					$rs=$db->query($sql);

					SetAgenciesMoneyLog("goods",$user['agencies_id'],floor($GLOBALS['configs']['agency_goods']*$goods["need_money"]));
				}
			}




			if(!empty($user['spreader_id']))
			{
				$sql="select * from users where id=".$user['spreader_id'];
				$spreader=$db->getRow($sql);
				//判断spreader level
				if(!empty($spreader))
				{
					if($spreader['vip_level']<1)
					{
						if($spreader['vip_level']==-1)  //初级会员
						{

							//增加佣金

							$spreader_rate=floatval($GLOBALS['configs']["low_spreader"]);

							$sql="update users set money=money+".floor($goods["need_money"]*$spreader_rate)." where id=".$spreader['id'];
							$res=$db->Query($sql);

							//增加积分
							$spreader_rate=$spreader['spreader_rate'];
							if(empty($spreader['spreader_rate']))
							{
								$spreader_rate=floatval($GLOBALS['configs']["spreader_rate"]);
							}
							$add_credits=floor($goods["need_credits"]*$spreader_rate);
							if($GLOBALS['configs']["spreader_mode"]==1)
							{
								$add_credits=$GLOBALS['configs']["spreader_add"];
							}
							$sql="update users set credits=credits+".$add_credits." where id=".$spreader['id'];
							$res=$db->Query($sql);


						}
						else
						{


							//只增加积分
							$spreader_rate=$spreader['spreader_rate'];
							if(empty($spreader['spreader_rate']))
							{
								$spreader_rate=floatval($GLOBALS['configs']["spreader_rate"]);
							}
							$add_credits=floor($goods["need_credits"]*$spreader_rate);
							if($GLOBALS['configs']["spreader_mode"]==1)
							{
								$add_credits=$GLOBALS['configs']["spreader_add"];
							}
							$sql="update users set credits=credits+".$add_credits." where id=".$spreader['id'];
							$res=$db->Query($sql);
						}
					}
					else
					{
						//增加佣金
						$spreader_rate=$spreader['spreader_rate'];
						if(empty($spreader['spreader_rate']))
						{

							$spreader_rate=floatval($GLOBALS['configs']["spreader_rate"]);
						}
						$sql="update users set money=money+".floor($goods["need_money"]*$spreader_rate)." where id=".$spreader['id'];
						$res=$db->Query($sql);
					}
				}
			}
			}
			JsAlertAndJump("购买成功！请刷新商品查看下方下载地址!","goods.php?id=$goods_id");
		}
		else
		{
			JsAlertAndJump("Sorry！数据出错,请重新尝试","goods.php?id=$goods_id");
		}
	}
}

?>