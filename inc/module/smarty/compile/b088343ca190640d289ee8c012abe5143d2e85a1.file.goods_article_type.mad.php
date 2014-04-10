<?php /* Smarty version Smarty-3.1.16, created on 2014-01-22 16:58:49
         compiled from "D:\freehost\huangweitt\web\admin\template\goods_article_type.mad" */ ?>
<?php /*%%SmartyHeaderCode:2533252df88496e3003-38320288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b088343ca190640d289ee8c012abe5143d2e85a1' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\admin\\template\\goods_article_type.mad',
      1 => 1390309764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2533252df88496e3003-38320288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
    'rows' => 0,
    'v' => 0,
    'pagetool' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52df88497afea9_85547654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df88497afea9_85547654')) {function content_52df88497afea9_85547654($_smarty_tpl) {?><div id="recovemain">
<div id="recove">
<p class="close" title='关闭'>X</p>
</div>
<div id="recovemsg">
		<textarea name="usermsg" id="usermsg" cols="30" rows="10"></textarea>
		<textarea name="adminmsg" id="adminmsg" cols="30" rows="10"></textarea>
		<input id='btnrecove' type="button" value="回复">
</div>
</div>
<!--  快速转换位置按钮  -->
<table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#D1DDAA" align="center">
<tr>
 <td height="26" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/newlinebg3.gif">
  <table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td align="center">
    <input type='button' class="coolbg" onClick="location='main.php?menu=goods&target=article_type';" value='分类管理' />
<input type='button' class="coolbg" onClick="location='main.php?menu=goods&target=article_type_edit';" value='添加分类' />
 </td>
 </tr>
</table>
</td>
</tr>
</table>

<!--  内容列表   -->
<form name="checkboxform" method="post" action="?type=del">

<table width="98%" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
	<td height="24" colspan="10" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/tbg.gif">&nbsp;文章分类&nbsp;</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
	<td width="6%">ID</td>
	<td width="50%">分类名称</td>
	<td width="8%">编辑</td>
	<td width="8%">删除</td>
</tr>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>

	<td>
      <?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</td>
    <td><a  style="color:red;" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" href="main.php?menu=goods&target=article_type_edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a></td>
    <td><input name="checkboxid[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="np"></td>
</tr>
<?php } ?>
<tr bgcolor="#FAFAF1">
<td height="28" colspan="10">
	&nbsp;
    <a href="javascript:SelectAll()" class="coolbg">全选</a>
	<a href="javascript:CancelAll()" class="coolbg">取消</a>

	<a href="javascript:Delete('ajax_user.php?act=DeleteArticleType');" class="coolbg">&nbsp;删除&nbsp;</a>
</td>
</tr>
<tr align="right" bgcolor="#EEF4EA">
	<td height="36" colspan="10" align="right">
		<div class="pagetool">
			<?php echo $_smarty_tpl->tpl_vars['pagetool']->value;?>

		</div>
	</td>

</tr>
</table>

</form><?php }} ?>
