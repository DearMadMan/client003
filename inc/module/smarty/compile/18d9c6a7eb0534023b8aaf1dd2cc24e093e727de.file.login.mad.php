<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 20:47:48
         compiled from "E:\apache\www\my\view\default\login.mad" */ ?>
<?php /*%%SmartyHeaderCode:22152c2604e739dd1-02608154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18d9c6a7eb0534023b8aaf1dd2cc24e093e727de' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\login.mad',
      1 => 1390308464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22152c2604e739dd1-02608154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c2604e77fcc5_84075017',
  'variables' => 
  array (
    'mad_configs' => 0,
    'vp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c2604e77fcc5_84075017')) {function content_52c2604e77fcc5_84075017($_smarty_tpl) {?><!doctype html><html lang="zh-CN"><head>    <meta charset="utf-8">    <title><?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['keywords'];?>
</title>     <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['keywords'];?>
" />    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['description'];?>
" />    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/index.css">      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/full.css">    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/index.js"></script>     <script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/register.js'></script></head><body>	<div class="index-header">		<div class="space"></div>		<div class="wrap">			<div class="top">				<div class="save">					<a href="todisktop.php"></a>				</div>			</div>			<div class="body">				<div class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['domain'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/logo.jpg" alt="logo"></a></div>				<div class="nav">					<a href="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['domain'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/i1.gif" alt="logo"></a>					<a href="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['domain'];?>
"><img id='help' src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/i3.gif" alt="logo"></a>					<a href="user.php"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/i4.gif" alt="logo"></a>				</div>			</div>		</div>	</div>	<div class="fill"></div>	<div class="content">		<div class="login-wrap">			<div class="imgs"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/ad.jpg"  alt=""></div><div class="login-box  no-longlogin " id="j_loginbox"><div class="hd"><ul>  <li class="current">  <h2>欢迎您！</h2></li></ul></div><div class="bd"><div class="taobao-box" data-spm="1000341"><!--login box begin--><div class="login-msg msg" id="j_message" style="DISPLAY: none"><p class="error"></p></div><!--登录的错误信息结束--><!--标准登录框--><div class="static" id="j_static"><form id='sign' action="user.php?act=login" method="POST"><div class="field ph-hide username-field"><label>登录名：</label><span class="dynamic-link">填写QQ号码</span><input name="user_name" tabindex="1" class="login-text J_UserName" type="text" maxlength="32"> </div><div class="field pwd-field"><label>登录密码：</label> <a class="forget-pw" href="#"></a><span id="j_standardpwd"><input name="user_password" tabindex="2" class="login-text" id="t&quot;pl_password_1&quot;" type="password" maxlength="20"></span></div><!--<div class="field field-checkcode" id=l_f_code><input name="form_checkcode" tabindex=3 class="login-text checkcode J_CheckCode" type="text" maxlength=4><img class="check-code-img" src="code.php"><input name=need_check_code type=hidden> <a class="change-code" href="index.php">看不清<br>换一张</a></div>安全插件checkbox--><ul class="entries"></ul><div class="submit"><input type="hidden" name="submitok" value="checkuser"><button tabindex="5" class="j_submit" id="j_submitstatic" type="submit">登　录</button></div></form><form action="reg.php"><div class="submit"><button tabindex="5" class="j_submit" id="j_submitstatic" type="submit">注　册</button></div></form><ul class="entries"></ul></div><!--动态密码登录 --><!--login box end--></div></div><div class="ft"></div></div>		</div>	</div></body></html><?php }} ?>
