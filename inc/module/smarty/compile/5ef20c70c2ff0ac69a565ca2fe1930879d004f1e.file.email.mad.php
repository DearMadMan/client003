<?php /* Smarty version Smarty-3.1.16, created on 2014-01-26 13:16:36
         compiled from "D:\freehost\huangweitt\web\view\default\email.mad" */ ?>
<?php /*%%SmartyHeaderCode:2895652df85557d0941-90954874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ef20c70c2ff0ac69a565ca2fe1930879d004f1e' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\view\\default\\email.mad',
      1 => 1390642288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2895652df85557d0941-90954874',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52df8555926c01_63315997',
  'variables' => 
  array (
    'vp' => 0,
    'mad_configs' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df8555926c01_63315997')) {function content_52df8555926c01_63315997($_smarty_tpl) {?><!doctype html>
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
