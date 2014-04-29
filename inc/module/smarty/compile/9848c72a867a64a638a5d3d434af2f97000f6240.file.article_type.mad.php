<?php /* Smarty version Smarty-3.1.16, created on 2014-04-28 20:43:28
         compiled from "E:\apache\www\study\view\default\article_type.mad" */ ?>
<?php /*%%SmartyHeaderCode:16542535e4ba2458323-69615137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9848c72a867a64a638a5d3d434af2f97000f6240' => 
    array (
      0 => 'E:\\apache\\www\\study\\view\\default\\article_type.mad',
      1 => 1398688935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16542535e4ba2458323-69615137',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535e4ba24c5a04_18879343',
  'variables' => 
  array (
    'vp' => 0,
    'type' => 0,
    'articles' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e4ba24c5a04_18879343')) {function content_535e4ba24c5a04_18879343($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\study\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
            <h2><?php echo $_smarty_tpl->tpl_vars['type']->value['type_name'];?>
</h2>
        </div>
        <div class="listcon">
            <ul class="arclist">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <li>[ <a href="article_type.php?id=<?php echo $_smarty_tpl->tpl_vars['type']->value['article_free_type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['type_name'];?>
</a> ]
                <a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['article_free_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>

                </a>
                <span class="pubdate"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y-%m-%d");?>
</span>
                </li>
            <?php } ?>
            </ul>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('article_footer.mad', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html><?php }} ?>
