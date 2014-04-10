<?php /* Smarty version Smarty-3.1.16, created on 2014-01-19 18:03:02
         compiled from "E:\apache\www\my\view\default\user_vip_article_id.mad" */ ?>
<?php /*%%SmartyHeaderCode:1986352dba2d6aad6f5-47933242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b1d36d57d8e7f1261a6c6001e54b093383a0381' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\user_vip_article_id.mad',
      1 => 1390125579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1986352dba2d6aad6f5-47933242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dba2d6b04ec4_09303800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dba2d6b04ec4_09303800')) {function content_52dba2d6b04ec4_09303800($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\my\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?><div class="wid" id="main">
    <h3><span>VIP专区</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="user.php?act=vip_article" style=" font-weight:100"><u>返回专区</u></a></h3>
	<p class='pcenter'><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</p>
    <p class='ppright'><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y-%m-%d %H:%M:%S");?>
</p>
    <div class="mar" id="content">
      <?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>

    </div>
</div><?php }} ?>
