<?php /* Smarty version Smarty-3.1.16, created on 2014-02-11 10:18:19
         compiled from "D:\freehost\huangweitt\web\admin\template\body-left.mad" */ ?>
<?php /*%%SmartyHeaderCode:2961352df878e9ef4a9-76235555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43a803d9ce2a9545a481785abfe9911c1ce38b9a' => 
    array (
      0 => 'D:\\freehost\\huangweitt\\web\\admin\\template\\body-left.mad',
      1 => 1392084974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2961352df878e9ef4a9-76235555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52df878ea98875_54107688',
  'variables' => 
  array (
    'menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df878ea98875_54107688')) {function content_52df878ea98875_54107688($_smarty_tpl) {?><table width='100%' height="100%" border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td style='padding-left:3px;' valign="top">
	<!-- Item 1 Strat -->
      <dl class='bitem'>
        <dt ><b>全局设置</b></dt>
        <dd style='display:block' class='sitem' id='items1_1'>
          <?php if ($_smarty_tpl->tpl_vars['menu']->value=='users') {?>
           <ul class='sitemu'>
            <li><a href='main.php?menu=users&target=list' >会员列表/修改</a> </li>
            <li><a href='main.php?menu=users&target=prepayment' >会员充值记录</a> </li>
            <li><a href='main.php?menu=users&target=encashment' >会员提现记录</a> </li>
             <li><a href='main.php?menu=users&target=pics' >幻灯片</a> </li>
            <li><a href='main.php?menu=users&target=usermsg' >VIP留言管理</a> </li>
          </ul>
          <?php } elseif ($_smarty_tpl->tpl_vars['menu']->value=='goods') {?>
          <ul class='sitemu'>
            <li><a href='main.php?menu=goods&target=list' >产品列表</a> </li>
            <li><a href='main.php?menu=goods&target=goods_edit&act=add' >添加产品</a> </li>
            <li><a href='main.php?menu=goods&target=order' >产品订单管理</a> </li>
            <li><a href='main.php?menu=goods&target=vip' >VIP积分转换</a> </li>
            <li><a href='main.php?menu=goods&target=article' >文章中心</a> </li>
            <li><a href='main.php?menu=goods&target=article_type' >文章分类</a> </li>
          </ul>
          <?php } else { ?>
          <ul class='sitemu'>
            <li><a href='main.php?menu=system&target=site' >站点信息</a> </li>
            <li><a href='main.php?menu=system&target=admin' >管理员(密码修改)</a> </li>
            <li><a href='/index.php' target="_blank" >查看主页</a> </li>
          </ul>
          <?php }?>

        </dd>
      </dl>

      <dl class='bitem'>
        <dt ><b>系统帮助</b></dt>
        <dd style='display:block' class='sitem' id='items2_1'>
          <ul class='sitemu'>
            <li><a href='http://www.10nai.com' target='_blank'>交流论坛</a></li>

          </ul>
        </dd>
      </dl>
	  </td>
  </tr>
</table><?php }} ?>
