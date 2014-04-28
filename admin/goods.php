<?php
define("MadMan",true);
require_once("./init.php");
require_once("./lib_admin.php");
$act="";
if(isset($_REQUEST['act']))
{
	$act=$_REQUEST['act'];
}

if($act=='goods_edit')
{
	CanPass();
	if($_REQUEST['goods_id']==0)
	{
		//添加
			$fields=array("goods_name","goods_pic","goods_dis","need_credits","need_money","need_top","need_hidden","goods_data","goods_content","add_time");
			$data=array(
					$_REQUEST['goods_name'],
					$_REQUEST['goods_pic'],
					$_REQUEST['goods_dis'],
					intval($_REQUEST['need_credits']),
					intval($_REQUEST['need_money']),
					intval($_REQUEST['need_top']),
					intval($_REQUEST['need_hidden']),
					$_REQUEST['goods_data'],
					$_REQUEST['goods_content'],
					time()
				);
			$res=$db->autoExcute("goods","",$fields,$data);
			if($res)
			{
				JsAlertAndJump("添加成功!","main.php?menu=goods");
			}
			else
			{
				JsAlertAndJump("添加失败,请稍后重新尝试!","main.php?menu=goods&target=list");
			}
	}
	else
	{
		if(isset($_REQUEST['goods_id'])&&is_numeric($_REQUEST['goods_id']))
		{

			$fields=array("goods_name","goods_pic","goods_dis","need_credits","need_money","need_top","need_hidden","goods_data","goods_content");
			$data=array(
					$_REQUEST['goods_name'],
					$_REQUEST['goods_pic'],
					$_REQUEST['goods_dis'],
					intval($_REQUEST['need_credits']),
					intval($_REQUEST['need_money']),
					intval($_REQUEST['need_top']),
					intval($_REQUEST['need_hidden']),
					$_REQUEST['goods_data'],
					$_REQUEST['goods_content']
				);
			$res=$db->autoExcute("goods","id=".$_REQUEST['goods_id'],$fields,$data,"update");
			if($res)
			{
				JsAlertAndJump("修改成功!","main.php?menu=goods&target=goods_edit&goods_id=".$_REQUEST['goods_id']);
			}
			else
			{
				JsAlertAndJump("修改失败,请稍后重新尝试!","main.php?menu=goods&target=list");
			}
		}
		else
		{
			JsAlertAndJump("修改失败,请稍后重新尝试!","main.php?menu=goods&target=list");
		}
	}
}
elseif ($act=="vipEdit") {
	CanPass();
//先获取表单信息
	$res= SetConfigsToDatabase($_POST);
	if($res)
	{
		JsAlertAndJump("保存成功!","main.php?menu=goods&target=vip");
	}
	else
	{
		JsAlertAndJump("保存失败!请重新尝试!","main.php?menu=goods&target=vip");
	}
}
elseif ($act=='articleEdit') {
	CanPass();
	if(isset($_REQUEST['id'])&&is_numeric($_REQUEST['id']))
	{
		if($_REQUEST['id']==0)
		{
			$fields=array("type_id","title","content","add_time");
			$data=array(
				intval($_REQUEST['art_id']),
				$_REQUEST['title'],
				$_REQUEST['content'],
				time()
			);

			$res=$db->autoExcute("articles","",$fields,$data);
			if(!$res)
			{
				JsAlertAndJump("添加失败!","main.php?menu=goods&target=article_edit");
			}
			else
			{
				JsAlertAndJump("添加成功!","main.php?menu=goods&target=article");
			}
		}
		else
		{
				$sql="update articles set type_id=".$_REQUEST['art_id']
				.", content='".$_REQUEST['content']."', title='"
				.$_REQUEST['title']."' where id=".intval($_REQUEST['id']);
			$res=$db->Query($sql);
			if($db->GetAffectedRows()>0)
			{
				JsAlertAndJump("修改成功!","main.php?menu=goods&target=article_edit&id=".intval($_REQUEST['id']));
			}
			else
			{
				JsAlertAndJump("未发生变动!","main.php?menu=goods&target=article_edit&id=".intval($_REQUEST['id']));
			}
		}

	}

}

