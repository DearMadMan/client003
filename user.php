<?php
define("MadMan",true);
require_once("./inc/init.php");
$act="";
if(!isset($_REQUEST['act']))
{
	$_REQUEST['act']='index';
}
$act=strtolower($_REQUEST['act']);
$user=array();
if(isset($_SESSION['user_id'])&&(is_numeric($_SESSION['user_id'])))
{
	$user=getUserInfo($_SESSION['user_id']);
	$sql="select count(id) from users where spreader_id='".$user['id']."'";
	$res=$db->getOne($sql);
	$smarty->assign('spreader_num',$res);
	$smarty->assign("user",$user);
	GetPics();
	$domain=$GLOBALS['configs']['domain'];
	$domain=str_replace("http://", "", $domain);
	$domain=str_replace("www.", "", $domain);
	$smarty->assign("domain",$domain);
}
else
{
	if($act!="login"&&$act!="register"){
		JsJump("user.php?act=login");
	}

}

if($act=="index")   //产品推荐页面
{
	    $sql="select * from goods where need_top=1 and need_hidden=0 order by id desc limit 0,5";
	    $res=$db->getAll($sql);
	    $smarty->assign("goods_top",$res);
	    $sql="select * from goods where need_top=0 and need_hidden=0 order by id desc";
		$id="id";
		$pagePath='user.php?act=index';
		pageTooleFunc($sql,$pagePath,$id);
}

