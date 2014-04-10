<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 21:04:13
         compiled from "E:\apache\www\my\view\default\user_vip_article.mad" */ ?>
<?php /*%%SmartyHeaderCode:1753252db97d118fd15-55721604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55b90631fabba828fb49c43e08f2265482564abb' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\user_vip_article.mad',
      1 => 1390309450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1753252db97d118fd15-55721604',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52db97d11d62d4_79141591',
  'variables' => 
  array (
    'type' => 0,
    'v' => 0,
    'art_name' => 0,
    'rows' => 0,
    'pagetool' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52db97d11d62d4_79141591')) {function content_52db97d11d62d4_79141591($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\my\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?><div class="wid" id="main">

	<h3><span>vip专区</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" style=" font-weight:100"><u>返回主页</u></a></h3>
    <div class="wid" >
        <ul class='uls'>
            <li><a href="user.php">首页</a></li>
            <li><a href="user.php?act=article_type&id=0">平台资讯</a></li>
           <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <li><a href='user.php?act=article_type&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="cl"></div>

                    <div class='article'> <div class='tit'><p class='pri'><?php if ($_smarty_tpl->tpl_vars['art_name']->value) {?><?php echo $_smarty_tpl->tpl_vars['art_name']->value;?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['art_name']->value=='') {?>平台资讯<?php } else { ?>全部资源<?php }?><?php }?></p></div>
                    <div class='art'>
                    <ul>


 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                            <li><a href='user.php?act=vip_article_id&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
<span class='sri'><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y-%m-%d %H:%M:%S");?>
</span></a></li>
 <?php } ?>
                    </ul>
                   </div>
                   </div>


</div>













<div class="clear"></div>

<div class="wid" ><div class="pagetool">
    <?php echo $_smarty_tpl->tpl_vars['pagetool']->value;?>

</div></div>
<?php }} ?>
