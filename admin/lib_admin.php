<?php
$admin=array();

if(isset($_SESSION['admin_id'])&&(is_numeric($_SESSION['admin_id'])))
{
	$admin=GetAdminInfo($_SESSION['admin_id']);

	if(empty($admin))
	{
		JsJump("admin.php?act=login");
	}
    if(array_key_exists('domain', $admin))
    {
        $smarty->assign("agencies",true);
    }
    else
    {
        $smarty->assign("agencies",false);
    }
	$smarty->assign("admin",$admin);
}
else
{
	JsJump("admin.php?act=login");
}

?>