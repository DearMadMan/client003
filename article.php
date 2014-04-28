<?php
define("MadMan",true);
require_once("./inc/init.php");
$act="";
$id=0;
if(isset($_REQUEST['id']))
{
    $id=intval($_REQUEST['id']);
}

$sql="select * from article_free where article_free_id=$id order by add_time desc";
$res=$db->getRow($sql);
if(empty($res))
{
    location("index.php");
}
$smarty->assign("article",$res);

$smarty->display("article.mad");
?>