<?php /* Smarty version Smarty-3.1.16, created on 2014-04-16 08:52:46
         compiled from "E:\apache\www\study\admin.\template\agencies_edit.mad" */ ?>
<?php /*%%SmartyHeaderCode:32576534dd45e65eb67-78828499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab740954b2d3c1a0645d189c47369be7f99338c5' => 
    array (
      0 => 'E:\\apache\\www\\study\\admin.\\template\\agencies_edit.mad',
      1 => 1397029768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32576534dd45e65eb67-78828499',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
    'agencies' => 0,
    'goods_money' => 0,
    'vip_money' => 0,
    'user_num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534dd45e7ffb72_25485650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534dd45e7ffb72_25485650')) {function content_534dd45e7ffb72_25485650($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\study\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?>

<form name="forms" method="post" action="system.php?act=EditDomain">

<table width="98%px" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
    <td height="24" colspan="10" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/tbg.gif">修改域名</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">站点名称:</td>
  <td width="81%" align="left"><input style="width:100px" type="text" name="admin_name" value="<?php echo $_smarty_tpl->tpl_vars['agencies']->value['domain'];?>
" />(主域名格式:10nai.com 不要写www.10nai.com)</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">管理员密码</td>
  <td width="81%" align="left"><input style="width:200px" type="text" name="admin_pass" value="" />
    为空则表示不修改</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">起始时间</td>
  <td width="81%" align="left"><input style="width:200px" type="text" name="start_time" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['agencies']->value['start_time'],'%Y/%m/%d');?>
" />
    </td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">结束时间</td>
  <td width="81%" align="left"><input style="width:200px" type="text" name="end_time" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['agencies']->value['end_time'],'%Y/%m/%d');?>
" />
</td>
</tr>


<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">今日商品收益</td>
  <td width="81%"  align="center" style="color:red;"><?php echo $_smarty_tpl->tpl_vars['goods_money']->value;?>

</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">今日vip收益</td>
  <td width="81%" align="center" style="color:red;"><?php echo $_smarty_tpl->tpl_vars['vip_money']->value;?>

</td>
</tr>

<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">会员统计</td>
  <td width="81%" align="center" style="color:red;"><?php echo $_smarty_tpl->tpl_vars['user_num']->value;?>

</td>
</tr>

<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['agencies']->value['id'];?>
" name="domain_id">
<tr align="center" bgcolor="#FAFAF1" height="30">

  <td colspan="2"><input type="submit" name="submit" value="提交" />&nbsp;&nbsp;<input type="reset"  name="reset" value="重写"></td>
</tr>
</table>

</form>
<?php }} ?>
