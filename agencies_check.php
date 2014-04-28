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
$smarty->assign("other","");

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
elseif($act=="check_now")
{
  $smarty->assign("other","domain");
    if(strpos($domain,".")!=false)
    {
        preg_match('/[^.]+.[^.]+$/' , $domain,$matches);
       $sql="select * from agencies where domain='".$matches[0]."'";
       $res=$db->getRow($sql);
       if(empty($res))
       {
            $smarty->assign("other","no");
       }
       else
       {
           $smarty->assign("other","yes");
       }

    }
    else
    {
        die("域名格式不正确!");
    }
     $smarty->assign("domain",$domain);
     $smarty->display("agencies_check.mad");
}
else
{
    $smarty->display("agencies_check.mad");
}




?>