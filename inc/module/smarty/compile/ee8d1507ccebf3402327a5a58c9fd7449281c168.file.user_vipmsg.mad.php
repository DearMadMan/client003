<?php /* Smarty version Smarty-3.1.16, created on 2014-01-19 16:17:46
         compiled from "E:\apache\www\my\view\default\user_vipmsg.mad" */ ?>
<?php /*%%SmartyHeaderCode:2088152c3c4d0bb33b0-77791380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee8d1507ccebf3402327a5a58c9fd7449281c168' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\user_vipmsg.mad',
      1 => 1390119465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2088152c3c4d0bb33b0-77791380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c3c4d0bb4475_06602962',
  'variables' => 
  array (
    'rows' => 0,
    'v' => 0,
    'pagetool' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c3c4d0bb4475_06602962')) {function content_52c3c4d0bb4475_06602962($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\my\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?><div class="wid" id="main">
	<h3><span>VIP留言</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="user.php" style=" font-weight:100"><u>返回主页</u></a></h3>
    <div id="main_all">



        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <div class="msg">
        <div class='username'><p><span class='spanleft'><?php echo $_smarty_tpl->tpl_vars['v']->value['nick_name'];?>
:</span><span class='spanright'><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y-%m-%d %H:%M:%S");?>
</span><span class='cl'>&nbsp;</span></p></div><div class='usermsg'><p><?php echo $_smarty_tpl->tpl_vars['v']->value['user_msg'];?>
</p></div><div class='adminmsg'><span class='admin'>管理员回复:</span><span class='admin'><?php echo $_smarty_tpl->tpl_vars['v']->value['recove'];?>
</span></div></div>
        <?php } ?>






    </div>
    <td height="36" colspan="10" align="right">
        <div class="pagetool"><?php echo $_smarty_tpl->tpl_vars['pagetool']->value;?>
</div>
    </td>
 <div class="writemsg">
        <form action="user.php?act=add_msg" method='POST'>
        <p>填写留言:</p>
        <p><textarea name='msg' class='msgtxt'></textarea></p>
        <p><input type="submit" class="submit" value='提交留言'/></p>
        </form>
    </div>

</div>
<?php }} ?>
