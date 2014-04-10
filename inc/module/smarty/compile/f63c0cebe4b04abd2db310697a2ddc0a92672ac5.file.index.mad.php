<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 20:13:32
         compiled from "E:\apache\www\my\view\default\index.mad" */ ?>
<?php /*%%SmartyHeaderCode:1326052b3fcfcdde949-91742039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f63c0cebe4b04abd2db310697a2ddc0a92672ac5' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\index.mad',
      1 => 1390306404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1326052b3fcfcdde949-91742039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52b3fcfce32c79_45554256',
  'variables' => 
  array (
    'mad_configs' => 0,
    'vp' => 0,
    'spreader' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b3fcfce32c79_45554256')) {function content_52b3fcfce32c79_45554256($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['keywords'];?>
</title>
     <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['keywords'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['description'];?>
" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/index.css">
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/index.js"></script>
     <script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/register.js'></script>
</head>
<body>
	<div class="index-header">
		<div class="space"></div>
		<div class="wrap">
			<div class="top">
				<div class="save">
					<a href="todisktop.php"></a>
				</div>
			</div>
			<div class="body">
				<div class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['domain'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/logo.jpg" alt="logo"></a></div>
				<div class="nav">
					<a href="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['domain'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/i1.gif" alt="logo"></a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['domain'];?>
"><img id='help' src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/i3.gif" alt="logo"></a>
					<a href="user.php"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/i4.gif" alt="logo"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="fill"></div>
	<div class="content">
		<div class="youku">
		<EMBED style="TEXT-ALIGN: center; PADDING-BOTTOM: 0px; WIDOWS: 2; TEXT-TRANSFORM: none; TEXT-INDENT: 0px; MARGIN: 0px; PADDING-LEFT: 0px; LETTER-SPACING: normal; PADDING-RIGHT: 0px; FONT: 14px/23px 'microsoft yahei'; WHITE-SPACE: normal; ORPHANS: 2; COLOR: rgb(0,0,0); WORD-SPACING: 0px; PADDING-TOP: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px" id=movie_player height=100% name=movie_player type=application/x-shockwave-flash pluginspage=http://www.macromedia.com/go/getflashplayer width=100% src=http://static.youku.com/v1.0.0141/v/swf/qplayer.swf?VideoIDS=XNjU2MjIzOTQw&amp;isAutoPlay=true flashvars="winType=adshow" allowfullscreen="falash" quality="high" bgcolor="#000000" wmode="transparent">


		</div>
		<div class="youku-shadow"></div>
	</div>
	<div class="register wrap">
		<form id="form" action="user.php?act=register" method='POST'>
		<input type="text" id='user' name='user_name' class='user_0' value="您的QQ号码">+<input class='user_0' id='pass' type="text" name="user_password" value="在本站登录的安全密码"> <input type="button" value='提交' class="submit">
		<input type="hidden" name='spreader' value='<?php echo $_smarty_tpl->tpl_vars['spreader']->value;?>
'>
		<p>请保管好您的邮箱账户和安全密码，这是你学习的唯一凭证。</p>
		</form>
	</div>
	<div class="footer">
		<div class="surprise">
			<p>神秘礼物限时领取,将通过邮件发送到您邮箱,确保注册成功!</p>
			<a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/time.jpg" alt=""></a>
		</div>
	</div>
</body>
</html><?php }} ?>
