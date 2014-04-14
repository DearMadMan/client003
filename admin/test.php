<?php
define("MadMan",true);
require_once("./init.php");
require_once("./lib_admin.php");

uploadfile::SetTempDir("../images/");
$upload=uploadfile::UploadFiles($_FILES);
echo $upload[0];

?>