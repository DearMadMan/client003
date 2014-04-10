<?php /* Smarty version Smarty-3.1.16, created on 2014-03-31 19:14:23
         compiled from "E:\apache\www\study\view\default\goods.mad" */ ?>
<?php /*%%SmartyHeaderCode:2678653394e0f71afe2-35152495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc7ce7ba93b83d254ea0e86002d550ff0d784b4e' => 
    array (
      0 => 'E:\\apache\\www\\study\\view\\default\\goods.mad',
      1 => 1394693936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2678653394e0f71afe2-35152495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mad_configs' => 0,
    'view_path' => 0,
    'goods' => 0,
    'goods_date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53394e0f7db2f9_17003469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53394e0f7db2f9_17003469')) {function content_53394e0f7db2f9_17003469($_smarty_tpl) {?><!doctype html>
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
