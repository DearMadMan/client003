<?php /* Smarty version Smarty-3.1.16, created on 2014-01-27 12:36:04
         compiled from "D:\freehost\huangweitt\web\admin\template\user_pics.mad" */ ?>
<?php /*%%SmartyHeaderCode:2954152df87fa7286f0-62346718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e8c04d958e09f73260bbe2e752ff64d6a291836' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\admin\\template\\user_pics.mad',
      1 => 1390797324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2954152df87fa7286f0-62346718',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52df87fa7c6e54_38224012',
  'variables' => 
  array (
    'vp' => 0,
    'pics' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df87fa7c6e54_38224012')) {function content_52df87fa7c6e54_38224012($_smarty_tpl) {?>
<!--  快速转换位置按钮  -->
<script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/picedit.js'></script>

<!--  内容列表   -->
 <form id="up-form" style="text-align:left;margin:5px;"  action="test.php" method="POST" enctype="multipart/form-data" target='uploadIframe'>
   图片上传: <input id="files_hidden" type="file" name='pic'>

 </form>
<form  method="POST" action="user.php?act=picedit">
<div class='goods-vip' >

	<p>幻灯一: <input type="text" name='pic1' value='<?php echo $_smarty_tpl->tpl_vars['pics']->value['pic1'];?>
' id='pic1'> <input type="button" value='上传'>&nbsp;&nbsp;链接地址: <input type="text" name='link1' value='<?php echo $_smarty_tpl->tpl_vars['pics']->value['link1'];?>
'></p>
	<p>幻灯二: <input type="text" name='pic2' id='pic2' value='<?php echo $_smarty_tpl->tpl_vars['pics']->value['pic2'];?>
' > <input type="button" value='上传'>&nbsp;&nbsp;链接地址: <input type="text" name='link2' value='<?php echo $_smarty_tpl->tpl_vars['pics']->value['link2'];?>
'></p>
	<p>幻灯三: <input type="text" name='pic3' id='pic3' value='<?php echo $_smarty_tpl->tpl_vars['pics']->value['pic3'];?>
'> <input type="button" value='上传'>&nbsp;&nbsp;链接地址: <input type="text" name='link3' value='<?php echo $_smarty_tpl->tpl_vars['pics']->value['link3'];?>
'></p>
	<p>幻灯四: <input type="text" name='pic4' id='pic4' value='<?php echo $_smarty_tpl->tpl_vars['pics']->value['pic4'];?>
'> <input type="button" value='上传'>&nbsp;&nbsp;链接地址: <input type="text" name='link4' value='<?php echo $_smarty_tpl->tpl_vars['pics']->value['link4'];?>
'></p>
	<input type="submit" value='保存'>
</div>
</form>
 <iframe name="uploadIframe" onload="iframeOnLoad();" id="uploadIframe"  style="display:none;">
</iframe>
<?php }} ?>
