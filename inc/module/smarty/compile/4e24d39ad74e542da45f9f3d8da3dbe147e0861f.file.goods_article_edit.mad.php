<?php /* Smarty version Smarty-3.1.16, created on 2014-01-22 16:58:54
         compiled from "D:\freehost\huangweitt\web\admin\template\goods_article_edit.mad" */ ?>
<?php /*%%SmartyHeaderCode:1078152df884e08ab10-71106315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e24d39ad74e542da45f9f3d8da3dbe147e0861f' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\admin\\template\\goods_article_edit.mad',
      1 => 1388922805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1078152df884e08ab10-71106315',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52df884e155ed0_87662300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df884e155ed0_87662300')) {function content_52df884e155ed0_87662300($_smarty_tpl) {?><script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/goods_article_edit.js'></script>

<table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#D1DDAA" align="center">
<tr>
 <td height="26" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/newlinebg3.gif">
  <table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td align="center">
        <input type='button' class="coolbg np" onClick="location='main.php?menu=goods&target=article';" value='文章列表' />

 </td>
 </tr>
</table>
</td>
</tr>
</table>


<form name="form2" method="post" action="goods.php?act=articleEdit">

<table width="98%px" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#FAFAF1" height="98%"><td align="center"  width="19%">文章标题：</td>
<td align="left" width="81%" ><input type='text' name='title' value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" style="width:60%;" /></td>
<tr  bgcolor="#FAFAF1" height="98%"><td align="center"   width="19%">文章分类：</td>
<td align="left" width="81%" ><input value="<?php echo $_smarty_tpl->tpl_vars['article']->value['type_id'];?>
" type='text' name='art_id' style="width:10%;" /></td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
  <td width="19%">产品详细介绍</td>
  <td width="81%" align="left"><textarea style="width:700px; height:400px" id="article_content" name="content"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</textarea>
    </td>
</tr>
<input type="hidden" name='id' value='<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
'>

<tr align="center" bgcolor="#FAFAF1" height="22">

	<td colspan="2"><input type="submit" name="submit" value="提交" />&nbsp;&nbsp;<input type="reset"  name="reset" value="重写"></td>
</tr>



</table>

</form><?php }} ?>
