<?php /* Smarty version Smarty-3.1.16, created on 2014-04-09 14:42:16
         compiled from "E:\apache\www\study\admin\template\body-right.mad" */ ?>
<?php /*%%SmartyHeaderCode:120595328f1fd7041c1-18535382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff4f3ba05d420429c8d7629c22590d2bdc713546' => 
    array (
      0 => 'E:\\apache\\www\\study\\admin\\template\\body-right.mad',
      1 => 1397025735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120595328f1fd7041c1-18535382',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5328f1fd71e514_59852955',
  'variables' => 
  array (
    'vp' => 0,
    'mad_configs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5328f1fd71e514_59852955')) {function content_5328f1fd71e514_59852955($_smarty_tpl) {?><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div style='float:left'> <img height="14" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/book1.gif" width="20" />&nbsp;网站公告 </div>
      <div style='float:right;padding-right:8px;'>
        <!--  //保留接口  -->

      </div></td>
  </tr>
  <tr>
    <td height="1" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/sp_bg.gif" style='padding:0px'></td>
  </tr>
</table>
<table width="98%" align="center" border="0" cellpadding="3" cellspacing="1" bgcolor="#CBD8AC" style="margin-bottom:8px;margin-top:8px;">
  <tr>
    <td background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/wbg.gif" bgcolor="#EEF4EA" class='title'><span>消息</span></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td style="color:red;"><?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['notice'];?>
</td>
  </tr>
</table>

<table width="98%" align="center" border="0" cellpadding="4" cellspacing="1" bgcolor="#CBD8AC" style="margin-bottom:8px">
  <tr bgcolor="#EEF4EA">
    <td colspan="2" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/wbg.gif" class='title'><span>系统基本信息</span></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="25%" bgcolor="#FFFFFF">lever</td>
    <td width="75%" bgcolor="#FFFFFF">平台拥有者</td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td>系统版本：</td>
    <td>M3.0</td>
  </tr>
</table>



<table width="98%" align="center" border="0" cellpadding="4" cellspacing="1" bgcolor="#CBD8AC">
  <tr bgcolor="#EEF4EA">
    <td colspan="2" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/wbg.gif" class='title'><span>使用帮助</span></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="32">官方交流网站：</td>
    <td><a href="http://www.lanyan.cc"target="_blank"><u>url</u></a></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="25%" height="32">官方企业QQ客服：</td>
    <td width="75%">77812886</td>
  </tr>
</table><?php }} ?>
