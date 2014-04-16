<?php
require_once("../inc/init.php");
define("ADMIN_PATH",ROOT_PATH.'admin'.DIRECTORY_SEPARATOR);
define("ADMIN_TEMPLATE_PATH", ADMIN_PATH."template".DIRECTORY_SEPARATOR);
$smarty->setTemplateDir(ADMIN_TEMPLATE_PATH);
$smarty->assign('view_path',"./template");
$smarty->assign('plugin_path',"../plugin");
$smarty->assign('ckeditor_path',"../plugin/ckeditor");
$smarty->assign('vp',"./template");




?>