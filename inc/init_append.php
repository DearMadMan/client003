<?php

/*代理*/
$url_arr=explode(".", $_SERVER['HTTP_HOST']) ;
$last=array_pop($url_arr);
$last2=array_pop($url_arr);
$url=$last2.".".$last;
$sql="select * from agencies where domain='".$url."' and end_time>".time();
$res=$db->getRow($sql);
$_SESSION['agencies_id']=0;
$smarty->assign("is_agencies",false);
$smarty->assign("agencies",false);
if(empty($res))
{
    if($url==$config_main_domain)
    {
        $_SESSION['agencies_id']=0;
    }
    else
    {
        header("Content-type: text/html; charset=utf-8");
        die("本站点已过期或违规，请联系总站99nai.com客服");
    }
}
else
{
    //代理
    $smarty->assign("is_agencies",true);
    $smarty->assign("agencies",true);
    $_SESSION['agencies_id']=$res['id'];
}




if($_SESSION["agencies_id"]==0)
{
    GetConfigsFromDatabase($config_dbname);
}
else
{
    GetConfigsFromDatabaseByAgenciesId($_SESSION['agencies_id']);
}
$smarty->assign("config_main_domain","http://www.".$config_main_domain);
$smarty->assign('mad_configs',$GLOBALS['configs']);

$smarty->assign('view_path',"view/".$GLOBALS['configs']['default_template']);
$smarty->assign('vp',"view/".$GLOBALS['configs']['default_template']);
$smarty->assign("plugin_path","plugin");
//echo "view/".$GLOBALS['configs']['default_template'];
//print_r($GLOBALS['configs']);die;

?>