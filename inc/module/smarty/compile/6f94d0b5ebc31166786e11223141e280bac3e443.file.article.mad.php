<?php /* Smarty version Smarty-3.1.16, created on 2014-04-28 20:25:58
         compiled from "E:\apache\www\study\view\default\article.mad" */ ?>
<?php /*%%SmartyHeaderCode:4634535dfea55fb992-59130891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f94d0b5ebc31166786e11223141e280bac3e443' => 
    array (
      0 => 'E:\\apache\\www\\study\\view\\default\\article.mad',
      1 => 1398676553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4634535dfea55fb992-59130891',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535dfea5683b18_15419640',
  'variables' => 
  array (
    'vp' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535dfea5683b18_15419640')) {function content_535dfea5683b18_15419640($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>久恒欢迎您</title>
<meta name="keywords" content="专注互联网一对一辅导 全自动模式实现您的时间自由" />
<meta name="description" content="久恒欢迎您" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/style2.css" />
</head>
<body class="bg">

<?php echo $_smarty_tpl->getSubTemplate ("article_header.mad", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="W main clear" style="margin-top:30px;">
    <div class="listbox clear">
        <div class="listhead">
            <h2><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h2>
        </div>
        <div class="listcon">
            <div class="view">
    <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

            </div>
        </div>

    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('article_footer.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html><?php }} ?>
