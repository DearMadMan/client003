<?php /* Smarty version Smarty-3.1.16, created on 2014-04-28 20:34:59
         compiled from "E:\apache\www\study\admin\template\goods_article_free_edit.mad" */ ?>
<?php /*%%SmartyHeaderCode:32626535e18c7ba06b3-83680153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6cabc51822b401887c818ed225a7cebb5f792ea' => 
    array (
      0 => 'E:\\apache\\www\\study\\admin\\template\\goods_article_free_edit.mad',
      1 => 1398688497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32626535e18c7ba06b3-83680153',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535e18c7bf33e8_61054620',
  'variables' => 
  array (
    'vp' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e18c7bf33e8_61054620')) {function content_535e18c7bf33e8_61054620($_smarty_tpl) {?><script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/goods_article_edit.js'></script>

<table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#D1DDAA" align="center">
<tr>
 <td height="26" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/newlinebg3.gif">
  <table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td align="center">
        <input type='button' class="coolbg np" onClick="location='main.php?menu=goods&target=article_free';" value='营销资讯' />

 </td>
 </tr>
</table>
</td>
</tr>
</table>


<form name="form2" method="post" action="goods.php?act=articleFreeEdit">

<table width="98%px" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#FAFAF1" height="98%"><td align="center"  width="19%">标题：</td>
<td align="left" width="81%" ><input type='text' name='title' value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" style="width:60%;" /></td>
<tr  bgcolor="#FAFAF1" height="98%"><td align="center"   width="19%">分类：</td>
<td align="left" width="81%" ><input value="<?php echo $_smarty_tpl->tpl_vars['article']->value['type_id'];?>
" type='text' name='art_id' style="width:10%;" /></td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%"内容</td>
  <td width="81%" align="left"><textarea style="width:700px; height:400px" id="article_content" name="content"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</textarea>
    </td>
</tr>
<input type="hidden" name='id' value='<?php echo $_smarty_tpl->tpl_vars['article']->value['type_id'];?>
'>

<tr align="center" bgcolor="#FAFAF1" height="22">

    <td colspan="2"><input type="submit" name="submit" value="提交" />&nbsp;&nbsp;<input type="reset"  name="reset" value="重写"></td>
</tr>



</table>

</form><?php }} ?>
