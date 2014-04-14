<?php /* Smarty version Smarty-3.1.16, created on 2014-04-14 09:36:56
         compiled from "E:\apache\www\study\admin.\template\agencies.mad" */ ?>
<?php /*%%SmartyHeaderCode:28801534b3bb8e15c02-19303011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efa28a9d7dfe2787f275b709ee1e85ef6fbc2fd3' => 
    array (
      0 => 'E:\\apache\\www\\study\\admin.\\template\\agencies.mad',
      1 => 1395195921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28801534b3bb8e15c02-19303011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534b3bb8e550f7_38940391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534b3bb8e550f7_38940391')) {function content_534b3bb8e550f7_38940391($_smarty_tpl) {?>

<form name="forms" method="post" action="system.php?act=addDomain">

<table width="98%px" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
    <td height="24" colspan="10" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/tbg.gif">添加域名</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">站点名称:</td>
  <td width="81%" align="left"><input style="width:100px" type="text" name="admin_name" value="10nai.com" />(主域名格式:10nai.com 不要写www.10nai.com)</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">管理员密码</td>
  <td width="81%" align="left"><input style="width:200px" type="text" name="admin_pass" value="" />
    为空则表示不修改</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">起始时间</td>
  <td width="81%" align="left"><input style="width:200px" type="text" name="start_time" value="" />(格式:2014/04/19)
    </td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">结束时间</td>
  <td width="81%" align="left"><input style="width:200px" type="text" name="end_time" value="" />(格式:2014/04/19)
</td>
</tr>

<tr align="center" bgcolor="#FAFAF1" height="30">

  <td colspan="2"><input type="submit" name="submit" value="提交" />&nbsp;&nbsp;<input type="reset"  name="reset" value="重写"></td>
</tr>



</table>

</form>
<?php }} ?>
