<?php /* Smarty version Smarty-3.1.16, created on 2014-01-08 12:37:08
         compiled from "E:\apache\www\my\view\default\goods.mad" */ ?>
<?php /*%%SmartyHeaderCode:647252c38482c55ed7-85832118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f94526e99fe238b473da5f75857f862ed457225' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\goods.mad',
      1 => 1389155825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '647252c38482c55ed7-85832118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c38482cc7768_89022301',
  'variables' => 
  array (
    'mad_configs' => 0,
    'view_path' => 0,
    'goods' => 0,
    'goods_date' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c38482cc7768_89022301')) {function content_52c38482cc7768_89022301($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>html:5文档</title>
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

<div class="wids" id="bottom">
<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['copyright'];?>

</div>
</body>
</html>
<?php }} ?>
