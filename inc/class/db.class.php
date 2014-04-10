<?php


 abstract class db
 {
 	abstract protected function Connect($host,$user,$pwd);
 	abstract protected function SelectDb($db);
 	abstract protected function SetCharset($charset);
 	abstract protected function Query($sql);
 	abstract protected function GetOne($sql);
 	abstract protected function GetRow($sql);
 	abstract protected function GetAll($sql);
 	abstract protected function GetInsertId($source="");
 	abstract protected function GetAffectedRows($source="");
 	abstract protected function AutoExcute($table,$where="",$fields="",$data="",$type="insert");
 }

?>