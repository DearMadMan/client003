<?php /* Smarty version Smarty-3.1.16, created on 2014-04-16 10:18:40
         compiled from "E:\apache\www\study\admin.\template\main.mad" */ ?>
<?php /*%%SmartyHeaderCode:207534b3a957d2767-13268682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a71777ffb7729a4f8d89e95592cd66e220d739a' => 
    array (
      0 => 'E:\\apache\\www\\study\\admin.\\template\\main.mad',
      1 => 1397614615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207534b3a957d2767-13268682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534b3a95925493_72232532',
  'variables' => 
  array (
    'vp' => 0,
    'ckeditor_path' => 0,
    'menu' => 0,
    'target' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534b3a95925493_72232532')) {function content_534b3a95925493_72232532($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title>尊贵的管理您好！</title>
	<link rel="stylesheet" href="">
	<link href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/base.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/menu.css" type="text/css" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/admin.css" rel="stylesheet" type="text/css"></head>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ckeditor_path']->value;?>
/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/admin.js"></script>
<body>

	<div class="content">
		<?php echo $_smarty_tpl->getSubTemplate ('header.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="left"><?php echo $_smarty_tpl->getSubTemplate ('body-left.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
		<div class="right">
			<?php if ($_smarty_tpl->tpl_vars['menu']->value=='system') {?>
				<?php if ($_smarty_tpl->tpl_vars['target']->value=='admin') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('admin.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=="agencies") {?>
				<?php echo $_smarty_tpl->getSubTemplate ('agencies.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=="agencies_list") {?>
				<?php echo $_smarty_tpl->getSubTemplate ('agencies_list.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=="agencies_edit") {?>
				<?php echo $_smarty_tpl->getSubTemplate ('agencies_edit.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=="model") {?>
				<?php echo $_smarty_tpl->getSubTemplate ('agencies_config.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=="count") {?>
				<?php echo $_smarty_tpl->getSubTemplate ('agencies_count.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate ('site.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php }?>
			<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value=='users') {?>
				<?php if ($_smarty_tpl->tpl_vars['target']->value=='prepayment') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('user_prepayment.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='encashment') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('user_encashment.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='usermsg') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('user_msg.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='edit') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('user_edit.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='recove') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('user_recove.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='pics') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('user_pics.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=="agencies_encashment") {?>
				<?php echo $_smarty_tpl->getSubTemplate ('agencies_encashment_list.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate ('user_list.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php }?>
			<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value=='goods') {?>
				<?php if ($_smarty_tpl->tpl_vars['target']->value=='goods_edit') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('goods_edit.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='order') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('goods_order.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='encashment') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('agencies_encashment.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='vip') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('goods_vip.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='article') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('goods_article.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='article_edit') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('goods_article_edit.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='article_type') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('goods_article_type.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['target']->value=='article_type_edit') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('goods_article_type_edit.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate ('goods_list.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php }?>
			<?php } else { ?>
			<?php echo $_smarty_tpl->getSubTemplate ('body-right.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		    <?php }?>
		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ('footer.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
