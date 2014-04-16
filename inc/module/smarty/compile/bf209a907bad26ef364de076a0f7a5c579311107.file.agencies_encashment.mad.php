<?php /* Smarty version Smarty-3.1.16, created on 2014-04-16 10:49:15
         compiled from "E:\apache\www\study\admin.\template\agencies_encashment.mad" */ ?>
<?php /*%%SmartyHeaderCode:24821534de405c73fd5-86357916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf209a907bad26ef364de076a0f7a5c579311107' => 
    array (
      0 => 'E:\\apache\\www\\study\\admin.\\template\\agencies_encashment.mad',
      1 => 1397616543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24821534de405c73fd5-86357916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534de405ce8689_14756038',
  'variables' => 
  array (
    'rows' => 0,
    'v' => 0,
    'pagetool' => 0,
    'ag' => 0,
    'mad_configs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534de405ce8689_14756038')) {function content_534de405ce8689_14756038($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\apache\\www\\study\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?>

<div class="wid" id="main">

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
<form name="form7" method="post" action="agencies.php?act=agencies_encashment">
<tr>
    <td width="38%" align="right">可提现金额 :</td>
    <td width="62%" align="left" > <?php echo $_smarty_tpl->tpl_vars['ag']->value['income'];?>
 元</td>
  </tr>
  <tr>
    <td width="38%" align="right">提现金额：</td>
    <td width="62%" align="left" ><input type="text" name="price" value="10" />
      *必须为整数（单位：元）</td>
  </tr>
    <tr>
    <td width="38%" align="right">支付宝姓名：</td>
    <td width="62%" align="left" ><input type="text" name="pay_name" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['pay_name'];?>
" />
      </td>
  </tr>
    <tr>
    <td width="38%" align="right">支付宝邮箱：</td>
    <td width="62%" align="left" ><input type="text" name="pay_email" value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['pay_email'];?>
" />
     </td>
  </tr>
<tr>
  <td align="center" colspan="2"><input style="width:60px; height:25px; line-height:25px" type="submit" name="submit" value="提现" />
    &nbsp;&nbsp;提金额必须为整数！</td>

</tr>
  </form>
</table>

    </div>
</div>
<?php }} ?>