elseif ($act=='articleFreeEdit') {
	CanPass();
	if(isset($_REQUEST['id'])&&is_numeric($_REQUEST['id']))
	{
		if($_REQUEST['id']==0)
		{
			$fields=array("type_id","title","content","add_time");
			$data=array(
				intval($_REQUEST['art_id']),
				$_REQUEST['title'],
				$_REQUEST['content'],
				time()
			);

			$res=$db->autoExcute("article_free","",$fields,$data);
			if(!$res)
			{
				JsAlertAndJump("添加失败!","main.php?menu=goods&target=article_free_edit");
			}
			else
			{
				JsAlertAndJump("添加成功!","main.php?menu=goods&target=article_free");
			}
		}
		else
		{
				$sql="update article_free set type_id=".$_REQUEST['art_id']
				.",content='".$_REQUEST['content']."', title='"
				.$_REQUEST['title']."' where article_free_id=".intval($_REQUEST['id']);
			$res=$db->Query($sql);
			if($db->GetAffectedRows()>0)
			{
				JsAlertAndJump("修改成功!","main.php?menu=goods&target=article_free_edit&id=".intval($_REQUEST['id']));
			}
			else
			{
				JsAlertAndJump("未发生变动!","main.php?menu=goods&target=article_free_edit&id=".intval($_REQUEST['id']));
			}
		}

	}

}




elseif($act=='articleTypeEdit')
{
	CanPass();
	if(isset($_REQUEST['id'])&&is_numeric($_REQUEST['id']))
	{
		if($_REQUEST['id']==0)
		{
			$fields=array("id","type_name");
			$data=array(
				intval($_REQUEST['id']),
				$_REQUEST['type_name']
			);

			$res=$db->autoExcute("article_type","",$fields,$data);
			if(!$res)
			{
				JsAlertAndJump("添加失败!","main.php?menu=goods&target=article_type");
			}
			else
			{
				JsAlertAndJump("添加成功!","main.php?menu=goods&target=article_type");
			}
		}
		else
		{
				$sql="update article_type set type_name='".$_REQUEST['type_name']."' where id=".intval($_REQUEST['id']);
			$res=$db->Query($sql);
			if($db->GetAffectedRows()>0)
			{
				JsAlertAndJump("修改成功!","main.php?menu=goods&target=article_type_edit&id=".intval($_REQUEST['id']));
			}
			else
			{
				JsAlertAndJump("未发生变动!","main.php?menu=goods&target=article_type_edit&id=".intval($_REQUEST['id']));
			}
		}

	}

}
elseif($act=='articleFreeTypeEdit')
{
	CanPass();
	if(isset($_REQUEST['id'])&&is_numeric($_REQUEST['id']))
	{
		if($_REQUEST['id']==0)
		{
			$fields=array("article_fee_type_id","type_name");
			$data=array(
				intval($_REQUEST['id']),
				$_REQUEST['type_name']
			);

			$res=$db->autoExcute("article_free_type","",$fields,$data);
			if(!$res)
			{
				JsAlertAndJump("添加失败!","main.php?menu=goods&target=article_free_type");
			}
			else
			{
				JsAlertAndJump("添加成功!","main.php?menu=goods&target=article_free_type");
			}
		}
		else
		{
				$sql="update article_free_type set type_name='".$_REQUEST['type_name']."' where article_fee_type_id=".intval($_REQUEST['id']);
			$res=$db->Query($sql);
			if($db->GetAffectedRows()>0)
			{
				JsAlertAndJump("修改成功!","main.php?menu=goods&target=article_free_type_edit&id=".intval($_REQUEST['id']));
			}
			else
			{
				JsAlertAndJump("未发生变动!","main.php?menu=goods&target=article_free_type_edit&id=".intval($_REQUEST['id']));
			}
		}

	}

}




else
{

	JSJump("main.php?menu=goods&target=list");
}

?>