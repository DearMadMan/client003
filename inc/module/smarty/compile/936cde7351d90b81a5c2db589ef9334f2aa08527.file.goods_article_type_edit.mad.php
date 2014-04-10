<?php /* Smarty version Smarty-3.1.16, created on 2014-01-26 14:43:37
         compiled from "D:\freehost\huangweitt\web\admin\template\goods_article_type_edit.mad" */ ?>
<?php /*%%SmartyHeaderCode:619752e4ae99c54a32-85733912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '936cde7351d90b81a5c2db589ef9334f2aa08527' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\admin\\template\\goods_article_type_edit.mad',
      1 => 1388924693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '619752e4ae99c54a32-85733912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
    'article_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e4ae99d06732_01517076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e4ae99d06732_01517076')) {function content_52e4ae99d06732_01517076($_smarty_tpl) {?>

<table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#D1DDAA" align="center">
<tr>
 <td height="26" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/newlinebg3.gif">
  <table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td align="center">
        <input type='button' class="coolbg np" onClick="location='main.php?menu=goods&target=article_type';" value='分类列表' />

 </td>
 </tr>
</table>
</td>
</tr>
</table>


<form name="form2" method="post" action="goods.php?act=articleTypeEdit">

<table width="98%px" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#FAFAF1" height="98%"><td align="center"  width="19%">分类id：</td>
<td align="left"  width="10%" ><?php echo $_smarty_tpl->tpl_vars['article_type']->value['id'];?>
</td>
<tr bgcolor="#FAFAF1" height="98%"><td align="center"   width="19%">分类名称：</td>
<td align="left"  width="81%" ><input name='type_name' value="<?php echo $_smarty_tpl->tpl_vars['article_type']->value['type_name'];?>
" type='text' name='art_id' style="width:30%;" /></td>
</tr>
<input type="hidden" name='id' value='<?php echo $_smarty_tpl->tpl_vars['article_type']->value['id'];?>
'>
<tr align="center" bgcolor="#FAFAF1" height="22">

	<td colspan="2"><input type="submit" name="submit" value="提交" />&nbsp;&nbsp;<input type="reset"  name="reset" value="重写"></td>
</tr>



</table>

</form><?php }} ?>
