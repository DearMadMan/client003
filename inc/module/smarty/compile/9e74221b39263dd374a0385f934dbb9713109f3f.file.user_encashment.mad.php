<?php /* Smarty version Smarty-3.1.16, created on 2014-01-22 18:57:36
         compiled from "D:\freehost\huangweitt\web\view\default\user_encashment.mad" */ ?>
<?php /*%%SmartyHeaderCode:1261052dfa4202742c2-61141772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e74221b39263dd374a0385f934dbb9713109f3f' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\view\\default\\user_encashment.mad',
      1 => 1389151718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1261052dfa4202742c2-61141772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'v' => 0,
    'pagetool' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dfa42037b394_65365817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dfa42037b394_65365817')) {function content_52dfa42037b394_65365817($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\huangweitt\\web\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?><div class="wid" id="main">
	<h3><span>提现管理</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" style=" font-weight:100"><u>返回主页</u></a></h3>
    <div id="main_all">
<table width="90%" border="0" style="margin:auto;margin-top:10px; border:1px solid #ccc;">
  <tr >
    <th width="27%">订单编号</td>
    <th width="26%">提现金额</td>
    <th width="23%">状态</td>
    <th width="24%">提现时间</td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
  <tr style="text-align:center">
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_sn'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['expense_money'];?>
</td>
    <td><?php if ($_smarty_tpl->tpl_vars['v']->value['expense_status']==1) {?>已打款<?php } else { ?>未打款<?php }?></td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y/%m/%d");?>
</td>
  </tr>
 <?php } ?>
  <tr>
  	<td colspan="4" style="text-align:right">
     <div class="pagetool"><?php echo $_smarty_tpl->tpl_vars['pagetool']->value;?>
</div>
    </td>
  </tr>
</table>

<table width="100%" border="0" style="margin-top:30px; margin-bottom:30px;">
<form name="form7" method="post" action="orders.php?act=encashment">
  <tr>
    <td width="38%" align="right">提现金额：</td>
    <td width="62%"><input type="text" name="price" value="10" />
      *必须为整数（单位：元）</td>
  </tr>
<tr>
  <td align="center" colspan="2"><input style="width:60px; height:25px; line-height:25px" type="submit" name="submit" value="提现" />
    &nbsp;&nbsp;提金额必须为整数！</td>

</tr>
  </form>
</table>

    </div>
</div><?php }} ?>
