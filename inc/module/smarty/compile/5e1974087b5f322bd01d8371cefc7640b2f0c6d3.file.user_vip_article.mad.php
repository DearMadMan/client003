<?php /* Smarty version Smarty-3.1.16, created on 2014-05-01 12:13:04
         compiled from "E:\apache\www\study\view\default\user_vip_article.mad" */ ?>
<?php /*%%SmartyHeaderCode:932553394da7c8fd81-37890146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e1974087b5f322bd01d8371cefc7640b2f0c6d3' => 
    array (
      0 => 'E:\\apache\\www\\study\\view\\default\\user_vip_article.mad',
      1 => 1398917582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '932553394da7c8fd81-37890146',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53394da7d66379_49729679',
  'variables' => 
  array (
    'art_name' => 0,
    'type' => 0,
    'v' => 0,
    'rows' => 0,
    'pagetool' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53394da7d66379_49729679')) {function content_53394da7d66379_49729679($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\study\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?><div class="wid" id="main">

<?php if ($_smarty_tpl->tpl_vars['art_name']->value!='') {?>	<h3><span>vip专区</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" style=" font-weight:100"><u>返回主页</u></a></h3><?php }?>
    <div class="wid" >
        <?php if ($_smarty_tpl->tpl_vars['art_name']->value!='') {?>
        <ul class='uls'>
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
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['art_name']->value=='全部资源') {?>
    <?php } else { ?>
    <div class="cl"></div>

                    <div class='article'> <div class='tit'><p class='pri'><?php if ($_smarty_tpl->tpl_vars['art_name']->value) {?><?php echo $_smarty_tpl->tpl_vars['art_name']->value;?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['art_name']->value=='') {?>平台资讯&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" style=" font-weight:100"><u>返回主页</u></a><?php } else { ?>全部资源<?php }?><?php }?></p></div>
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

    <?php }?>
</div>













<div class="clear"></div>

<div class="wid" ><div class="pagetool">
    <?php echo $_smarty_tpl->tpl_vars['pagetool']->value;?>

</div></div>
<?php }} ?>
