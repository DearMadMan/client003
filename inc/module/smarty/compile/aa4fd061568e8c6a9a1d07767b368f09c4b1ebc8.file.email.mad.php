<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 19:48:22
         compiled from "E:\apache\www\my\view\default\email.mad" */ ?>
<?php /*%%SmartyHeaderCode:2688852d89f7f55fa59-31782079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa4fd061568e8c6a9a1d07767b368f09c4b1ebc8' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\email.mad',
      1 => 1390303277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2688852d89f7f55fa59-31782079',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52d89f7f5a4447_70067735',
  'variables' => 
  array (
    'vp' => 0,
    'mad_configs' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d89f7f5a4447_70067735')) {function content_52d89f7f5a4447_70067735($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>html:5文档</title>
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
