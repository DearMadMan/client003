<?php
define("MadMan",true);
require_once("./init.php");
require_once("./lib_admin.php");
$act="";
if(isset($_REQUEST['act']))
{
	$act=$_REQUEST['act'];
}

if($act=="payit")
{
	CanPass();
	if(isset($_REQUEST['id'])&&!empty($_REQUEST['id'])&&is_numeric($_REQUEST['id']))
	{
		$sql="update expense set expense_status=1 where id=".$_REQUEST['id'];
		$res=$db->Query($sql);
		if($db->GetAffectedRows()>0)
		{
			echo "ok";
		}
		else
		{
			echo "打款出错!请稍后尝试!";
		}
	}
	else
	{
		echo "Your son of the bitch!";
	}
}
elseif($act=="agencies_payit")
{
	CanPass();
	if(isset($_REQUEST['id'])&&!empty($_REQUEST['id'])&&is_numeric($_REQUEST['id']))
	{
		$sql="update agencies_expense set expense_status=1 where id=".$_REQUEST['id'];
		$res=$db->Query($sql);
		if($db->GetAffectedRows()>0)
		{
			echo "ok";
		}
		else
		{
			echo "打款出错!请稍后尝试!";
		}
	}
	else
	{
		echo "Your son of the bitch!";
	}
}
elseif($act=="passit")
{

	if(isset($_REQUEST['id'])&&!empty($_REQUEST['id'])&&is_numeric($_REQUEST['id']))
	{
		$sql="update vipmsg set can_see=1 where id=".$_REQUEST['id'];
		$res=$db->Query($sql);
		if($db->GetAffectedRows()>0)
		{
			echo "ok";
		}
		else
		{
			echo "审核出错!请稍后尝试!";
		}
	}
	else
	{
		echo "Your son of the bitch!";
	}
}
elseif($act=="DeleteMsg")
{
	CanPass();
	DeleteSomething("vipmsg");
}
elseif($act=="DeleteAgency")
{
	CanPass();
	DeleteSomething("agencies");
}
elseif($act=="DeleteUsers")
{
	CanPass();
	DeleteSomething("users");
}
elseif($act=="DeletePrePayment")
{

	CanPass();
	DeleteSomething("income");
}
elseif($act=="DeleteEncashment")
{
	CanPass();
	DeleteSomething("expense");
}
elseif($act=="DeleteAgenciesEncashment")
{
		CanPass();
	DeleteSomething("agencies_expense");
}
elseif($act=="DeleteGoods")
{
	CanPass();
	DeleteSomething("goods");
}
elseif($act=="DeleteOrdes")
{
	CanPass();
	DeleteSomething("orders");
}
elseif($act=="DeleteArticle")
{
	CanPass();
	DeleteSomething("articles");
}
elseif($act=="DeleteArticleFree")
{
	CanPass();
	DeleteSomething("article_free","article_free_id");
}
elseif($act=="DeleteArticleType")
{
	CanPass();
	DeleteSomething("article_type");
}
elseif($act=="DeleteArticleFreeType")
{
	CanPass();
	DeleteSomething("article_free_type","article_free_type_id");
}
else
{
	echo "Go Away!";
}

function DeleteSomething($table,$id="id")
{
	if(empty($_POST['ids']))
	{
		echo "Your Son of Bitch!";
		die();
	}

	$sql="Delete from $table where $id in ".$_POST['ids'];
	$res=$GLOBALS['db']->Query($sql);
	if($GLOBALS['db']->GetAffectedRows()>0)
	{
		echo "ok";
	}
	else
	{
		echo "删除失败,请重新尝试!";
	}
}



?>