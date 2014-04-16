<?php
define("MadMan",true);
require_once("./init.php");
require_once("./lib_admin.php");
$menu='index';
$target="index";
$act="";

if(isset($_REQUEST['menu']))
{
	$menu=$_REQUEST['menu'];
}
if(isset($_REQUEST['target']))
{
	$target=$_REQUEST['target'];
}
if(isset($_REQUEST['act']))
{
	$act=$_REQUEST['act'];
}

if($menu=='users')
{
	if($target=="list")	//用户列表
	{
			$sql="select * from users";
			$search="";
			if(isset($_POST['key']))
			{
				if(!empty($_POST['key']))
				{
						$search=" where user_name='".$_POST['key']."'";
				}

			}
			if(!empty($_SESSION['agencies_id']))
			{
					$sql="select * from users where agencies_id='".$_SESSION['agencies_id']."'";
					if(isset($_POST['key']))
						{
							if(!empty($_POST['key']))
							{
									$search=" and user_name='".$_POST['key']."'";
							}

						}

			}
			$pagePath='main.php?menu=users&target=list';
			$id="id";


			pageTooleFunc($sql,$pagePath,$id,$search);
	}
	elseif($target=="pics")
	{
		CanPass();
		$sql="select * from images";
		$res=$db->getRow($sql);
		if(empty($res))
		{
			$res["pic1"]="";
			$res["pic2"]="";
			$res["pic3"]="";
			$res["pic4"]="";
			$res["link1"]="";
			$res["link2"]="";
			$res["link3"]="";
			$res["link4"]="";
		}
		else
		{
			$pics=json_decode($res['pics']);
			$links=json_decode($res['links']);
			$res["pic1"]=$pics[0];
			$res["pic2"]=$pics[1];
			$res["pic3"]=$pics[2];
			$res["pic4"]=$pics[3];
			$res["link1"]=$links[0];
			$res["link2"]=$links[1];
			$res["link3"]=$links[2];
			$res["link4"]=$links[3];
		}
		$smarty->assign("pics",$res);
	}
	elseif($target=="recove")
	{
		CanPass();
		if(!empty($_REQUEST["id"]))
		{
			$sql="select * from vipmsg where id='".$_REQUEST['id']."'";
			if(!empty($_SESSION['agencies_id']))
			{
					$sql="select * from vipmsg where id='".$_REQUEST['id']."' and agencies_id='".$_SESSION['agencies_id']."'";
			}
			$res=$db->getRow($sql);
			if(empty($res))
			{
				$res['user_msg']="数据出错,请重新尝试!";
				$res['recove']="数据出错,请重新尝试!";
				$res['id']="0";
			}

			$smarty->assign("msg",$res);
		}
	}
	elseif($target=="prepayment")
	{
		$sql="select i.id,i.income_money,i.order_sn,i.add_time,i.pay_status,u.user_name,u.nick_name,u.spreader_id,u.vip_level from income as i left join users as u on i.user_id=u.id";
			if(!empty($_SESSION['agencies_id']))
			{
				$sql="select i.id,i.income_money,i.order_sn,i.add_time,i.pay_status,u.user_name,u.nick_name,u.spreader_id,u.vip_level from income as i left join users as u on i.user_id=u.id where u.agencies_id=".$_SESSION['agencies_id'];
			}
		$pagePath='main.php?menu=users&target=prepayment';
		$id="i.id";
		$search="";
		if(isset($_POST['key']))
		{
			$search=" where order_sn='".$_POST['key']."'";
			if(!empty($_SESSION['agencies_id']))
			{
				$search=" and order_sn='".$_POST['key']."'";
			}
		}

		pageTooleFunc($sql,$pagePath,$id,$search);
	}
	elseif($target=="encashment")
	{
			$sql="select i.id,i.expense_money,i.order_sn,i.add_time,i.expense_status,u.user_name,u.nick_name,u.spreader_id,u.vip_level,u.pay_name,u.pay_email from expense as i left join users as u on i.user_id=u.id";
				if(!empty($_SESSION['agencies_id']))
				{
						$sql="select i.id,i.expense_money,i.order_sn,i.add_time,i.expense_status,u.user_name,u.nick_name,u.spreader_id,u.vip_level,u.pay_name,u.pay_email from expense as i left join users as u on i.user_id=u.id where u.agencies_id=".$_SESSION['agencies_id'];
				}
				$search="";
				if(isset($_POST['key']))
				{
					$search=" where order_sn='".$_POST['key']."'";
					if(!empty($_SESSION['agencies_id']))
					{
						$search=" and order_sn='".$_POST['key']."'";
					}
				}
			$pagePath='main.php?menu=users&target=encashment';
			$id="i.id";
			pageTooleFunc($sql,$pagePath,$id,$search);
	}
	elseif($target=="agencies_encashment")
	{
		$sql="select i.id, i.pay_name,i.pay_email,i.agencies_id,i.expense_money,i.order_sn,i.add_time,i.expense_status,u.domain from agencies_expense as i left join agencies as u on i.agencies_id=u.id order by i.add_time desc";
				$search="";
				if(isset($_POST['key']))
				{
					$search=" where order_sn='".$_POST['key']."'";
				}
			$pagePath='main.php?menu=users&target=agencies_encashment';
			$id="i.agencies_id";
			pageTooleFunc($sql,$pagePath,$id,$search);
	}
	elseif($target=="usermsg")
	{
		$sql="select u.id as username,v.id,v.user_msg,v.recove,v.add_time,v.can_see,u.nick_name,u.vip_level from vipmsg as v left join users as u on u.id=v.user_id ";
			if(!empty($_SESSION['agencies_id']))
			{
					$sql="select u.id as username,v.id,v.user_msg,v.recove,v.add_time,v.can_see,u.nick_name,u.vip_level from vipmsg as v left join users as u on u.id=v.user_id where u.agencies_id=".$_SESSION['agencies_id'];
			}
		$id="v.id";
		$pagePath='main.php?menu=users&target=usermsg';
		pageTooleFunc($sql,$pagePath,$id);
	}
	elseif($target=='edit')
	{
		$user_id=0;
		if(isset($_GET['user_id']))
		{
			if (intval($_GET['user_id'])!=0)
		    {
				$user_id=intval($_GET['user_id']);
			}
		}
		$users=getUserInfo($user_id);
		$smarty->assign("user",$users);
	}
	else
	{

			JsJump("main.php?menu=users&target=list");
	}
}elseif($menu=='goods')
{
	if($target=='list')
	{
		if(!empty($_SESSION['agencies_id']))
	{
		JSJump("main.php?menu=goods&target=order");
	}
		CanPass();
		$sql="select * from goods";
		$pagePath="main.php?menu=goods&target=list";
		$id='id';
		pageTooleFunc($sql,$pagePath,$id);
	}
	elseif($target=='encashment')
	{
		$ag=GetAgenciesFormId($_SESSION['agencies_id']);
		$smarty->assign("ag",$ag);
	    $sql="select * from agencies_expense where agencies_id=".$_SESSION["agencies_id"];
		$pagePath="main.php?menu=goods&target=encashment";
		$id='id';
		pageTooleFunc($sql,$pagePath,$id);
	}
	elseif($target=="goods_edit")
	{
		CanPass();
		if(isset($_REQUEST['goods_id'])&&is_numeric($_REQUEST['goods_id']))
		{
			$sql="select * from goods where id='".intval($_REQUEST['goods_id'])."'";
			$res=$db->getRow($sql);
			if(!empty($res))
			{
				$smarty->assign("goods",$res);
			}
			else
			{
				JsAlertAndJump("获取商品信息失败！请稍后重试！","main.php?menu=goods&target=list");
			}
		}
		else
		{
			$goods=array();
			$goods['id']=0;
			$goods['goods_name']="";
			$goods['goods_pic']="";
			$goods['goods_dis']="";
			$goods['need_credits']="";
			$goods['need_money']="";
			$goods['need_top']="";
			$goods['need_hidden']="";
			$goods['add_time']="";
			$goods['goods_data']="";
			$goods['goods_content']="";
			$smarty->assign("goods",$goods);
		}
	}
	elseif($target=="order")
	{
		$sql="select o.id,o.goods_id,o.user_id,o.pay_type,o.add_time,o.order_sn,o.order_type,u.spreader_id from orders as o left join users as u on u.id=o.user_id ";
		if(!empty($_SESSION['agencies_id']))
		{
			$sql=$sql." where u.agencies_id=".$_SESSION['agencies_id'];
		}
		$pagePath="main.php?menu=goods&target=order";
		$id='o.id';
		pageTooleFunc($sql,$pagePath,$id);
	}
	elseif ($target=="vip") {

	}
	elseif ($target=='article') {
		CanPass();
		$sql="select o.id,o.title,o.add_time,u.type_name from articles as o left join article_type as u on u.id=o.type_id ";
		$pagePath="main.php?menu=goods&target=article";
		$id='o.id';
		pageTooleFunc($sql,$pagePath,$id);
	}
	elseif ($target=='article_type') {
		CanPass();
		$sql="select * from article_type ";
		$pagePath="main.php?menu=goods&target=article_type";
		$id='id';
		pageTooleFunc($sql,$pagePath,$id);
	}
	elseif ($target=='article_edit')
	 {
	 	CanPass();
		if(isset($_REQUEST['id'])&&is_numeric($_REQUEST['id'])&&!empty($_REQUEST['id']))
		{
			$sql="select * from articles where id=".intval($_REQUEST['id']);
			$res=$db->getRow($sql);
			if(!empty($res))
			{
				$smarty->assign("article",$res);
			}
			else
			{
				JsAlertAndJump("获取数据失败,请重新尝试!","main.php?menu=goods&target=article");
			}
		}
		else
		{
			$res['id']=0;
			$res['type_id']="";
			$res['title']="";
			$res['content']="";
			$smarty->assign("article",$res);
		}
	}
	elseif ($target=='article_type_edit') {
		CanPass();
		if(isset($_REQUEST['id'])&&is_numeric($_REQUEST['id'])&&!empty($_REQUEST['id']))
		{
			$sql="select * from article_type where id=".intval($_REQUEST['id']);
			$res=$db->getRow($sql);
			if(!empty($res))
			{
				$smarty->assign("article_type",$res);
			}
			else
			{
				JsAlertAndJump("获取数据失败,请重新尝试!","main.php?menu=goods&target=article_type");
			}
		}
		else
		{
			$res['id']=0;
			$res['type_name']="";
			$smarty->assign("article_type",$res);
		}
	}
	else
	{
		JsJump("main.php?menu=goods&target=list");
	}
}
elseif($menu=="system")
{
	if($target=='agencies_list')
	{
		CanPass();
		$sql="select * from agencies order by id desc";
		$pagePath="main.php?menu=system&target=agencies_list";
		$id='id';
		pageTooleFunc($sql,$pagePath,$id);
	}
	elseif($target=="count")
	{
		$agencies=GetAgenciesFormId($_SESSION['agencies_id']);
		GetAgenciesCount($_SESSION['agencies_id']);
		$smarty->assign("agencies",$agencies);

	}
	elseif($target=="agencies_edit")
	{
		CanPass();
		if(isset($_REQUEST['id'])&&is_numeric($_REQUEST['id'])&&!empty($_REQUEST['id']))
		{
			$sql="select * from agencies where id=".intval($_REQUEST['id']);
			$res=$db->getRow($sql);
			if(!empty($res))
			{
				$goods_money=GetAgenciesIncomeTody(intval($_REQUEST['id']),"goods");
				$vip_money=GetAgenciesIncomeTody(intval($_REQUEST['id']),"vip");
				$user_num=GetAgenciesUsersNum(intval($_REQUEST['id']));
				$smarty->assign("goods_money",$goods_money);
				$smarty->assign("user_num",$user_num);
				$smarty->assign("vip_money",$vip_money);
				$smarty->assign("agencies",$res);
			}
			else
			{
				JsAlertAndJump("获取数据失败,请重新尝试!","main.php?menu=system&target=agencies_list");
			}
		}
		else
		{
			JsAlertAndJump("获取数据失败,请重新尝试!","main.php?menu=system&target=agencies_list");
		}
	}
	elseif($act=="model")
	{

	}
}


function pageTooleFunc($sql,$pagePath,$id,$search="")
{
	$pagetool=pagetool::GetInstance();
		if(!isset($_GET['pageNow']))
		{

			$_GET['pageNow']=0;
		}
		if(!empty($search))
		{
				if(isset($_GET['search'])&&$_GET["search"]==1)
			{
				$sql.=$search;
			}
		}
		//die($sql);
		$pageNow=intval($_GET['pageNow']);
		$dfNum=$GLOBALS['configs']['page_view_num'];
		$db=$GLOBALS['db'];
		$pagetool->setNeed($db,$sql,$dfNum,$pageNow,$pagePath,$id);
		$str= $pagetool->CreatePageRow();
		$rows=$pagetool->getRes();
		$GLOBALS['smarty']->assign("rows",$rows);
		$GLOBALS['smarty']->assign("pagetool",$str);
}



$smarty->assign("act",$act);
$smarty->assign("target",$target);
$smarty->assign("menu",$menu);
$smarty->display("main.mad");
?>