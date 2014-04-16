<?php
define("MadMan",true);
require_once("./inc/init.php");
$act="";
$domain="";
if(isset($_REQUEST['act']))
{
    $act=$_REQUEST['act'];
}
if(isset($_REQUEST['domain']))
{
    $domain=$_REQUEST['domain'];
}


if(!empty($act)&&!empty($domain))
{

    if(strpos($domain,".")!=false)
    {
        preg_match('/[^.]+.[^.]+$/' , $domain,$matches);
       $sql="select * from agencies where domain='".$matches[0]."'";
       $res=$db->getRow($sql);
       if(empty($res))
       {
            JsAlert("NO!该域名不是加盟商！");
       }
       else
       {
          JsAlert("YES!该域名是加盟商！");
       }
    }
    else
    {
        JsAlert("域名格式不正确!");
    }
}




?>