<?php /* Smarty version Smarty-3.1.16, created on 2014-02-11 10:09:16
         compiled from "D:\freehost\huangweitt\web\view\default\user_spreader.mad" */ ?>
<?php /*%%SmartyHeaderCode:750952df88de0e5289-56111284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '360f99488490e4ceb9d9bc8e66dcc616199a7f08' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\view\\default\\user_spreader.mad',
      1 => 1392084556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '750952df88de0e5289-56111284',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52df88de1b3ad3_91038848',
  'variables' => 
  array (
    'vp' => 0,
    'spreader_num' => 0,
    'user' => 0,
    'domain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df88de1b3ad3_91038848')) {function content_52df88de1b3ad3_91038848($_smarty_tpl) {?><script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/ZeroClipboard.js'></script>
<div class="wid" id="main">
    <h3><span>个人资料修改</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="user.php?act=index" style=" font-weight:100"><u>返回主页</u></a></h3>
<div class="wid" id="main">
	<div class='spreader'>
        <h3>
            推广赚积份下载海量资源：
            <span style="color:#ff0000; font-weight:100">(已推荐<?php echo $_smarty_tpl->tpl_vars['spreader_num']->value;?>
人)</span>
            &nbsp;&nbsp;
            <a style="font-weight:100" href="spreader.php" target="_blank"> <u>查看我所推广的会员</u>
            </a>
        </h3>
        <p class="hiinput">
            <input type="text" id="copy2" data="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
" value="http://<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
.<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" />
            <input class='hi-btn' type="button" id='a-link2' value='获取代码' >
        </p>
        <p class="hip">
            1、将您的专属推广连接发布至QQ群、博客、论坛、社区、软文、SNS、邮件中，只要有人通过您的连接来到本站开通VIP或者购买产品，您都将获得
            <span style="color:#ff0000; font-size:14px">高额佣金</span>
            。
        </p>
        <p class="hip">2、关于如何详细推广请联系小马咨询！</p>
        <p class="hip">3、不用担心产品，不用顾虑售后，让您轻松实现从月入3000至月入20000的飞跃！</p>
        <p class="hip">4、推广方法都为初级技巧，学习更多实战方法可自助开通VIP，享受1对1辅导，并提供技术支持</p>

        <p></p>
    </div>
</div>
</div>
<script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/spreader2.js'></script><?php }} ?>