elseif($act=="email")
{

	$smarty->display("email.mad");
	die();
}
elseif($act=="useredit")
{
	if(isset($_REQUEST['nick_name']))
		{

			$fields=array("nick_name","pay_name","pay_email","address");
			$data=array(
					$_REQUEST['nick_name'],
					$_REQUEST['pay_name'],
					$_REQUEST['pay_email'],
					$_REQUEST['address']
				);
			if(!empty($_REQUEST['user_pass']))
			{
				$fields[]="user_word";
				$data[]=MD5($_REQUEST['user_pass']);
			}
			$res=$db->autoExcute("users","id=".$_SESSION['user_id'],$fields,$data,"update");
			if($res)
			{

				JsAlertAndJump("修改成功!","user.php?act=userinfo");
			}
			else
			{
				JsAlertAndJump("修改失败,请稍后重新尝试!","user.php?act=userinfo");
			}
		}
		else
		{
			JsAlertAndJump("修改失败,请稍后重新尝试!","user.php?act=userinfo");
		}
}
else if($act=="prepayment")
{
	    $sql="select * from income where user_id=".$_SESSION['user_id'];
		$id="id";
		$pagePath='user.php?act=prepayment';
		pageTooleFunc($sql,$pagePath,$id);
}
else if($act=='primary')
{
	if($user["vip_level"]<1)
	{
		JsAlertAndJump("您无权进入！请联系客服","user.php?act=userinfo");
	}
}
else if($act=='encashment')
{
	  $sql="select * from expense where user_id=".$_SESSION['user_id'];
		$id="id";
		$pagePath='user.php?act=encashment';
		pageTooleFunc($sql,$pagePath,$id);
}
else if($act=="vipmsg")
{

	    $sql="select v.id,u.nick_name,v.user_id,v.user_msg,v.recove,v.add_time from vipmsg as v left join users as u on v.user_id=u.id where v.can_see=1 order by v.id desc";
		$id="v.id";
		$pagePath='user.php?act=vipmsg';
		pageTooleFunc($sql,$pagePath,$id);
}
else if($act=='userinfo') //用户信息
{

}
else if($act=="add_msg")
{
	if(empty($_REQUEST['msg']))
	{
		JsAlertAndJump("内容不能为空!","user.php?act=vipmsg");
	}
	$sql="select * from vipmsg where user_id='".$user['id']."' order by add_time desc";
	$res=$db->getRow($sql);
	if(!empty($res))
	{
		if(time()<(intval($res['add_time'])+60))
		{
			JsAlertAndJump("Sorry,一分钟内禁止重复留言!","user.php?act=vipmsg");
		}
	}
	$fields=array("user_id","user_msg","add_time","can_see");
	$data=array(
		$user["id"],
		$_REQUEST['msg'],
		time(),
		0
		);
	$res=$db->autoExcute("vipmsg","",$fields,$data);
	if($res)
	{
		JsAlertAndJump("留言成功!","user.php?act=vipmsg");
	}
	else
	{
		JsAlertAndJump("留言失败,请稍后尝试!","user.php?act=vipmsg");
	}
}
else if($act=='register') //注册页面
{
	//$_SESSION已经记录
	if(!empty($user))
	{
		JsJump("user.php");
	}

	if(!empty($_REQUEST['user_name'])&&!empty($_REQUEST['user_password']))
	{

		//判断用户是否注册过多次
		$sql="select count(id) from users where register_ip='".$_SERVER['REMOTE_ADDR']."' or last_ip='".$_SERVER['REMOTE_ADDR']."' and add_time>".(time()-60*60*24*30);
		$res=$db->getOne($sql);
		if(intval($res)>=2)
		{
			JsAlertAndJump("Sorry!30天内最多允许注册两次！","index.php");
		}


		$sql="select * from users where user_name='".$_REQUEST['user_name']."'";
		$res=$db->getRow($sql);
		if(!empty($res))
		{
			JsAlertAndJump("Sorry!该用户已经被注册！","index.php");
		}
		//进行注册
		//判断是否有推荐者
		$spreader=0;
		if(isset($_REQUEST['spreader'])&&is_numeric($_REQUEST['spreader']))
		{
			$spreader=$_REQUEST['spreader'];
		}
		$fields="user_name,nick_name,user_word,email,spreader_id,add_time,register_ip";
		$datas="'".$_REQUEST['user_name']."','求昵称','".MD5($_REQUEST['user_password'])."','".$_REQUEST['user_name']."@qq.com',$spreader,'".time()."','".$_SERVER['REMOTE_ADDR']."'";
		if(!empty($_SESSION['agencies_id']))
		{
			$fields=$fields.",agencies_id";
			$datas=$datas.",'".$_SESSION['agencies_id']."'";
		}
		$res=$db->AutoExcute("users","",$fields,$datas);
		if(!$res)
		{
			JsAlertAndJump("Sorry!注册失败！请重新尝试!","index.php");
		}
		else
		{
			//注册成功！
			$id=$db->getInsertId();
			if(!empty($id))
			{
				$_SESSION['user_id']=$id;
			}
			JsJump("user.php?act=email");
		}
	}



	//推荐者判断
	if(isset($_REQUEST['spreader'])&&is_numeric($_REQUEST['spreader']))
	{
		$smarty->assign("spreader",$_REQUEST['spreader']);
	}
	$smarty->display("register.mad");
	die();
}
else if($act=="login")	//登录页面
{
	//$_SESSION已经记录
	if(!empty($user))
	{
		JsJump("user.php");
	}
	//cookie登录

	if(!empty($_COOKIE['remenber']))
	{
		$id_array=explode("|",$_COOKIE['remenber']);

		if(count($id_array)!=2)
		{
			setcookie("remenber","",time());
			JsJump("user.php?act=login");
		}
		$id=$id_array[0];
		$id=str_replace("md",'',$id);
		if(!is_numeric($id))
		{
			setcookie("remenber","",time());
			JsJump("user.php?act=login");
		}
		$sql="select * from users where id=$id and  vip_level!=3";
		if(!empty($_SESSION['agencies_id']))
		{
			$sql=$sql." and agencies_id=".$_SESSION['agencies_id'];
		}
		$res=$db->getRow($sql);
		if($id_array[1]!=(MD5($res['id']).MD5($res['user_word'])))
		{
			setcookie("remenber","",time());
			JsJump("user.php?act=login");
		}
		else
		{
			//验证通过

			$_SESSION['user_id']=$res['id'];
			JsJump("user.php");

		}
	}
	//login登录
	if(isset($_REQUEST['user_name'])&&isset($_REQUEST['user_password']))
	{
		$sql="select * from users where user_name='".$_REQUEST['user_name']."' and user_word='".MD5($_REQUEST['user_password'])."'";

			if(!empty($_SESSION['agencies_id']))
		{
			$sql=$sql." and agencies_id=".$_SESSION['agencies_id'];
		}


		$res=$db->getRow($sql);

		if(!empty($res))
		{
			if($res['vip_level']==3)
			{
				JsAlertAndJump("您是违规用户，禁止登录！","user.php");
			}
			if(empty($_COOKIE['remenber']))
			{
				if($_REQUEST['remenber']=='true')
				{
					setcookie("remenber","md".$res['id']."|".MD5($res['id']).MD5($res['user_word']),time()+7*24*60*60,NULL,NULL,NULL,true);
				}
				else
				{
					setcookie("remenber","",time());
				}
			}
			//验证通过
			$_SESSION['user_id']=$res['id'];
			if($res['first_login']==0)
			{
				$user=$res;
				$sql="update users set first_login='1',last_ip='".$_SERVER['REMOTE_ADDR' ]."' where id='".$user['id']."'";
				$db->query($sql);
				if($user['spreader_id']!=0)
				{
					$sql="update users set credits=credits+".$GLOBALS['configs']['login_credits']." where id='".$user['spreader_id']."'";
					$db->query($sql);
				}
			}
			JsJump("user.php");

		}
		else
		{
			JsAlert("请确认您的用户名密码是否正确!");
		}

	}





	$smarty->display("login.mad");
	die();

}
elseif($act=='vip_article_id')
{
	if(isset($_REQUEST['id'])&&intval($_REQUEST['id'])!=0)
	{
		$sql="select type_id from articles where id='".$_REQUEST['id']."'";
		$res=$db->getOne($sql);
		if ($res==0) {

		}
		else
		{
					if($user['vip_level']!=2)
			{
				JsAlertAndJump("非VIP不得入内!","user.php");
			}
		}
	}
	if(!empty($_REQUEST["id"]))
	{
		$sql="select * from articles where id='".$_REQUEST['id']."'";
		$res=$db->getRow($sql);
		if(!empty($res))
		{
			$smarty->assign("v",$res);
		}
		else
		{
			JsAlertAndJump("获取文章信息失败!请稍后重新尝试!","user.php?act=vip_article");
		}
	}
}
elseif ($act=='vip_article')
{
	if(isset($_REQUEST['id'])&&intval($_REQUEST['id'])!=0)
	{
		$sql="select type_id from articles where id='".$_REQUEST['id']."'";
		$res=$db->getOne($sql);
		if ($res==0) {

		}
		else
		{
					if($user['vip_level']!=2)
			{
				JsAlertAndJump("非VIP不得入内!","user.php");
			}
		}
	}

	$sql="select * from article_type";
	$res=$db->getAll($sql);
	$smarty->assign("type",$res);
	$smarty->assign("art_name","全部资源");
	$sql="select * from articles order by add_time desc";
		$id="id";
		$pagePath='user.php?act=vip_article';
		pageTooleFunc($sql,$pagePath,$id);
}
elseif ($act=='article_type')
{
	$act="vip_article";
	if($user['vip_level']!=2&&$_REQUEST['id']!=0) //0代表平台资讯
	{
		JsAlertAndJump("非VIP不得入内!","user.php");
	}
	$sql="select * from article_type";
	$res=$db->getAll($sql);
	$smarty->assign("type",$res);
	$sql="select * from article_type where id='".$_REQUEST['id']."'";
	$res=$db->getRow($sql);
	$smarty->assign("art_name",$res['type_name']);

		$sql="select * from articles where type_id='".$_REQUEST['id']."' order by add_time desc";
		$id="id";
		$pagePath='user.php?act=article_type&id='.$_REQUEST['id'];
		pageTooleFunc($sql,$pagePath,$id);

}
else if($act=="loginout") //退出登录
{

	unset($_SESSION['user_id']);
	setcookie("remenber","",time());
	header("Location: ".$gbs['configs']['domain']);
}
else
{

	header("Location: ".$gbs['configs']['domain']);
	//返回首页
}

$smarty->assign("act",$act);
$smarty->display("user.mad");


function pageTooleFunc($sql,$pagePath,$id,$search="")
{
	$pagetool=pagetool::GetInstance();
		if(!isset($_GET['pageNow']))
		{

			$_GET['pageNow']=0;
		}
		if(!empty($search))
		{
				if(isset($_GET['search'])&&$_GET["search"]==1)
			{
				$sql.=$search;
			}
		}
		$pageNow=intval($_GET['pageNow']);
		$dfNum=$GLOBALS['configs']['goods_view_num'];
		$db=$GLOBALS['db'];
		$pagetool->setNeed($db,$sql,$dfNum,$pageNow,$pagePath,$id);
		$str= $pagetool->CreatePageRow();
		$rows=$pagetool->getRes();
		$GLOBALS['smarty']->assign("rows",$rows);
		$GLOBALS['smarty']->assign("pagetool",$str);
}




?>