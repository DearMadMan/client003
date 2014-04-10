<?php
define("MadMan",true);
require_once("./init.php");
require_once("./lib_admin.php");

$act="";
if(isset($_REQUEST['act']))
{
	$act=$_REQUEST['act'];
}

if($act=='siteEdit')
{
	$res="";
	//先获取表单信息
	if($_SESSION['agencies_id'])
	{
		$res= SetConfigsToDatabaseByAgenciesId($_SESSION['agencies_id'],$_POST);
	}
	else
	{
		$res= SetConfigsToDatabase($_POST);
	}

	if($res)
	{
		JsAlertAndJump("保存成功!","main.php?menu=system");
	}
	else
	{
		JsAlertAndJump("保存失败!请重新尝试!","main.php?menu=system");
	}
}
elseif($act=='adminEdit')
{
	if(!empty($_REQUEST['admin_pass']))
	{

		$sql="Update admins set user_word='".MD5($_REQUEST['admin_pass'])."' where id='".$_SESSION['admin_id']."' ";
		if($_SESSION['agencies_id'])
		{
			$sql="Update agencies set domain_word='".MD5($_REQUEST['admin_pass'])."' where id='".$_SESSION['agencies_id']."' ";
		}
		$db->Query($sql);
		if($db->GetAffectedRows()>0)
		{
				 unset($_SESSION['admin_id']);
				JsAlertAndJump("修改成功!","main.php?menu=system&target=admin");
		}
		else
		{
				JsAlertAndJump("修改失败!请重新尝试!","main.php?menu=system&target=admin");
		}
	}
	else
	{
		JsAlertAndJump("未修改","main.php?menu=system&target=admin");
	}
}
elseif($act=="addDomain")
{
	CanPass();
	$target="main.php?menu=system&target=agencies_list";
		if(empty($_REQUEST['admin_name']))
		{
			JsAlertAndJump("域名为空!",$target);
		}
		if(empty($_REQUEST['admin_pass']))
		{
			JsAlertAndJump("密码为空!",$target);
		}
		if(empty($_REQUEST['start_time']))
		{
			JsAlertAndJump("起始时间!",$target);
		}
		if(empty($_REQUEST['end_time']))
		{
			JsAlertAndJump("结束时间!",$target);
		}

		$sql="select * from agencies where domain='".$_REQUEST['admin_name']."'";
		$res=$db->getRow($sql);
		if(!empty($res))
		{
			JsAlertAndJump("该域名已经存在!",$target);
		}



		$fields=array("domain","domain_word","add_time","start_time","end_time");
		$data=array($_REQUEST['admin_name'],
					md5($_REQUEST['admin_pass']),
					time(),
					strtotime($_REQUEST['start_time']),
					strtotime($_REQUEST['end_time'])
			);
		$res=$db->autoExcute("agencies","",$fields,$data);
		if($res)
		{
			$ag_configs=array(
				'keywords'=>urlencode('久恒欢迎您'),
				'description'=>urlencode('专注互联网一对一辅导 全自动模式实现您的时间自由'),
				'default_template'=>urlencode('default'),
				'domain'=>urlencode('http://www.'.$_REQUEST['admin_name']),
				'title'=>urlencode('亲爱的会员_您好!'),
				'copyright'=>urlencode('Copyright 2014 10nai.com版权所有 久恒官方网站
联系方式：Email：vip10nai@qq.com  电话:13771552579'),
				'spreader_string'=>urlencode('专注互联网一对一辅导，全自动模式实现您的时间自由'),
				'pay_name'=>urlencode('a支付宝(账号)'),
				'pay_key'=>urlencode('支付宝(key)'),
				'pay_id'=>urlencode('支付宝(pid)'),
				'services_qq'=>urlencode('77812886'),
				'services_tel'=>urlencode('13771552579'),
				'spreader_cridits'=>urlencode('1'),
				'email_code'=>urlencode("25652dd2ac6fe60cf81be5be278e83c10455e88b52df75d9")
				);
			$fields=array('agencies_id','configs');
			$string=json_encode($ag_configs);
			$data=array($db->getInsertId(),$string);
			$g=$db->autoExcute("agencies_configs","",$fields,$data);




			JsAlertAndJump("添加成功!",$target);
		}
}
elseif($act=="EditDomain")
{
	CanPass();
	$target="main.php?menu=system&target=agencies_list";
	if(!isset($_REQUEST['domain_id'])||!is_numeric($_REQUEST['domain_id']))
	{
		JsAlertAndJump("获取数据失败，请稍后尝试!",$target);
	}
	$id=$_REQUEST['domain_id'];
	$sql="select * from agencies where id=$id";
	$res=$db->getRow($sql);
	if(empty($res))
	{
		JsAlertAndJump("获取数据失败，请稍后尝试!",$target);
	}
	$fields=array();
	$data=array();
	if(empty($_REQUEST['admin_pass']))
	{
		$fields=array("domain","start_time","end_time");
		$data=array(
			$_REQUEST["admin_name"],
			strtotime($_REQUEST['start_time']),
					strtotime($_REQUEST['end_time'])
			);

	}
	else
	{
		$fields=array("domain","domain_word","start_time","end_time");
		$data=array(
			$_REQUEST["admin_name"],
			md5($_REQUEST['admin_pass']),
			strtotime($_REQUEST['start_time']),
					strtotime($_REQUEST['end_time'])
			);

	}
	$res=$db->autoExcute("agencies","id=$id",$fields,$data,"update");
		if($res)
		{
			JsAlertAndJump("修改数据成功!",$target);
		}
		else
		{
			JsAlertAndJump("修改数据失败!",$target);
		}
}
else
{
	JsJump("main.php?menu=system");
}







?>