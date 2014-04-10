<?php /* Smarty version Smarty-3.1.16, created on 2014-01-19 17:07:21
         compiled from "E:\apache\www\my\admin\template\user_recove.mad" */ ?>
<?php /*%%SmartyHeaderCode:797252db921b4a9ba1-35753799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebe68b0cd732e27aaab1f1d84f94b6cee1402269' => 
    array (
      0 => 'E:\\apache\\www\\my\\admin\\template\\user_recove.mad',
      1 => 1390122119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '797252db921b4a9ba1-35753799',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52db921b4eb342_95471102',
  'variables' => 
  array (
    'vp' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52db921b4eb342_95471102')) {function content_52db921b4eb342_95471102($_smarty_tpl) {?><div id="recovemain">
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
