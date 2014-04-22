<?php /* Smarty version Smarty-3.1.16, created on 2014-04-22 11:11:54
         compiled from "E:\apache\www\study\admin\template\agencies_config.mad" */ ?>
<?php /*%%SmartyHeaderCode:231875355ddfa098c05-36422265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '908665a7aa087cbed6be0348c250798a1c2f9811' => 
    array (
      0 => 'E:\\apache\\www\\study\\admin\\template\\agencies_config.mad',
      1 => 1397439620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231875355ddfa098c05-36422265',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
    'mad_configs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5355ddfa227ce4_57662428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5355ddfa227ce4_57662428')) {function content_5355ddfa227ce4_57662428($_smarty_tpl) {?><script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/agencies_model.js'></script>
 <form id="up-form" style="text-align:left;margin:5px;"  action="test.php" method="POST" enctype="multipart/form-data" target='uploadIframe'>
   图片上传: <input id="files_hidden" type="file" name='pic'>

 </form>
<form name="forms" method="post" action="system.php?act=siteEdit">

<table width="98%px" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
  <td height="24" colspan="10" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/tbg.gif">站点设置</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">Logo</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="logo" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['logo'];?>
" /> <input type="button" value='上传'> </td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">首页主图</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="index_banner" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['index_banner'];?>
" /> <input type="button" value='上传'></td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">登录页面ad图</td>
  <td width="81%" align="left"><input style="width:300px" type="text" name="login_ad" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['login_ad'];?>
" /> <input type="button" value='上传'> </td>

</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">统计代码</td>
  <td width="81%" align="left"><textarea name="count_code" style="width:300px" rows="5"><?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['count_code'];?>
</textarea> </td>
</tr>

<input type="hidden" type="text" name="a_id" value="1" />
<tr align="center" bgcolor="#FAFAF1" height="30">

  <td colspan="2"><input type="submit" name="submit" value="提交" />&nbsp;&nbsp;<input type="reset"  name="reset" value="重写"></td>
</tr>



</table>

</form>

 <iframe name="uploadIframe" onload="iframeOnLoad();" id="uploadIframe"  style="display:none;">
</iframe><?php }} ?>
