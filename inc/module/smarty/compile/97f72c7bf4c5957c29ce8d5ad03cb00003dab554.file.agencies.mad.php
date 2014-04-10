<?php /* Smarty version Smarty-3.1.16, created on 2014-03-30 09:47:13
         compiled from "E:\apache\www\study\admin\template\agencies.mad" */ ?>
<?php /*%%SmartyHeaderCode:267245328f6b4680f28-05108302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97f72c7bf4c5957c29ce8d5ad03cb00003dab554' => 
    array (
      0 => 'E:\\apache\\www\\study\\admin\\template\\agencies.mad',
      1 => 1395195921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267245328f6b4680f28-05108302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5328f6b46c7787_35601485',
  'variables' => 
  array (
    'vp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5328f6b46c7787_35601485')) {function content_5328f6b46c7787_35601485($_smarty_tpl) {?>

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
