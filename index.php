<?php
define("MadMan",true);
require_once("./inc/init.php");
$user=array();
if(isset($_SESSION['user_id'])&&(is_numeric($_SESSION['user_id'])))
{
	$user=getUserInfo($_SESSION['user_id']);
	$smarty->assign("user",$user);
	JsJump("user.php");
}
else
{
	$url=$_SERVER['HTTP_HOST'];
	$spreader=0;
	if(preg_match('/(\d+)\./',$url,$_matchs))
	{
		$spreader=$_matchs[1];
	}
	$smarty->assign("spreader",$spreader);
}



$smarty->display('index.mad');
?>