<?php /* Smarty version Smarty-3.1.16, created on 2014-01-22 16:46:34
         compiled from "D:\freehost\huangweitt\web\view\default\header.mad" */ ?>
<?php /*%%SmartyHeaderCode:943552df856a86a811-61020112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2d73070bd6be4c1168f11de27736aa0db35af77' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\view\\default\\header.mad',
      1 => 1389938530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '943552df856a86a811-61020112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_path' => 0,
    'mad_configs' => 0,
    'user' => 0,
    'vp' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52df856aa13636_47835737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df856aa13636_47835737')) {function content_52df856aa13636_47835737($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['view_path']->value;?>
/css/header.css">
<div class="topbar">
	<div class="grid-990 topbar-warp">
		<p class="toplink">
			<a href="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['domain'];?>
" class='link'>首页</a>
		</p>

		<ul class='topmenu'>
			<li class='topmenu-item topmenu-item-first'>
				<?php if ($_smarty_tpl->tpl_vars['user']->value['user_name']) {?>
				<span class='red'>hi! <?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</span>
				<?php } else { ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['domain'];?>
/user.php?act=login">登录</a>
				<b class='split'>-</b>
				<a href="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['domain'];?>
/user.php?act=register">注册</a>
				<?php }?>
			</li>
			<li class='topmenu-item topmenu-item-dropdown' id='topmenu-item-dropdown'>
				<a href="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['domain'];?>
/user.php" >用户中心</a>
			</li>
			<li class='topmenu-item topmenu-item-last'>
				<a href="#" target="_blank">帮助中心</a>
			</li>
		</ul>
	</div>
</div>





<div id="divStay" style="position: absolute"></div>

<div id="divStayTopleft" style="position: absolute">
 	<div id='mykf' onmouseover="document.getElementById('myid').style.display='block';document.getElementById('mykf').style.display='none';FloatTop(120);"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/kf.png" /></div>
  <table cellspacing="0" cellpadding="0" width="109px" border="0" id="myid" style="display:none">
    <tr>
      <td class="qqup"><div class="qq_l">在线客服</div><div class="qq_r"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/close.jpg" style="cursor:pointer" onclick="document.getElementById('mykf').style.display='block';document.getElementById('myid').style.display='none';FloatTop(29);" /></div></td>
    </tr>
    <tr>
      <td valign="top" style="background:url(<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/qq_mid.jpg) left top repeat-y;"><table cellspacing="0" cellpadding="0" width="116px" align="center" border="0">
          <tr>
            <td height="20"></td>
          </tr>
          <tr>
            <td height="20" class="tit1">&nbsp;&nbsp;客服中心
			<hr size="1" style="margin-left:10px; border:#cccccc dotted 1px; margin-right:10px;" />
			</td>
          </tr>

          <tr>
            <td height="20" class="tit2"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/icon.jpg" />&nbsp;官方QQ客服</td>
          </tr>
<tr>
            <td height="20" class="tit2"></td>
          </tr>

<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mad_configs']->value['services_qq_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
          <tr>
            <td height="35" align="center" valign="top">
<!-- WPA Button Begin -->
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
:42" alt="点击这里给我发消息" title="点击这里给我发消息"></a>
<!-- WPA Button END --></td>


          </tr>
<?php } ?>
          <tr>
            <td></td>
          </tr>


          <tr>
            <td height="20" class="tit1">&nbsp;&nbsp;官方客服电话：
			<hr size="1" style="margin-left:10px; border:#cccccc dotted 1px; margin-right:10px;" />
			</td>
          </tr>
          <tr>
            <td height="20" class="tit2"><?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['services_tel'];?>
</td>
          </tr>

          <tr>
            <td></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/qq_down.png" /></td>
    </tr>
  </table>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/kf.js"></script>

</div><?php }} ?>
