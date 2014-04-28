<?php /* Smarty version Smarty-3.1.16, created on 2014-04-28 16:10:13
         compiled from "E:\apache\www\study\view\default\article_footer.mad" */ ?>
<?php /*%%SmartyHeaderCode:14375535e031db08e48-28025655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3943d1326507a9611997a7bb8a7c31f0c84cfd2' => 
    array (
      0 => 'E:\\apache\\www\\study\\view\\default\\article_footer.mad',
      1 => 1398672129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14375535e031db08e48-28025655',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535e031db10a21_12141070',
  'variables' => 
  array (
    'vp' => 0,
    'mad_configs' => 0,
    'config_main_domain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e031db10a21_12141070')) {function content_535e031db10a21_12141070($_smarty_tpl) {?>
<div class="clear"></div>
<div class="W foot mt10">
    <div class="copyright fl">
        <table border="0" width="100%">
            <tr>
                <td width="210" align="left"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/logo.jpg" width="200px" height="34px"/></td>
                <td width="1" style="background:#cccccc"></td>
                <td width="15"> </td>
                <td>
                   <?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['copyright'];?>

                </td>
            </tr>
        </table>
    </div>
</div>

<div class="checkweb">
 <a href="<?php echo $_smarty_tpl->tpl_vars['config_main_domain']->value;?>
/agencies_check.php?act=check_now&domain=<?php echo $_smarty_tpl->tpl_vars['mad_configs']->value['domain'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/images/checkweb.png" alt="验证"></a>
</div><?php }} ?>
