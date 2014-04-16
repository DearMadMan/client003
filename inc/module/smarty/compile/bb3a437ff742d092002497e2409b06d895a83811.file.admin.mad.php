<?php /* Smarty version Smarty-3.1.16, created on 2014-04-16 08:52:56
         compiled from "E:\apache\www\study\admin.\template\admin.mad" */ ?>
<?php /*%%SmartyHeaderCode:30678534dd4684cb675-44638449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb3a437ff742d092002497e2409b06d895a83811' => 
    array (
      0 => 'E:\\apache\\www\\study\\admin.\\template\\admin.mad',
      1 => 1396264786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30678534dd4684cb675-44638449',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
    'agencies' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534dd46853b480_43506414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534dd46853b480_43506414')) {function content_534dd46853b480_43506414($_smarty_tpl) {?>

<form name="forms" method="post" action="system.php?act=adminEdit">

<table width="98%px" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
	<td height="24" colspan="10" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/tbg.gif">全局设置</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">管理员账号</td>
  <td width="81%" align="left"><input style="width:100px" type="text" name="admin_name" value="<?php if ($_smarty_tpl->tpl_vars['agencies']->value) {?><?php echo $_smarty_tpl->tpl_vars['admin']->value['domain'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['admin']->value['user_name'];?>
<?php }?>" disabled /></td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">管理员密码</td>
  <td width="81%" align="left"><input style="width:200px" type="text" name="admin_pass" value="" />
    为空则表示不修改</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">

  <td colspan="2"><input type="submit" name="submit" value="提交" />&nbsp;&nbsp;<input type="reset"  name="reset" value="重写"></td>
</tr>



</table>

</form>
<?php }} ?>
