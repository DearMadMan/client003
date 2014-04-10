<?php /* Smarty version Smarty-3.1.16, created on 2014-04-09 15:45:37
         compiled from "E:\apache\www\study\view\default\goods_body.mad" */ ?>
<?php /*%%SmartyHeaderCode:645153394e0f7ee5a0-57798341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68173435d12e5b5cd2ce5eb83697999e18842443' => 
    array (
      0 => 'E:\\apache\\www\\study\\view\\default\\goods_body.mad',
      1 => 1397011492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '645153394e0f7ee5a0-57798341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53394e0f879519_62831339',
  'variables' => 
  array (
    'vp' => 0,
    'user' => 0,
    'goods' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53394e0f879519_62831339')) {function content_53394e0f879519_62831339($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\apache\\www\\study\\inc\\module\\smarty\\plugins\\modifier.truncate.php';
?><div class="wids" style="">
    <div class="wids" id="nav">

    </div>

</div>
<div class="fill"></div>
<div class="wid" id="banner">
    <div id="user_left">
        <div id="user_top_1">
             <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/pho.png" />
            <h3>用户名：<?php echo $_smarty_tpl->tpl_vars['user']->value['nick_name'];?>
【<?php if ($_smarty_tpl->tpl_vars['user']->value['vip_level']==0) {?>普通用户<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['vip_level']==-1) {?>初级会员<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['vip_level']==1) {?>副站长<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['vip_level']==2) {?>VIP<?php } else { ?>违规用户<?php }?>】</h3>
            <p>邮箱:<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</p>
            <p>
                <a href="user.php?act=loginout">退出登陆</a>

            </p>
        </div>
        <div id="user_top_2">
            积分：
            <span><?php echo $_smarty_tpl->tpl_vars['user']->value['credits'];?>
分</span>
            RMB：
            <span>￥<?php echo $_smarty_tpl->tpl_vars['user']->value['money'];?>
元</span>
        </div>
        <div id="user_top_3">
             <ul>
                <li>
                    <a href="user.php?act=userinfo">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/no1.png" />
                    </a>
                </li>
                <li>
                    <a href="user.php?act=primary">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/no9.png" />
                    </a>
                </li>
                <li>
                    <a href="user.php?act=prepayment">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/no3.png" />
                    </a>
                </li>
                <li>
                    <a href="user.php?act=encashment">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/no4.png" />
                    </a>
                </li>
                <li>
                    <a href="user.php?act=vipmsg">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/no6.png" />
                    </a>
                    </li>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['vip_level']!=2) {?>
                    <li>
                    <a href="goods.php?act=getvip">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/no7.png" />
                    </a>
                    </li>

                    <?php } else { ?>
                     <li>
                     <a href="user.php?act=vip_article">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/no8.png" />
                    </a>
                     </li>

                    <?php }?>


            </ul>
        </div>
    </div>
     <div id="user_rights">
    <img style="float:right; margin-left:10px; width:229px; height:196px" src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_pic'];?>
" />
        <h3>产品名称：<span style="color:#ff0000"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
</span></h3>
        <p style="font-weight:bold">产品价格：<span style="color:#ff0000">￥<?php echo $_smarty_tpl->tpl_vars['goods']->value['need_money'];?>
元</span></p>
        <p style="font-weight:bold">积分兑换：<span style="color:#ff0000"><?php echo $_smarty_tpl->tpl_vars['goods']->value['need_credits'];?>
分</span></p>
        <p style="font-weight:bold">产品简介：<span style="font-weight:100"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['goods']->value['goods_dis'],80);?>
</span></p>
        <div id="zhifu">
        <form name="formss" method="post" action="orders.php?act=goods">
            <h3>现在订购:</h3>
            <p><input type="radio" name="pay_type" value="1" checked="checked" />余额支付&nbsp;&nbsp;&nbsp;&nbsp;
               <input type="radio" name="pay_type" value="0" />积分兑换&nbsp;&nbsp;&nbsp;
            <input type="hidden" name="num" value="1" style="width:40px;"  /> </p>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
" />
            <p><input type="image" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/dg.png" name="images" /></p>
            </form>
        </div>

    </div>
</div><?php }} ?>
