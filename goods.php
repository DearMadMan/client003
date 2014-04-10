<?php
define("MadMan",true);
require_once("./inc/init.php");
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
$act="";
if(!isset($_REQUEST['act']))
{
	$_REQUEST['act']='index';
}
$act=strtolower($_REQUEST['act']);

if($act=="index")
{
	if(!isset($_REQUEST['id'])||empty($_REQUEST['id']))
	{
		JsJump("user.php?act=index");
	}
	else
	{
		$sql="select * from goods where need_hidden=0 and id=".intval($_REQUEST['id']);
		$res=$db->GetRow($sql);
		$goods=$res;
		if(!empty($res))
		{
			$sql="select * from orders where user_id=".$user['id']." and goods_id=".intval($_REQUEST['id'])." ";
			$order=$db->GetRow($sql);
			if(empty($order))
			{
				$goods['goods_data']="购买后此处可显示下载地址！";
			}
			$smarty->assign("goods_date",$goods['goods_data']);
			$smarty->assign("goods",$res);
		}
		else
		{
			JSAlertAndJump("您获取的商品已下架或者停止销售哦!","user.php?act=index");
		}
	}
}
elseif ($act=="getvip")
{
	if($user['vip_level']==2)
	{
		JSAlertAndJump("亲，您已经是VIP了哦","user.php");
	}
	else
	{
		//判断金钱
		if($user['money']<$GLOBALS['configs']['vip_money'])
		{
			JSAlertAndJump("亲,VIP价格：1980元, 您的余额不足啊,请先充值!","user.php?act=prepayment");
		}
		//判断是否需要手动开启
		if($GLOBALS['configs']['vip_is_open']==0)
		{
			JSAlertAndJump($GLOBALS['configs']['vip_msg'],"user.php");
		}
		$sql="update users set money=money-".$GLOBALS['configs']['vip_money'].",credits=credits+".$GLOBALS['configs']['vip_credits'].",spreader_rate=".$GLOBALS['configs']['vip_spreader'].",vip_level=2 where id=".$user["id"];
		$res=$db->Query($sql);
		if($db->GetAffectedRows()>0)
		{
			//加盟商佣金
			if($user['agencies_id']!=0)
			{
				$sql="select * from agencies where id=".$user['agencies_id'];
				$agencies=$db->getRow($sql);
				if(!empty($agencies))
				{
					$sql="update agencies set income=income+".floor($GLOBALS['configs']['agency_spreader']*$GLOBALS['configs']['vip_money'])." where id='".$user['agencies_id']."'";
					$rs=$db->query($sql);
					SetAgenciesMoneyLog("vip",$user['agencies_id'],floor($GLOBALS['configs']['agency_spreader']*$GLOBALS['configs']['vip_money']));
				}
			}

			//推广者佣金
			if($user['spreader_id']!=0)
			{
				$sql="select * from users where id='".$user['spreader_id']."'";
				$sp=$db->GetRow($sql);
				$sql="";
				if(!empty($sp))
				{
					if($sp['vip_level']==1)
					{
						if(empty($sp['spreader_rate']))
						{
							$sql="update users set money=money+".floor($GLOBALS['configs']['spreader_rate']*$GLOBALS['configs']['vip_money'])." where id='".$sp['id']."'";
						}
						else
						{
							$sql="update users set money=money+".floor($GLOBALS['configs']['vip_money']*$sp['spreader_rate'])." where id='".$sp['id']."'";
						}
					}
					if($sp['vip_level']==2)
					{
						if(empty($sp['spreader_rate']))
						{
							$sql="update users set money=money+".floor($GLOBALS['configs']['vip_spreader']*$GLOBALS['configs']['vip_money'])." where id='".$sp['id']."'";
						}
						else
						{
							$sql="update users set money=money+".floor($GLOBALS['configs']['vip_money']*$sp['spreader_rate'])." where id='".$sp['id']."'";
						}
					}
					if($sp['vip_level']==0)
					{

					}
					else
					{
						$db->Query($sql);
					}

				}
			}
			JSAlertAndJump("已经为您成功开通VIP","user.php");
		}

	}
}
$smarty->display('goods.mad');
?>