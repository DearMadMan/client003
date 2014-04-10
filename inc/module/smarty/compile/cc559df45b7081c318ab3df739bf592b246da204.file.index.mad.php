<?php /* Smarty version Smarty-3.1.16, created on 2014-03-19 09:45:30
         compiled from "E:\apache\www\study\view\default\index.mad" */ ?>
<?php /*%%SmartyHeaderCode:68615328f6ba7438d6-00949405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc559df45b7081c318ab3df739bf592b246da204' => 
    array (
      0 => 'E:\\apache\\www\\study\\view\\default\\index.mad',
      1 => 1394693935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68615328f6ba7438d6-00949405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mad_configs' => 0,
    'vp' => 0,
    'spreader' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5328f6ba7e1cb7_69071958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5328f6ba7e1cb7_69071958')) {function content_5328f6ba7e1cb7_69071958($_smarty_tpl) {?><!doctype html>
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
		<embed src="http://cloud.video.taobao.com/play/u/1/e/1/t/1/p/1/11172253.swf" quality="high" width="100%" height="100%" align="middle" allowScriptAccess="never" allowFullScreen="true" type="application/x-shockwave-flash"></embed>


		</div>
		<div class="youku-shadow"></div>
	</div>
	<div class="register wrap">
		<form id="form" action="user.php?act=register" target="_blank" method='POST'>
		<input type="text" id='user' name='user_name' class='user_0' value="您的QQ号码">+<input class='user_0' id='pass' type="text" name="user_password" value="在本站登录的安全密码"> <input type="button" value='提交' class="submit">
		<input type="hidden" name='spreader' value='<?php echo $_smarty_tpl->tpl_vars['spreader']->value;?>
'>
		<p>请保管好您的QQ账户和安全密码，这是你学习的唯一凭证。</p>
		</form>
	</div>
	<div class="footer">
		<div class="surprise">
			<p>神秘礼物限时领取,将通过邮件发送到您邮箱,确保注册成功!</p>
			<a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/time.jpg" alt=""></a>
		</div>
	</div>
		<div style="width:980px;overflow:hidden;margin:0 auto;">
		<div style="text-align:center;padding-top:30px;">
			<p>
			<span style="font-family:Microsoft YaHei;">Copyright © 2014 10nai.com 版权所有 久恒官方网站</span><br />
	<span style="font-family:Microsoft YaHei;"> 工作时间: 早9:00-晚22:00 地址: 江苏省无锡市禾嘉大厦19-21楼 </span><br />
	<script language="javascript" type="text/javascript" src="http://js.users.51.la/16755903.js"></script>
<noscript><a href="http://www.51.la/?16755903" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/16755903.asp" style="border:none" /></a></noscript><span style="font-family:Microsoft YaHei;">法律顾问: 江苏（无锡）兆锦律师事务所 </span><span style="font-family:"Microsoft YaHei";">违者必究</span><br/>
							</p>
		</div>
		</div>
</body>
</html><?php }} ?>
