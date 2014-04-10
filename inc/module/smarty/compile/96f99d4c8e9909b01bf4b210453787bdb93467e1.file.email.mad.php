<?php /* Smarty version Smarty-3.1.16, created on 2014-03-30 14:32:51
         compiled from "E:\apache\www\study\view\default\email.mad" */ ?>
<?php /*%%SmartyHeaderCode:70955337ba936208c4-35383492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96f99d4c8e9909b01bf4b210453787bdb93467e1' => 
    array (
      0 => 'E:\\apache\\www\\study\\view\\default\\email.mad',
      1 => 1394693936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70955337ba936208c4-35383492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
    'mad_configs' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5337ba937468f4_84036980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5337ba937468f4_84036980')) {function content_5337ba937468f4_84036980($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>课程已发送至您邮箱！</title>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/email.js"></script>
</head>
<body>
<form action="http://list.qq.com/cgi-bin/qf_compose_send" target="_self" method="post" id="ac" name="ac" onSubmit="javascript:return true">

<input type="hidden" name="t" value="qf_booked_feedback">

<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['email_code'];?>
">

<input id="to" name="to" type="hidden" class="mailtxt" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
">

<div style="display:none"><input type="submit" value="sss "></div>

</form>

</body>
</html><?php }} ?>
