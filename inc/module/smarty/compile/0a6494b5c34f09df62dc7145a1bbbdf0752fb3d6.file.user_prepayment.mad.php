<?php /* Smarty version Smarty-3.1.16, created on 2014-01-22 16:49:58
         compiled from "D:\freehost\huangweitt\web\view\default\user_prepayment.mad" */ ?>
<?php /*%%SmartyHeaderCode:2287452df8636db3454-89861885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a6494b5c34f09df62dc7145a1bbbdf0752fb3d6' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\view\\default\\user_prepayment.mad',
      1 => 1389150186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2287452df8636db3454-89861885',
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
  'unifunc' => 'content_52df8636ea3f46_08590451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df8636ea3f46_08590451')) {function content_52df8636ea3f46_08590451($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\huangweitt\\web\\inc\\module\\smarty\\plugins\\modifier.date_format.php';
?><div class="wid" id="main">
	<h3><span>充值中心</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" style=" font-weight:100"><u>返回主页</u></a></h3>
    <div id="main_all">
<table width="90%" border="0" style="margin:auto;margin-top:10px; border:1px solid #ccc;">
  <tr >
    <th width="27%">订单编号</td>
    <th width="26%">充值金额</td>
    <th width="23%">状态</td>
    <th width="24%">充值时间</td>
  </tr>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
  <tr style="text-align:center">
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_sn'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['income_money'];?>
</td>
    <td><?php if ($_smarty_tpl->tpl_vars['v']->value['pay_status']==1) {?>已支付<?php } else { ?>未支付<?php }?></td>
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

<table width="100%" border="0" style="margin-top:30px; margin-bottom:30px; display:none;">
<form name="form7" method="post" action="/reorder/" target="_blank">
  <tr>
    <td width="38%" align="right">充值金额：</td>
    <td width="62%"><input type="text" name="price" value="10" />
      *（单位：元）</td>
  </tr>
  <tr>
    <td align="right">支付方式：</td>
    <td><input style="height:20px;width:20px; line-height:20px" type="radio" name="c_type" value="1" checked="checked" /> 支付宝支付</td>
  </tr>
<tr>
  <td align="center" colspan="2"><p>
  <input style="width:60px; height:25px; line-height:25px" type="submit" name="submit" value="充值" />
  &nbsp;&nbsp;充值金额必须为整数！</p>
    <p class="STYLE1"> <strong>注意</strong>：请选择&quot;<span class="STYLE2">即时到帐</span>&quot;付款，否则无法到账 <a href="http://www.yingzh.com/qq/yanshi.jpg" target="_blank"><span class="STYLE2">查看演示 </span></a></p></td>

</tr>
  </form>
</table>
<table width="100%" border="0" style="margin-top:30px; margin-bottom:30px;">
<form name="form7" method="post" action="orders.php?act=prepayment" target="_blank">
  <tr>
    <td width="38%" align="right">充值金额：</td>
    <td width="62%"><input type="text" name="price" value="10" />
      *（单位：元）</td>
  </tr>
  <tr>
    <td align="right">支付方式：</td>
    <td><input style="height:20px;width:20px; line-height:20px" type="radio" name="c_type" value="1" checked="checked" /> 支付宝支付</td>
  </tr>
<tr>
  <td align="center" colspan="2"><p>
  <input style="width:60px; height:25px; line-height:25px" type="submit" name="submit" value="充值" />
  &nbsp;&nbsp;充值金额必须为整数！</p>
    </td>

</tr>
  </form>
</table>
    </div>
</div><?php }} ?>
