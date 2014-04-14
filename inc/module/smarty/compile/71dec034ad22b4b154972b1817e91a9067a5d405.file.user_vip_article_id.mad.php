<?php /* Smarty version Smarty-3.1.16, created on 2014-04-14 13:44:50
         compiled from "E:\apache\www\study\view\default\user_vip_article_id.mad" */ ?>
<?php /*%%SmartyHeaderCode:3244534b75d22f3b49-20379622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71dec034ad22b4b154972b1817e91a9067a5d405' => 
    array (
      0 => 'E:\\apache\\www\\study\\view\\default\\user_vip_article_id.mad',
      1 => 1394693932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3244534b75d22f3b49-20379622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534b75d2598c92_24314581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534b75d2598c92_24314581')) {function content_534b75d2598c92_24314581($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\study\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?><div class="wid" id="main">
   <?php if ($_smarty_tpl->tpl_vars['v']->value['type_id']!=0) {?> <h3><span>VIP专区</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="user.php?act=vip_article" style=" font-weight:100"><u>返回专区</u></a></h3>
   <?php } else { ?><h3><span>平台咨询</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="user.php?act=article_type&id=0" style=" font-weight:100"><u>返回专区</u></a></h3>
   <?php }?>
	<p class='pcenter'><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</p>
    <p class='ppright'><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y-%m-%d %H:%M:%S");?>
</p>
    <div class="mar" id="content">
      <?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>

    </div>
</div><?php }} ?>
