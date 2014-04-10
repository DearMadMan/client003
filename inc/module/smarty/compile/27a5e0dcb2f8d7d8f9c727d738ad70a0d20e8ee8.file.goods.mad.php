<?php /* Smarty version Smarty-3.1.16, created on 2014-01-27 19:34:12
         compiled from "D:\freehost\huangweitt\web\view\default\goods.mad" */ ?>
<?php /*%%SmartyHeaderCode:1851952df858747eea2-77844654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27a5e0dcb2f8d7d8f9c727d738ad70a0d20e8ee8' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\view\\default\\goods.mad',
      1 => 1390822436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1851952df858747eea2-77844654',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52df8587565346_96623281',
  'variables' => 
  array (
    'mad_configs' => 0,
    'view_path' => 0,
    'goods' => 0,
    'goods_date' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df8587565346_96623281')) {function content_52df8587565346_96623281($_smarty_tpl) {?><!doctype html>
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['view_path']->value;?>
/js/jquery-1.9.0.js">
</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ('header.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('goods_body.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="clear"></div>
<div class="wid" id="main">
	<h3><span>产品详细介绍</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="user.php?act=index" style=" font-weight:100"><u>返回主页</u></a></h3>
    <div id="main_all" class="pcont">
		<div id="conts">
        <?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_content'];?>

        <p class='red'><?php echo $_smarty_tpl->tpl_vars['goods_date']->value;?>
</p>
        </div>
    </div>
</div>
<div class="clear"></div>

<div class="wid" id="bottom">
<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['copyright'];?>

</div>
</body>
</html>
<?php }} ?>
