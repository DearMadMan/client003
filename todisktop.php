<?php
define("MadMan",true);
require_once("./inc/init.php");
$Shortcut = "[InternetShortcut]
URL=".$GLOBALS['configs']['domain']."
IDList=
[{000214A0-0000-0000-C000-000000000046}]
Prop3=19,2
";
Header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=�ú��ݵ�½ ʵ����ĲƸ�����.url;");
echo $Shortcut;
?>