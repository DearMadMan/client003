<?php /* Smarty version Smarty-3.1.16, created on 2014-04-29 09:34:18
         compiled from "E:\apache\www\study\view\default\article_header.mad" */ ?>
<?php /*%%SmartyHeaderCode:6886535e031dae7be4-68512968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e465a533a8f165c9ebe2aa073e2735ee8d1f9858' => 
    array (
      0 => 'E:\\apache\\www\\study\\view\\default\\article_header.mad',
      1 => 1398735208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6886535e031dae7be4-68512968',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535e031dafbb45_23100400',
  'variables' => 
  array (
    'vp' => 0,
    'free_types' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e031dafbb45_23100400')) {function content_535e031dafbb45_23100400($_smarty_tpl) {?>
<div class="W top">
    <div class="topl fl">
        免费注册账户，激活订阅邮件免费领取一套特别推出的课程  </div>
    <div class="topr fr">

    </div>
</div>
<div class="clear"></div>
<div class="W head">
    <div class="logo fl"><a href="/"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/logo.png" alt="久恒营销"/></a></div>
    <div class="logor fr">
        <a href="user.php"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/lbg.jpg"/></a>
            </div>
</div>
<div class="clear"></div>

<div class="W nav mt10">
    <ul>
        <li><a href="/">首页</a></li>
        <li><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/navli.png"/></li>
        <li><a href="user.php">会员中心</a></li>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['free_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/navli.png"/></li>
        <li><a href="article_type.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['article_free_type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</a></li>
        <?php } ?>
    </ul>
</div>

<div class="clear"></div><?php }} ?>
