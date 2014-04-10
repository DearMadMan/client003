<?php
define("MadMan", true);
require_once("init.php");
$sql="select * from users where id=1058";
                $rs=$db->Query($sql);
                $rows=mysql_fetch_assoc($rs);
                if($rows['agencies_id']!=0)
                {
                        mysql_query("Update agencies set income=income+1 Where id=".$rows['agencies_id']);
                }

?>