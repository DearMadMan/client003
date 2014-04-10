<?php /* Smarty version Smarty-3.1.16, created on 2014-02-09 19:45:09
         compiled from "D:\freehost\huangweitt\web\admin\template\goods_vip.mad" */ ?>
<?php /*%%SmartyHeaderCode:497052df892a4741c5-48747975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b44b8ed4cd8cd665f60291274de17ecddf3e254' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\admin\\template\\goods_vip.mad',
      1 => 1391946256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '497052df892a4741c5-48747975',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52df892a560922_27077569',
  'variables' => 
  array (
    'vp' => 0,
    'mad_configs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df892a560922_27077569')) {function content_52df892a560922_27077569($_smarty_tpl) {?>
<!--  快速转换位置按钮  -->
<script type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/js/goods_vip.js'></script>

<!--  内容列表   -->
<form  method="POST" action="goods.php?act=vipEdit">
<div class='goods-vip' >
	<p>开通VIP所需金钱:<input type="text" name='vip_money' value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['vip_money'];?>
"></p>
	<p>开通VIP赠送积分:<input type="text" name='vip_credits' value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['vip_credits'];?>
"></p>
	<p>VIP默认佣金比率:<input type="text" name='vip_spreader' value="<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['vip_spreader'];?>
"></p>
	<p>是否允许用户手动开通VIP <input type="checkbox"  value='<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['vip_is_open'];?>
'<?php if ($_smarty_tpl->tpl_vars['mad_configs']->value['vip_is_open']==1) {?>checked<?php } else { ?><?php }?> >
	<input type="hidden" name='vip_is_open' value='<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['vip_is_open'];?>
'>
	</p>
		<p>是否开启只送固定积分 <input type="checkbox"  value='<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['spreader_mode'];?>
'<?php if ($_smarty_tpl->tpl_vars['mad_configs']->value['spreader_mode']==1) {?>checked<?php } else { ?><?php }?> >
			<input type="hidden" name='spreader_mode' value='<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['spreader_mode'];?>
'>
		</p>
	<p>推广产品送固定积分数：<input type="text" name='spreader_add' value='<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['spreader_add'];?>
'></p>
	<p>禁止手动开通VIP留言：<input type="text" name='vip_msg' value='<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['vip_msg'];?>
'></p>
	<p>邮件订阅代码：<input type="text" name='email_code' value='<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['email_code'];?>
'></p>
	<p>推广登录送积分：<input type="text" name='login_credits' value='<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['login_credits'];?>
'></p>
	<p><input type="submit" value="保存"></p>
</div>
</form>

<?php }} ?>
