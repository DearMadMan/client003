<?php /* Smarty version Smarty-3.1.16, created on 2014-04-14 09:32:05
         compiled from "E:\apache\www\study\admin.\template\header.mad" */ ?>
<?php /*%%SmartyHeaderCode:6748534b3a9593c3b9-26122846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f3d21ad321fee1beecc488c601e6ca2071c8892' => 
    array (
      0 => 'E:\\apache\\www\\study\\admin.\\template\\header.mad',
      1 => 1397013013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6748534b3a9593c3b9-26122846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
    'is_agencies' => 0,
    'admin' => 0,
    'mad_configs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534b3a959844e8_25473616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534b3a959844e8_25473616')) {function content_534b3a959844e8_25473616($_smarty_tpl) {?><table width="100%" border="0" cellpadding="0" cellspacing="0" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/topbg.gif">
  <tr>
    <td width='20%' height="60"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/logo.gif" /></td>
    <td width='80%' align="right" valign="bottom">
    	<table width="750" border="0" cellspacing="0" cellpadding="0">
      <tr>
      <td align="right" height="26" style="padding-right:10px;line-height:26px;">
        	您好：<span class="username"> <?php if (!$_smarty_tpl->tpl_vars['is_agencies']->value) {?><?php echo $_smarty_tpl->tpl_vars['admin']->value['user_name'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['admin']->value['domain'];?>
<?php }?></span>，<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['title'];?>

        	[<a href="/" target="_blank">网站主页</a>]
        	[<a href="admin.php?act=loginout" target="_top">注销退出</a>]&nbsp;
      </td>
      </tr>
      <tr>
        <td align="right" height="34" class="rmain">
		<dl id="tpa">
		<dd><div class='itemsel' id='item1' onMouseMove="mv(this,'move',1);" onMouseOut="mv(this,'o',1);"><a href="main.php" onclick="changeSel(1)">后台主页</a></div></dd>
        <dd>
		  <div class='item' id='item3' onMouseMove="mv(this,'m',3);" onMouseOut="mv(this,'o',3);"><a href="main.php?menu=system" onclick="changeSel(3)">全局设置</a></div></dd>

		<dd>
		  <div class='item' id='item2' onMouseMove="mv(this,'m',2);" onMouseOut="mv(this,'o',2);"><a href="main.php?menu=users" onclick="changeSel(2)" >会员管理</a></div></dd>
		<dd>
		  <div class='item' id='item8' onMouseMove="mv(this,'m',8);" onMouseOut="mv(this,'o',8);"><a href="main.php?menu=goods" onclick="changeSel(8)" >产品中心</a></div></dd>


		</dl>
		</td>
      </tr>
    </table></td>
  </tr>
</table>
<?php }} ?>
