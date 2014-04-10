<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:42:35
         compiled from "E:\apache\www\my\view\default\user_spreader.mad" */ ?>
<?php /*%%SmartyHeaderCode:2269152db86aa334821-97338575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '778b72c7270087f0eff2905ed8393059f6549841' => 
    array (
      0 => 'E:\\apache\\www\\my\\view\\default\\user_spreader.mad',
      1 => 1390232535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2269152db86aa334821-97338575',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52db86aa380cf1_84614600',
  'variables' => 
  array (
    'vp' => 0,
    'spreader_num' => 0,
    'user' => 0,
    'domain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52db86aa380cf1_84614600')) {function content_52db86aa380cf1_84614600($_smarty_tpl) {?><script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/ZeroClipboard.js'></script>

<div class="wid" id="main">
	<div class='spreader'>
        <h3>
            推广赚积份下载海量资源：
            <span style="color:#ff0000; font-weight:100">(已推荐<?php echo $_smarty_tpl->tpl_vars['spreader_num']->value;?>
人)</span>
            &nbsp;&nbsp;
            <a style="font-weight:100" href="javascript:void(0);" onclick="edits('myuser.php')"> <u>查看我所推广的会员</u>
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
            1、将您的专属推广连接发布至任何QQ群、博客、论坛、社区、软文、SNS、邮件中，只要有人通过您的连接来到本站您都将获得
            <span style="color:#ff0000; font-size:14px">1积分/人</span>
            。
        </p>
        <p class="hip">2、您所推广的人数满10人，您将免费升级为正式推广者，开始自动赚钱！</p>
        <p class="hip">3、有了积分您可以兑换本站相关资源，让您实现从月入1000至月入50000的飞跃！</p>
        <p class="hip">4、398元成为VIP即可共享网站所有资源，，598元即可拥有和本站一样的网站，并提供技术支持</p>

        <p></p>
    </div>
</div>
<script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/spreader2.js'></script><?php }} ?>
