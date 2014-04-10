<?php /* Smarty version Smarty-3.1.16, created on 2014-01-22 16:57:55
         compiled from "D:\freehost\huangweitt\web\admin\template\user_recove.mad" */ ?>
<?php /*%%SmartyHeaderCode:2720852df8813897d94-59611673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '800d96c77d6165640fc083c1ab169a92b7d9c616' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\admin\\template\\user_recove.mad',
      1 => 1390122119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2720852df8813897d94-59611673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52df8813949810_41506229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df8813949810_41506229')) {function content_52df8813949810_41506229($_smarty_tpl) {?><div id="recovemain">
<div id="recove">
<p class="close" title='关闭'>X</p>
</div>

</div>
<!--  快速转换位置按钮  -->
<table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#D1DDAA" align="center">
<tr>
 <td height="26" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/newlinebg3.gif">
  <table width="98%" border="0" cellspacing="0" cellpadding="0">

</table>
</td>
</tr>
</table>

<!--  内容列表   -->
<form class="msg-form" style="text-align:left;" name="checkboxform" method="post" action="user.php?act=recove">
<p>
	用户留言:<textarea name='msg'><?php echo $_smarty_tpl->tpl_vars['msg']->value['user_msg'];?>
</textarea>
</p>
<p>管理回复:<textarea name='recove'><?php echo $_smarty_tpl->tpl_vars['msg']->value['recove'];?>
</textarea></p>
<input type="hidden" name='id' value="<?php echo $_smarty_tpl->tpl_vars['msg']->value['id'];?>
">
<input type="submit" value="保存">
</form><?php }} ?>
