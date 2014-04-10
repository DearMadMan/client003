<?php /* Smarty version Smarty-3.1.16, created on 2014-03-07 00:23:55
         compiled from "D:\freehost\huangweitt\web\view\default\user_index.mad" */ ?>
<?php /*%%SmartyHeaderCode:2926552df856abbb012-43628403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3b75a34dd5c0ee2ee66fd9c6a8e04b41e05e3f8' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\view\\default\\user_index.mad',
      1 => 1394123013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2926552df856abbb012-43628403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52df856ad7cea1_60732666',
  'variables' => 
  array (
    'goods_top' => 0,
    'v' => 0,
    'vp' => 0,
    'rows' => 0,
    'pagetool' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df856ad7cea1_60732666')) {function content_52df856ad7cea1_60732666($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\freehost\\huangweitt\\web\\inc\\module\\smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\huangweitt\\web\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
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
