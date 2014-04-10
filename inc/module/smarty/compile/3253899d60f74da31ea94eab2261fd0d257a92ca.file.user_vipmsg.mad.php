<?php /* Smarty version Smarty-3.1.16, created on 2014-01-22 16:49:45
         compiled from "D:\freehost\huangweitt\web\view\default\user_vipmsg.mad" */ ?>
<?php /*%%SmartyHeaderCode:2905252df86291a0460-20847666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3253899d60f74da31ea94eab2261fd0d257a92ca' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\view\\default\\user_vipmsg.mad',
      1 => 1390119465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2905252df86291a0460-20847666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'v' => 0,
    'pagetool' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52df8629285df5_18204600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df8629285df5_18204600')) {function content_52df8629285df5_18204600($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\huangweitt\\web\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
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
