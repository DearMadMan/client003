<?php /* Smarty version Smarty-3.1.16, created on 2014-01-22 16:57:32
         compiled from "D:\freehost\huangweitt\web\admin\template\user_msg.mad" */ ?>
<?php /*%%SmartyHeaderCode:620252df87fc53fef1-79408850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26ea9ee5deffb527621ade8aeacdb0bb289ae375' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\admin\\template\\user_msg.mad',
      1 => 1390304152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '620252df87fc53fef1-79408850',
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
  'unifunc' => 'content_52df87fc655883_75101490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df87fc655883_75101490')) {function content_52df87fc655883_75101490($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\huangweitt\\web\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?><div id="recovemain">
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
    <input type='button' class="coolbg" onClick="location='main.php?menu=users&target=usermsg';" value='VIP留言列表' />

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
/images/tbg.gif">&nbsp;VIP留言列表&nbsp;</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
	<td width="6%">ID</td>
	<td width="6%">用户ID</td>
	<td width="11%">称呼</td>
    <td width="58%">留言</td>
	<td width="11%">时间</td>
	<td width="4%">回复</td>
	<td width="4%">审核</td>
</tr>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
<input name="checkboxid[]"  type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="np"></td>
	<td><a href="main.php?menu=users&amp;target=edit&amp;user_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a></td>
	<td><span style="color:#ff0000"><?php echo $_smarty_tpl->tpl_vars['v']->value['nick_name'];?>
[<?php if ($_smarty_tpl->tpl_vars['v']->value['vip_level']=='0') {?>普会<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['vip_level']=='1') {?>推广<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['vip_level']=='2') {?>VIP<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['vip_level']=='3') {?>VIP<?php } else { ?>违规<?php }?>]</span></td>
	<td style="text-align: left;" ><p><?php echo $_smarty_tpl->tpl_vars['v']->value['user_msg'];?>
</p>
		<p style="color:red;">管理员回复：<?php echo $_smarty_tpl->tpl_vars['v']->value['recove'];?>
</p>
	</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y/%m/%d");?>
</td>
    <td><a class='recovelink' style="color:red;" href="main.php?menu=users&target=recove&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">回复</a></td>
    <td><?php if ($_smarty_tpl->tpl_vars['v']->value['can_see']==1) {?>已审核<?php } else { ?> <a style="color:red;" href="javascript:;" onclick="pass('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
',this)">审核</a><?php }?></td>
</tr>
<?php } ?>
<tr bgcolor="#FAFAF1">
<td height="28" colspan="10">
	&nbsp;
  <a href="javascript:SelectAll()" class="coolbg">全选</a>
	<a href="javascript:CancelAll()" class="coolbg">取消</a>

	<a href="javascript:Delete('ajax_user.php?act=DeleteMsg');" class="coolbg">&nbsp;删除&nbsp;</a>
</td>
</tr>

<tr align="right" bgcolor="#EEF4EA">
	<td height="36" colspan="10" align="right">
		<div class="pagetool"><?php echo $_smarty_tpl->tpl_vars['pagetool']->value;?>
</div>
	</td>

</tr>
</table>

</form><?php }} ?>
