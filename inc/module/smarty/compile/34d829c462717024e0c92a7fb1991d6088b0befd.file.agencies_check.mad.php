<?php /* Smarty version Smarty-3.1.16, created on 2014-04-22 17:44:59
         compiled from "E:\apache\www\study\view\default\agencies_check.mad" */ ?>
<?php /*%%SmartyHeaderCode:25804535611bd3f6c29-26755582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34d829c462717024e0c92a7fb1991d6088b0befd' => 
    array (
      0 => 'E:\\apache\\www\\study\\view\\default\\agencies_check.mad',
      1 => 1398159831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25804535611bd3f6c29-26755582',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535611bd43ed07_95766345',
  'variables' => 
  array (
    'vp' => 0,
    'view_path' => 0,
    'mad_configs' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535611bd43ed07_95766345')) {function content_535611bd43ed07_95766345($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>一键验真伪</title>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/jquery-1.9.0.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/agencies_check.js"></script>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/css/index.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['view_path']->value;?>
/css/header.css">
</head>
<body>
<div class="index-header no-border">
        <div class="wrap">

            <div class="body">
                <div class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['domain'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/logo.jpg" alt="logo"></a></div>

            </div>
        </div>
    </div>

<div class="nav-b wfull">
      <div class="nav-box w960">
        <a id="kuaidiQuery" href="javascript:;" class="fl nav-select">站点查询</a>
      </div>
    </div>

<div class="search-f">

    <div class="search-box">
      <div class="input-box">
      <input name="postid" type="text" class="inp-metro" id="postid" maxlength="26"   style="color: rgb(178, 178, 178);" value="请输入您要查询的 加盟商网址"><a id="query" href="javascript:;" onclick="CheckAgencies();" class="btn-query">查询</a>
      <div id="check-img" class="is-jiameng"></div>
      </div>
      <p>例如，您可以输入: <a style="color:#448ef3;" href="http://www.99nai.com">www.99nai.com</a> </p>
      <p> <a href="http://www.99nai.com" id="a-domain" ><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/123.gif" alt=""></a></p>
    </div>


</div>




<div id="divStay" style="position: absolute"></div>

<div id="divStayTopleft" style="position: absolute">
    <div id='mykf' onmouseover="document.getElementById('myid').style.display='block';document.getElementById('mykf').style.display='none';FloatTop(120);"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/kf.png" /></div>
  <table cellspacing="0" cellpadding="0" width="109px" border="0" id="myid" style="display:none">
    <tr>
      <td class="qqup"><div class="qq_l">在线客服</div><div class="qq_r"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/close.jpg" style="cursor:pointer" onclick="document.getElementById('mykf').style.display='block';document.getElementById('myid').style.display='none';FloatTop(29);" /></div></td>
    </tr>
    <tr>
      <td valign="top" style="background:url(<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/qq_mid.jpg) left top repeat-y;"><table cellspacing="0" cellpadding="0" width="116px" align="center" border="0">
          <tr>
            <td height="20"></td>
          </tr>
          <tr>
            <td height="20" class="tit1">&nbsp;&nbsp;客服中心
            <hr size="1" style="margin-left:10px; border:#cccccc dotted 1px; margin-right:10px;" />
            </td>
          </tr>

          <tr>
            <td height="20" class="tit2"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/icon.jpg" />&nbsp;官方QQ客服</td>
          </tr>
<tr>
            <td height="20" class="tit2"></td>
          </tr>

<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mad_configs']->value['services_qq_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
          <tr>
            <td height="35" align="center" valign="top">
<!-- WPA Button Begin -->
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
:42" alt="点击这里给我发消息" title="点击这里给我发消息"></a>
<!-- WPA Button END --></td>


          </tr>
<?php } ?>
          <tr>
            <td></td>
          </tr>


          <tr>
            <td height="20" class="tit1">&nbsp;&nbsp;官方客服电话：
            <hr size="1" style="margin-left:10px; border:#cccccc dotted 1px; margin-right:10px;" />
            </td>
          </tr>
          <tr>
            <td height="20" class="tit2"><?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['services_tel'];?>
</td>
          </tr>

          <tr>
            <td></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/qq_down.png" /></td>
    </tr>
  </table>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/kf.js"></script>

</div>





<div class="clear"></div>
<div class="wids check-f">
 <?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['copyright'];?>

 <?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['count_code'];?>

</div>

</body>
</html><?php }} ?>
