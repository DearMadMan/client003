<?php
define("MadMan",true);
require_once("./init.php");
$act="";
if(!isset($_REQUEST['act']))
{
	$_REQUEST['act']='index';
}
$act=strtolower($_REQUEST['act']);
$admin=array();
if(isset($_SESSION['admin_id'])&&(is_numeric($_SESSION['admin_id'])))
{
	$admin=GetAdminInfo($_SESSION['admin_id']);
	if(empty($admin))
	{
		unset($_SESSION['admin_id']);
		JsJump("admin.php?act=login");
	}
	$smarty->assign("admin",$admin);
}
else
{
	if($act!="login"){
		JsJump("admin.php?act=login");
	}

}

if($act=="login")
{


	if((!empty($_REQUEST['user_name']))&&(!empty($_REQUEST['user_pass'])))
	{

		$sql="select * from admins where user_name='".$_REQUEST['user_name']."' and user_word='".MD5($_REQUEST['user_pass'])."'";

		if(!empty( $_SESSION['agencies_id']))
		{
			$sql="select * from agencies where domain='".$_REQUEST['user_name']."' and domain_word='".MD5($_REQUEST['user_pass'])."'";
		}
		$res=$db->GetRow($sql);
		if(!empty($res))
		{
			$_SESSION['admin_id']=$res['id'];
			JsJump("main.php");
		}
		else
		{
			JsAlertAndJump("请确认您的用户名与密码！","admin.php?act=login");
		}
	}

	$smarty->display("login.mad");
}
if($act=='loginout')
{
	unset($_SESSION['admin_id']);
	JsJump("admin.php?act=login");
}

