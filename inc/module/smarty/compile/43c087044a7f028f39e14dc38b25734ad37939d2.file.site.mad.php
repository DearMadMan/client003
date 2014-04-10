<?php /* Smarty version Smarty-3.1.16, created on 2014-03-30 10:07:28
         compiled from "E:\apache\www\study\admin\template\site.mad" */ ?>
<?php /*%%SmartyHeaderCode:86955328f6b2ca9de3-58417255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43c087044a7f028f39e14dc38b25734ad37939d2' => 
    array (
      0 => 'E:\\apache\\www\\study\\admin\\template\\site.mad',
      1 => 1396142594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86955328f6b2ca9de3-58417255',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5328f6b2d4bb09_15560814',
  'variables' => 
  array (
    'agencies' => 0,
    'vp' => 0,
    'mad_configs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5328f6b2d4bb09_15560814')) {function content_5328f6b2d4bb09_15560814($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['agencies']->value) {?>
<form name="forms" method="post" action="system.php?act=siteEdit">

<table width="98%px" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
	<td height="24" colspan="10" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/tbg.gif">全局设置</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">网站Title</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['title'];?>
" /> *</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">网站关键字</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="keywords" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['keywords'];?>
" /> *</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">网站描述</td>
  <td width="81%" align="left"><textarea  name="description" style="width:300px" rows="5"><?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['description'];?>
</textarea> *</td>

</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">网站底部</td>
  <td width="81%" align="left"><textarea name="copyright" style="width:300px" rows="5"><?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['copyright'];?>
</textarea> *</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">推广介绍文字</td>
  <td width="81%" align="left"><textarea name="spreader_string" style="width:300px" rows="8"><?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['spreader_string'];?>
</textarea> *</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">支付宝(类型)</td>
  <td width="81%" align="left"><input type="radio" name="pay_type" value="1" <?php if ($_smarty_tpl->tpl_vars['mad_configs']->value['pay_type']=="1") {?>checked<?php }?> />即时到账&nbsp;&nbsp;<input type="radio" name="pay_type" value="2" <?php if ($_smarty_tpl->tpl_vars['mad_configs']->value['pay_type']=="2") {?>checked<?php }?> />担保交易&nbsp;&nbsp;<input type="radio" name="pay_type" value="3" <?php if ($_smarty_tpl->tpl_vars['mad_configs']->value['pay_type']=="3") {?>checked<?php }?> />双向支付&nbsp;&nbsp;</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">站点顶级域名</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="domain" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['domain'];?>
" /> (如：http://www.lanyan88.com)</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">是否显示产品</td>
  <td width="81%" align="left"><select name="is_sales">
    <option value="1" <?php if ($_smarty_tpl->tpl_vars['mad_configs']->value['is_sales']) {?>selected<?php }?>>
    显示产品</option>
    <option value="0" <?php if (!$_smarty_tpl->tpl_vars['mad_configs']->value['is_sales']) {?>selected<?php }?> >不显示产品</option>
  </select> *</a></td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">支付宝(账号)</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="pay_name" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['pay_name'];?>
" /> *</td>
</tr>

<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">支付宝(key)</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="pay_key" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['pay_key'];?>
" /> *</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">支付宝(pid)</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="pay_id" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['pay_id'];?>
" /> *</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">客服电话</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="services_tel" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['services_tel'];?>
" /> *</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">客服QQ</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="services_qq" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['services_qq'];?>
" />
  *多个QQ用 , 号隔开</td>
</tr>

<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%"> 推广送积分</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="spreader_cridits" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['spreader_cridits'];?>
" /> （推广一个会员送多少积分）</a></td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">佣金比例</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="spreader_rate" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['spreader_rate'];?>
" /> （例0.3 就代表 30%）</a></td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">每页显示产品个数</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="goods_view_num" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['goods_view_num'];?>
" />
  * 为0将显示默认 0个</td>
</tr>
<input type="hidden" type="text" name="a_id" value="1" />
<tr align="center" bgcolor="#FAFAF1" height="30">

	<td colspan="2"><input type="submit" name="submit" value="提交" />&nbsp;&nbsp;<input type="reset"  name="reset" value="重写"></td>
</tr>
<?php } else { ?>

<form name="forms" method="post" action="system.php?act=siteEdit">

<table width="98%px" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
  <td height="24" colspan="10" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/tbg.gif">全局设置</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">网站Title</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['title'];?>
" /> *</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">网站关键字</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="keywords" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['keywords'];?>
" /> *</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">网站描述</td>
  <td width="81%" align="left"><textarea  name="description" style="width:300px" rows="5"><?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['description'];?>
</textarea> *</td>

</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">网站底部</td>
  <td width="81%" align="left"><textarea name="copyright" style="width:300px" rows="5"><?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['copyright'];?>
</textarea> *</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">推广介绍文字</td>
  <td width="81%" align="left"><textarea name="spreader_string" style="width:300px" rows="8"><?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['spreader_string'];?>
</textarea> *</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">支付宝(类型)</td>
  <td width="81%" align="left"><input type="radio" name="pay_type" value="1" <?php if ($_smarty_tpl->tpl_vars['mad_configs']->value['pay_type']=="1") {?>checked<?php }?> />即时到账&nbsp;&nbsp;<input type="radio" name="pay_type" value="2" <?php if ($_smarty_tpl->tpl_vars['mad_configs']->value['pay_type']=="2") {?>checked<?php }?> />担保交易&nbsp;&nbsp;<input type="radio" name="pay_type" value="3" <?php if ($_smarty_tpl->tpl_vars['mad_configs']->value['pay_type']=="3") {?>checked<?php }?> />双向支付&nbsp;&nbsp;</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">站点顶级域名</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="domain" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['domain'];?>
" /> (如：http://www.lanyan88.com)</td>
</tr>

<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">支付宝(账号)</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="pay_name" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['pay_name'];?>
" /> *</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">客服电话</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="services_tel" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['services_tel'];?>
" /> *</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">客服QQ</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="services_qq" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['services_qq'];?>
" />
  *多个QQ用 , 号隔开</td>
</tr>



<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">邮件订阅代码</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="goods_view_num" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['email_code'];?>
" />
 </td>
</tr>
<input type="hidden" type="text" name="a_id" value="1" />
<tr align="center" bgcolor="#FAFAF1" height="30">

  <td colspan="2"><input type="submit" name="submit" value="提交" />&nbsp;&nbsp;<input type="reset"  name="reset" value="重写"></td>
</tr>
<?php }?>


</table>

</form><?php }} ?>
