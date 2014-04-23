<?php
define("MadMan",true);
require_once("./inc/init.php");
$act="nothing";
$domain="nothing";
if(isset($_REQUEST['act']))
{
    $act=$_REQUEST['act'];
}
if(isset($_REQUEST['domain']))
{
    $domain=$_REQUEST['domain'];
}


if($act=="check")
{

    if(strpos($domain,".")!=false)
    {
        preg_match('/[^.]+.[^.]+$/' , $domain,$matches);
       $sql="select * from agencies where domain='".$matches[0]."'";
       $res=$db->getRow($sql);
       if(empty($res))
       {
            die("no");
       }
       else
       {
          die("ok");
       }
    }
    else
    {
        die("域名格式不正确!");
    }
}
else
{
    $smarty->display("agencies_check.mad");
}




?>