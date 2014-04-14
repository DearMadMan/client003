<?php /* Smarty version Smarty-3.1.16, created on 2014-04-14 09:32:10
         compiled from "E:\apache\www\study\admin.\template\agencies_list.mad" */ ?>
<?php /*%%SmartyHeaderCode:16097534b3a9ad901f5-52056199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3d49064e41145e7bf694a50605753078ddd199f' => 
    array (
      0 => 'E:\\apache\\www\\study\\admin.\\template\\agencies_list.mad',
      1 => 1395621893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16097534b3a9ad901f5-52056199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
    'rows' => 0,
    'v' => 0,
    'pagetool' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534b3a9ae74410_75872437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534b3a9ae74410_75872437')) {function content_534b3a9ae74410_75872437($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\study\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?>
<!--  快速转换位置按钮  -->
<table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#D1DDAA" align="center">
<tr>
 <td height="26" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/newlinebg3.gif">
  <table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td align="center">
    <input type='button' class="coolbg np" onClick="location='main.php?menu=system&target=agencies_list';" value='域名列表' />
    <input type='button' class="coolbg np" onClick="location='main.php?menu=system&target=agencies';" value='域名添加' />
 </td>
 </tr>
</table>
</td>
</tr>
</table>

<!--  内容列表   -->
<form name="checkboxform" method="post" action="?type=del">

<table width="98%" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
    <td height="24" colspan="10" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/tbg.gif">&nbsp;域名列表&nbsp;</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
    <td width="5%">ID</td>
    <td width="4%">选择</td>
    <td width="22%">域名</td>
    <td width="22%">添加时间</td>
    <td width="22%">开始时间</td>
    <td width="11%">结束时间</td>
    <td width="14%">操作</td>
</tr>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
    <td><input name="checkboxid[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="np"></td>
    <td><u><?php echo $_smarty_tpl->tpl_vars['v']->value['domain'];?>
</u></td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y/%m/%d");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['start_time'],"%Y/%m/%d");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['end_time'],"%Y/%m/%d");?>
</td>
    <td><a href="main.php?menu=system&target=agencies_edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a>
   </td>
</tr>
<?php } ?>
<tr bgcolor="#FAFAF1">
<td height="28" colspan="10">
    &nbsp;
    <a href="javascript:SelectAll()" class="coolbg">全选</a>
    <a href="javascript:CancelAll()" class="coolbg">取消</a>

    <a href="javascript:Delete('ajax_user.php?act=DeleteAgency');" class="coolbg">&nbsp;删除&nbsp;</a>
</td>
</tr>
<tr align="right" bgcolor="#EEF4EA">
    <td height="36" colspan="10" align="right">
        <div class="pagetool">
            <?php echo $_smarty_tpl->tpl_vars['pagetool']->value;?>

        </div>
    </td>
</tr>
</table>

</form>
<?php }} ?>
