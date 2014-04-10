<?php /* Smarty version Smarty-3.1.16, created on 2014-01-22 16:47:32
         compiled from "D:\freehost\huangweitt\web\view\default\user_info.mad" */ ?>
<?php /*%%SmartyHeaderCode:3054252df85a4e1b1d9-55848738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9e8f99da426c13cca5485f27314403f7ea183b0' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\view\\default\\user_info.mad',
      1 => 1389015310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3054252df85a4e1b1d9-55848738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52df85a4ee92d3_10030704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df85a4ee92d3_10030704')) {function content_52df85a4ee92d3_10030704($_smarty_tpl) {?><div class="wid" id="main">
	<h3><span>个人资料修改</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="user.php?act=index" style=" font-weight:100"><u>返回主页</u></a></h3>
    <div id="main_all">
<table width="100%" border="0">
<form name="form7" method="post" action="user.php?act=userEdit">
  <tr>
    <td width="38%" align="right">会员账号：</td>
    <td width="62%"><input type="text" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
" disabled /></td>
  </tr>
   <tr>
    <td width="38%" align="right">会员昵称：</td>
    <td width="62%"><input type="text" name="nick_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['nick_name'];?>
" /></td>
  </tr>
  <tr>
    <td align="right">账号密码：</td>
    <td><input type="password" name="user_pass" value="" /></td>
  </tr>
  <tr>
    <td width="38%" align="right">会员邮箱：</td>
    <td width="62%"><input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
"  disabled /></td>
  </tr>
    <tr>
    <td width="38%" align="right">支付宝账号：</td>
    <td width="62%"><input type="text" name="pay_email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['pay_email'];?>
" /></td>
  </tr>
  <tr>
    <td width="38%" align="right">支付宝姓名：</td>
    <td width="62%"><input type="text" name="pay_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['pay_name'];?>
" /></td>
  </tr>
    <tr>
    <td width="38%" align="right">收货地址：</td>
    <td width="62%"><input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
" /></td>
  </tr>
<tr>
    <td align="center" colspan="2"><input style="width:60px; height:25px; line-height:25px" type="submit" name="submit" value="提交" />&nbsp;&nbsp;密码为空，表示不修改！</td>

  </tr>
  </form>
</table>

    </div>
</div><?php }} ?>
