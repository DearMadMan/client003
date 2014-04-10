<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 19:48:01
         compiled from "E:\apache\www\my\view\default\register.mad" */ ?>
<?php /*%%SmartyHeaderCode:3243352c27feac9b9b2-88762708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fb62fdff2274993b61c05964739f135e7c94063' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\register.mad',
      1 => 1390228648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3243352c27feac9b9b2-88762708',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c27feace0688_74946368',
  'variables' => 
  array (
    'mad_configs' => 0,
    'vp' => 0,
    'spreader' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c27feace0688_74946368')) {function content_52c27feace0688_74946368($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['keywords'];?>
</title>
     <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['keywords'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['description'];?>
" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/register.css">
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
    <script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/register.js'></script>
</head>
<body>
	<div class="wrap">
	<div class="content">
		<div class="pic"></div>
		<form id='form' action="user.php?act=register" method="POST">
		<div class="login">
			<p class='user'><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/login-user.png" alt="name"><input  type="text" name='user_name'></p>
			<p class='user'><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/login-password.png" alt="password"><input  type="password" name='user_password'></p>
			<p class='user'><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/login-password.png" alt="password"><input  type="password" name='user_password_verify'></p>
			<?php if (isset($_smarty_tpl->tpl_vars['spreader']->value)) {?>
			<input type="hidden" name='spreader' value="<?php echo $_smarty_tpl->tpl_vars['spreader']->value;?>
">
			<?php }?>
			<div class="submit">Sign Up</div>

		</div>
		</form>
	</div>
</div>
</body>
</html><?php }} ?>
