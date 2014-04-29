<?php
if(!defined('MadMan'))
{
	die("No Way!");
}
if(!isset($_SESSION))
{
	session_start();
}




define('ROOT_PATH',preg_replace( '/(\S+)inc/i','$1',dirname(__FILE__)));
define('INC_PATH',ROOT_PATH.'inc'.DIRECTORY_SEPARATOR);
define("CLASS_PATH", INC_PATH.'class'.DIRECTORY_SEPARATOR);
define("CONTROL_PATH",INC_PATH.'control'.DIRECTORY_SEPARATOR);
define("DATA_PATH",ROOT_PATH.'data'.DIRECTORY_SEPARATOR);
define("LOG_PATH",DATA_PATH.'log'.DIRECTORY_SEPARATOR);
define("ADMIN_LOG_PATH",DATA_PATH.'admin_log'.DIRECTORY_SEPARATOR);
define("SMARTY_PATH",INC_PATH.'module'.DIRECTORY_SEPARATOR.'smarty'.DIRECTORY_SEPARATOR);
define("VIEW_PATH",ROOT_PATH.'view'.DIRECTORY_SEPARATOR);


include_once(DATA_PATH.'config.php');
include_once(SMARTY_PATH.'Smarty.class.php');
include_once(CONTROL_PATH."main.php");
if(!DEBUG)
{
	error_reporting(0);
}
else
{
	error_reporting(E_ALL ^ E_DEPRECATED);
}
@ini_set("display_errors",1);

if(!get_magic_quotes_gpc())
{
	$_GET=_addslashes($_GET);
	$_POST=_addslashes($_POST);
    $_REQUEST=_addslashes($_REQUEST);
	$_COOKIE=_addslashes($_COOKIE);
}

function _addslashes($arr)
{
	if(!is_array($arr)||empty($arr))
	{
		return false;
	}
	foreach ($arr as $key => $value)
	 {
		 if(is_array($arr[$key]))
		 {
		 	$arr[$key]=_addslashes($arr[$key]);
		 }
		 else
		 {
		    $arr[$key]=addslashes($value);
		 }
	 }
	 return $arr;
}

date_default_timezone_set("$config_timezone"); //设置时区

function _autoload($className)
{


	$classPath=CLASS_PATH.$className.".class.php";
    if(!file_exists($classPath))
    {
    	die("not find!".$className);
    }
    else
    {

    }

	include_once($classPath);
}



spl_autoload_register('_autoload');




$smarty=new Smarty();
$smarty->setCacheDir(SMARTY_PATH."cache".DIRECTORY_SEPARATOR);
$smarty->setConfigDir(SMARTY_PATH."configs".DIRECTORY_SEPARATOR);
$smarty->setCompileDir(SMARTY_PATH."compile".DIRECTORY_SEPARATOR);
$smarty->setTemplateDir(VIEW_PATH."default".DIRECTORY_SEPARATOR);
$GLOBALS['smarty'] = $smarty;


$db=mysql::getinstance();
$GLOBALS['db'] = $db;
$gbs=$GLOBALS;
$gbs['madman']=array();


include_once("init_append.php");
?>