<?php /* Smarty version Smarty-3.1.16, created on 2014-04-14 09:32:05
         compiled from "E:\apache\www\study\admin.\template\body-left.mad" */ ?>
<?php /*%%SmartyHeaderCode:29029534b3a959968d1-96363136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef1a5788bebf59b5c3f55f57a628cb09f9b2ba19' => 
    array (
      0 => 'E:\\apache\\www\\study\\admin.\\template\\body-left.mad',
      1 => 1397437819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29029534b3a959968d1-96363136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_agencies' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534b3a959c9513_65698404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534b3a959c9513_65698404')) {function content_534b3a959c9513_65698404($_smarty_tpl) {?><table width='100%' height="100%" border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td style='padding-left:3px;' valign="top">
	<!-- Item 1 Strat -->
  <?php if (!$_smarty_tpl->tpl_vars['is_agencies']->value) {?>
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
            <li><a href='main.php?menu=system&target=agencies_list' >域名列表</a> </li>
            <li><a href='main.php?menu=system&target=agencies' >域名添加</a> </li>
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
<?php } else { ?>

  <dl class='bitem'>
        <dt ><b>全局设置</b></dt>
        <dd style='display:block' class='sitem' id='items1_1'>
          <?php if ($_smarty_tpl->tpl_vars['menu']->value=='users') {?>
           <ul class='sitemu'>
            <li><a href='main.php?menu=users&target=list' >会员列表/修改</a> </li>
            <li><a href='main.php?menu=users&target=prepayment' >会员充值记录</a> </li>
            <li><a href='main.php?menu=users&target=encashment' >会员提现记录</a> </li>
          </ul>
          <?php } elseif ($_smarty_tpl->tpl_vars['menu']->value=='goods') {?>
          <ul class='sitemu'>

            <li><a href='main.php?menu=goods&target=order' >产品订单管理</a> </li>
             <li><a href='main.php?menu=goods&target=encashment' >申请提现</a> </li>
             <li><a href='main.php?menu=goods&target=encashment' >统计信息</a> </li>
          </ul>
          <?php } else { ?>
          <ul class='sitemu'>
            <li><a href='main.php?menu=system&target=site' >站点信息</a> </li>
            <li><a href='main.php?menu=system&target=model' >模版设置</a> </li>
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


<?php }?>
    <!--End-->
  </tr>
</table><?php }} ?>
