<?php
define("MadMan",true);
require_once("./inc/init.php");
$act="";
$id=0;
if(isset($_REQUEST['id']))
{
    $id=intval($_REQUEST['id']);
}
$sql="select * from article_free_type where article_free_type_id=$id";
$type=$db->getRow($sql);
if(empty($type))
{
    location("index.php");
}
$smarty->assign("type",$type);
$sql="select * from article_free where type_id=$id";
$res=$db->getRow($sql);
if(empty($res))
{
    location("index.php");
}
$smarty->assign("articles",$res);

$smarty->display("article_type.mad");
?>