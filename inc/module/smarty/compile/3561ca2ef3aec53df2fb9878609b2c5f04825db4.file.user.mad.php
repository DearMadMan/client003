<?php /* Smarty version Smarty-3.1.16, created on 2014-03-30 14:33:08
         compiled from "E:\apache\www\study\view\default\user.mad" */ ?>
<?php /*%%SmartyHeaderCode:161645337baa40df719-87127983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3561ca2ef3aec53df2fb9878609b2c5f04825db4' => 
    array (
      0 => 'E:\\apache\\www\\study\\view\\default\\user.mad',
      1 => 1394693934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161645337baa40df719-87127983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mad_configs' => 0,
    'view_path' => 0,
    'act' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5337baa4209269_67466928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5337baa4209269_67466928')) {function content_5337baa4209269_67466928($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['keywords'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['description'];?>
" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['view_path']->value;?>
/css/style.css">
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['view_path']->value;?>
/js/jquery-1.9.0.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['view_path']->value;?>
/js/jquery.easing.1.3.js"></script>
</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ('header.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('user_body.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php if ($_smarty_tpl->tpl_vars['act']->value=='index') {?>
	<?php echo $_smarty_tpl->getSubTemplate ('user_index.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['act']->value=='userinfo') {?>
	<?php echo $_smarty_tpl->getSubTemplate ('user_info.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['act']->value=='prepayment') {?>
	<?php echo $_smarty_tpl->getSubTemplate ('user_prepayment.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['act']->value=='encashment') {?>
	<?php echo $_smarty_tpl->getSubTemplate ('user_encashment.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['act']->value=='vipmsg') {?>
	<?php echo $_smarty_tpl->getSubTemplate ('user_vipmsg.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['act']->value=='primary') {?>
	<?php echo $_smarty_tpl->getSubTemplate ('user_spreader.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['act']->value=='vip_article') {?>
	<?php echo $_smarty_tpl->getSubTemplate ('user_vip_article.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['act']->value=='vip_article_id') {?>
	<?php echo $_smarty_tpl->getSubTemplate ('user_vip_article_id.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
	<?php echo $_smarty_tpl->getSubTemplate ('footer.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html>
<?php }} ?>
