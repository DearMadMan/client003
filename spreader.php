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
	$sql="select count(id) from users where spreader_id='".$user['id']."'";
	$res=$db->getOne($sql);
	$smarty->assign('spreader_num',$res);
	$smarty->assign("user",$user);
	GetPics();
	$domain=$GLOBALS['configs']['domain'];
	$domain=str_replace("http://", "", $domain);
	$domain=str_replace("www.", "", $domain);
	$smarty->assign("domain",$domain);
}
else
{
	if($act!="login"&&$act!="register"){
		JsJump("user.php?act=login");
	}

}

$sql="select * from users where spreader_id='".$user['id']."'";
$res=$db->getAll($sql);
$int=1;
foreach ($res as $key => $value) {
	echo $int.":".$value['email']."<br />";
	$int+=1;
}

?>