<?php /* Smarty version Smarty-3.1.16, created on 2014-01-25 13:24:52
         compiled from "D:\freehost\huangweitt\web\view\default\user_vip_article_id.mad" */ ?>
<?php /*%%SmartyHeaderCode:2293552dfe5c83478b6-62915085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4aed8d4dee860774e82fb8a5e0724ce17c787ba' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\view\\default\\user_vip_article_id.mad',
      1 => 1390621182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2293552dfe5c83478b6-62915085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dfe5c83d1f03_22139883',
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dfe5c83d1f03_22139883')) {function content_52dfe5c83d1f03_22139883($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\huangweitt\\web\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
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
