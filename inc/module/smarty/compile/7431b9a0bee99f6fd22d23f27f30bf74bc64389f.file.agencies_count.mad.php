<?php /* Smarty version Smarty-3.1.16, created on 2014-04-22 11:12:31
         compiled from "E:\apache\www\study\admin\template\agencies_count.mad" */ ?>
<?php /*%%SmartyHeaderCode:27685355de1f209ee7-52169165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7431b9a0bee99f6fd22d23f27f30bf74bc64389f' => 
    array (
      0 => 'E:\\apache\\www\\study\\admin\\template\\agencies_count.mad',
      1 => 1397612456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27685355de1f209ee7-52169165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vp' => 0,
    'agencies' => 0,
    'goods_money' => 0,
    'vip_money' => 0,
    'user_num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5355de1f2806c8_71046387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5355de1f2806c8_71046387')) {function content_5355de1f2806c8_71046387($_smarty_tpl) {?><table width="98%px" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
    <td height="24" colspan="10" background="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/tbg.gif">今日统计</td>
</tr>

<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">当前可提现金额</td>
  <td width="81%"  align="center" style="color:red;"><?php echo $_smarty_tpl->tpl_vars['agencies']->value['income'];?>

</td>
</tr>

<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">今日商品收益</td>
  <td width="81%"  align="center" style="color:red;"><?php echo $_smarty_tpl->tpl_vars['goods_money']->value;?>

</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">今日vip收益</td>
  <td width="81%" align="center" style="color:red;"><?php echo $_smarty_tpl->tpl_vars['vip_money']->value;?>

</td>
</tr>

<tr align="center" bgcolor="#FAFAF1" height="30">
  <td width="19%">会员统计</td>
  <td width="81%" align="center" style="color:red;"><?php echo $_smarty_tpl->tpl_vars['user_num']->value;?>

</td>
</tr>


</table>
<?php }} ?>
