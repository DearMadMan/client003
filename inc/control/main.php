<?php

function CanPass()
{
	if($_SESSION['agencies_id'])
	{
		die("无权操作！");
	}
}

 function GetConfigsFromDatabase($config_dbname)
{
	$sql="select * from $config_dbname";
	$configs=$GLOBALS['db']->GetAll($sql);
	$arr=array();
	$configs_all=array();
	foreach ($configs as $key => $value) {
		$arr[$value['cf_name']]=$value['cf_value'];
		$configs_all[$value['cf_name']]=$value;
	}

	$GLOBALS['configs'] = $arr;
	$GLOBALS['configs_all']=$configs_all;
	$GLOBALS['configs']['services_qq_array']=explode(";",$GLOBALS['configs']['services_qq']);
}

function GetAgenciesFormId($id)
{
	$sql="select * from agencies where id=".$id;
	$res=$GLOBALS['db']->getRow($sql);
	return $res;
}

function GetAgenciesCount($id)
{
	$smarty=$GLOBALS['smarty'];
	$db=$GLOBALS['db'];
	$sql="select * from agencies where id=".$id;
			$res=$db->getRow($sql);
			if(!empty($res))
			{
				$goods_money=GetAgenciesIncomeTody($id,"goods");
				$vip_money=GetAgenciesIncomeTody($id,"vip");
				$user_num=GetAgenciesUsersNum($id);
				$smarty->assign("goods_money",$goods_money);
				$smarty->assign("user_num",$user_num);
				$smarty->assign("vip_money",$vip_money);
				$smarty->assign("agencies",$res);
			}
}


function SetAgenciesMoneyLog($type,$agencies_id,$money)
{
	$fields=array("type","agencies_id","money","add_time");
	$data=array($type,$agencies_id,$money,time());
	$res=$GLOBALS['db']->autoExcute("agencies_spreader","",$fields,$data);
}

function GetAgenciesIncomeTody($agencies_id,$type)
{
	$sql="select sum(money) from agencies_spreader where agencies_id=$agencies_id and type='$type' and add_time>".strtotime(date("Y-m-d"));
	$res=$GLOBALS['db']->getOne($sql);
	if(empty($res))
	{
		return 0;
	}
	return $res;
}

function GetAgenciesUsersNum($agencies_id)
{
		$sql="select count(id) from users where agencies_id=$agencies_id";
	$res=$GLOBALS['db']->getOne($sql);
	if(empty($res))
	{
		return 0;
	}
	return $res;

}

 function GetConfigsFromDatabaseByAgenciesId($id)
{
	$sql="select * from agencies_configs where agencies_id=$id ";

	$configs=$GLOBALS['db']->getRow($sql);
	$configs_all=array();
	$configs_all=json_decode($configs['configs'],true);
	foreach ($configs_all as $key => $value) {

		$configs_all[$key]=urldecode($value);

	}
	$GLOBALS['agencies_configs'] = $configs_all;
	$sql="select * from configs";
	$admin_configs=$GLOBALS['db']->GetAll($sql);
	foreach ($admin_configs as $key => $value) {
         if(!array_key_exists($value['cf_name'],$configs_all))
         {
         	$configs_all[$value['cf_name']]=$value['cf_value'];
         }
	}
	$GLOBALS['configs']=$configs_all;
	$GLOBALS['configs_all']=$configs_all;
	$GLOBALS['configs']['services_qq_array']=explode(";",$GLOBALS['configs']['services_qq']);
}

 function SetConfigsToDatabaseByAgenciesId($id,$Data)
{

	foreach ($GLOBALS['agencies_configs']  as $key => $value) {
		if(array_key_exists($key,$Data))
		{
			$GLOBALS['agencies_configs'][$key]=$Data[$key];
		}
	}
	foreach ($Data as $key => $value) {
		if(!array_key_exists($key,$GLOBALS['agencies_configs']))
		{
			$GLOBALS['agencies_configs'][$key]=$Data[$key];
		}
	}
	foreach ($GLOBALS['agencies_configs'] as $key => $value) {
		$GLOBALS['agencies_configs'][$key]=urlencode($value);
	}
	$str=json_encode($GLOBALS['agencies_configs']);
	$sql="update agencies_configs set configs='".$str."' where agencies_id=$id";
	$res=$GLOBALS['db']->Query($sql);
	if($GLOBALS['db']->GetAffectedRows()>0)
	{
		$res=true;
	}
	else{
		$res=false;
	}

   return $res;
}



function SetConfigsToDataBase($Data)
{
	$values="";
	foreach ($GLOBALS['configs']  as $key => $value) {
		if(array_key_exists($key,$Data))
		{
			$GLOBALS['configs'][$key]=$Data[$key];
		}

	}

$GLOBALS['configs']['services_qq_array']=implode(",", $GLOBALS['configs']['services_qq_array']);
	foreach ($GLOBALS['configs'] as $key => $value) {
		$values.="('$key','$value'),";
	}

	$values=trim($values,',');
   $GLOBALS['db']->Query("truncate configs");
  $res= $GLOBALS['db']->Query("Insert into configs (cf_name,cf_value) values $values");
   return $res;
}
function Location($target)
{
	$target=addslashes($target);
	header("location: $target");
	die();
}
function GetAdminInfo($id)
{
	$sql="select * from admins where id=".intval($id);
	if(!empty($_SESSION['agencies_id']))
	{
		$sql="select * from agencies where id=".intval($id);
	}
	$res=$GLOBALS['db']->getRow($sql);
	if(empty($res))
	{

		die("未查询到改会员");
	}
	return $res;
}

function GetUserInfo($id)
{
	$sql="select * from users where id=".intval($id);
	if(!empty($_SESSION['agencies_id']))
	{
		$sql="select * from users where id=".intval($id)." and agencies_id=".$_SESSION['agencies_id'];
	}
	$res=$GLOBALS['db']->getRow($sql);
	if(empty($res))
	{
		if(isset($_SESSION['user_id']))
		{
			unset($_SESSION['user_id']);
		}
		die("未查询到改会员");
	}
	return $res;
}


function GetPics()
{
	$sql="select * from images";
		$res=$GLOBALS['db']->getRow($sql);
		if(empty($res))
		{
			$res["pic1"]="";
			$res["pic2"]="";
			$res["pic3"]="";
			$res["pic4"]="";
			$res["link1"]="";
			$res["link2"]="";
			$res["link3"]="";
			$res["link4"]="";
		}
		else
		{
			$pics=json_decode($res['pics']);
			$links=json_decode($res['links']);
			$res["pic1"]=$pics[0];
			$res["pic2"]=$pics[1];
			$res["pic3"]=$pics[2];
			$res["pic4"]=$pics[3];
			$res["link1"]=$links[0];
			$res["link2"]=$links[1];
			$res["link3"]=$links[2];
			$res["link4"]=$links[3];
		}
		$GLOBALS['smarty']->assign("pics",$res);
}


function JsAlert($msg)
{
	$msg=addslashes($msg);
	$str="<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>"
		."<script type='text/javascript'>"
		."alert('".$msg."');"
		."</script>";
		echo $str;
}
function JsAlertAndJump($msg,$target)
{
	$msg=addslashes($msg);
	$target=addslashes($target);
	$str="<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>"
		."<script type='text/javascript'>"
		."alert('".$msg."');"
		."window.location.href='$target';"
		."</script>";
		echo $str;
		die();

}
function JsJump($target)
{
		$target=addslashes($target);
		$str="<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>"
		."<script type='text/javascript'>"
		."window.location.href='$target';"
		."</script>";
		echo $str;
		die();
}

?>