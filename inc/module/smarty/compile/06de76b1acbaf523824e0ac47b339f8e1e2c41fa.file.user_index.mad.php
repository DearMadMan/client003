<?php /* Smarty version Smarty-3.1.16, created on 2014-03-30 14:33:08
         compiled from "E:\apache\www\study\view\default\user_index.mad" */ ?>
<?php /*%%SmartyHeaderCode:154435337baa43c8af5-44374359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06de76b1acbaf523824e0ac47b339f8e1e2c41fa' => 
    array (
      0 => 'E:\\apache\\www\\study\\view\\default\\user_index.mad',
      1 => 1394693933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154435337baa43c8af5-44374359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods_top' => 0,
    'v' => 0,
    'vp' => 0,
    'rows' => 0,
    'pagetool' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5337baa44af315_46756769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5337baa44af315_46756769')) {function content_5337baa44af315_46756769($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\apache\\www\\study\\inc\\module\\smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\study\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?><div class="wid" id="main">
    <h3>
        <span>初级VIP</span>
        <span>
            <a class='red' href="user.php?act=article_type&id=0">| 平台资讯</a>
        </span>
        <span>
            <a class='red' href="user.php?act=vip_article_id&id=8" target="_blank">| 疑难解答</a>
        </span>
    </h3>
    <div id="main_all">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_top']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <ul>
            <li class="li_01">
                <a href="goods.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_pic'];?>
" /></a>
            </li>
            <li class="li_02">
                <p class="title">
                    [置顶] <?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>

                    <span>
                        所需：
                         <?php echo $_smarty_tpl->tpl_vars['v']->value['need_credits'];?>

                        积分&nbsp;&nbsp;或&nbsp;&nbsp;￥
                          <?php echo $_smarty_tpl->tpl_vars['v']->value['need_money'];?>
元</span>
                </p>
                <p class="cont">
                     <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['goods_dis'],80);?>
</p>
                <p class="times">
                    本产品发布于：
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y/%m/%d %H:%M:%S");?>
</p>
            </li>
            <li class="li_03">
                <p>
                    <a href="goods.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/more.png" />
                    </a>
                </p>
                <p>
                    <a href="goods.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/buy.png" />
                    </a>
                </p>
            </li>
        </ul>
        <?php } ?>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <ul>
            <li class="li_01">
                <a href="goods.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_pic'];?>
" /></a>
            </li>
            <li class="li_02">
                <p class="title">
                   <?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>

                    <span>
                        所需：
                        <?php echo $_smarty_tpl->tpl_vars['v']->value['need_credits'];?>

                        积分&nbsp;&nbsp;或&nbsp;&nbsp;￥
                         <?php echo $_smarty_tpl->tpl_vars['v']->value['need_money'];?>
元</span>
                </p>
                <p class="cont">
                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['goods_dis'],80);?>
</p>
                <p class="times">
                    本产品发布于：
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y/%m/%d %H:%M:%S");?>
</p>
            </li>
            <li class="li_03">
                <p>
                    <a href="goods.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/more.png" />
                    </a>
                </p>
                <p>
                    <a href="goods.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/buy.png" />
                    </a>
                </p>
            </li>
        </ul>
        <?php } ?>

        <p style="text-align:right;">
        <span class="pagetool"><?php echo $_smarty_tpl->tpl_vars['pagetool']->value;?>
</span>
        </p>
    </div>
</div><?php }} ?>
