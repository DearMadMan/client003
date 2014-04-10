<?php /* Smarty version Smarty-3.1.16, created on 2014-02-16 10:07:37
         compiled from "D:\freehost\huangweitt\web\view\default\user_body.mad" */ ?>
<?php /*%%SmartyHeaderCode:703252df856aa1ed82-53886463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5885c11aa47a9b630613ea3401a9a93d08619fcc' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\view\\default\\user_body.mad',
      1 => 1392516455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '703252df856aa1ed82-53886463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52df856abaf241_72429814',
  'variables' => 
  array (
    'vp' => 0,
    'user' => 0,
    'pics' => 0,
    'spreader_num' => 0,
    'domain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df856abaf241_72429814')) {function content_52df856abaf241_72429814($_smarty_tpl) {?>     <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/pic.js"></script>
 <script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/ZeroClipboard.js'></script>
 <script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/spreader.js'></script>
<div class="wids" style="">
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
【<?php if ($_smarty_tpl->tpl_vars['user']->value['vip_level']==0) {?>普通用户<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['vip_level']==1) {?>副站长<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['vip_level']==2) {?>VIP<?php } else { ?>违规用户<?php }?>】</h3>
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
    <div id="user_right">
        <div class="pic-wrap">
            <ul class="pic-ul">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['pics']->value['link1'];?>
" target='_blank'><img src="<?php echo $_smarty_tpl->tpl_vars['pics']->value['pic1'];?>
" alt=""></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['pics']->value['link2'];?>
" target='_blank'><img src="<?php echo $_smarty_tpl->tpl_vars['pics']->value['pic2'];?>
" alt=""></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['pics']->value['link3'];?>
" target='_blank'><img src="<?php echo $_smarty_tpl->tpl_vars['pics']->value['pic3'];?>
" alt=""></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['pics']->value['link4'];?>
" target='_blank'><img src="<?php echo $_smarty_tpl->tpl_vars['pics']->value['pic4'];?>
" alt=""></a></li>
            </ul>
        </div>
        <div class='spreader ap'>
        <h3>
            推广赚积份下载海量资源：
            <span style="color:#ff0000; font-weight:100">(已推荐<?php echo $_smarty_tpl->tpl_vars['spreader_num']->value;?>
人)</span>
            &nbsp;&nbsp;
             <a style="font-weight:100" href="spreader.php" target="_blank"> <u>查看我所推广的会员</u>
            </a>
			<a style="color: #FF0000; font-weight:10" href="user.php?act=vip_article_id&id=9" target="_blank"> 【<u>如何推广</u>】
            </a>
        </h3>
        <div class="hiinput">
            <div class='inputleft'> <input type="text" id="copy" data="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
" value="http://<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
.<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" /></div>
            <div class='inputright'> <input class='hi-btn' type="button" id='a-link' value='获取代码' ></div>

        </div>
    </div>
    </div>
</div><?php }} ?>
