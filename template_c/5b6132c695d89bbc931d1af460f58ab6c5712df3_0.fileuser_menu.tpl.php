<?php
/* Smarty version 3.1.30, created on 2017-09-08 08:51:16
  from "D:\WWW\marketing\theme\default\inc\user_menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b1e9847d40c6_16836886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b6132c695d89bbc931d1af460f58ab6c5712df3' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\inc\\user_menu.tpl',
      1 => 1504597976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b1e9847d40c6_16836886 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="usercenter_tag">
    <ul>
        <li <?php if ($_smarty_tpl->tpl_vars['rec']->value == 'default') {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['user'];?>
"><em></em>基本信息</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['rec']->value == 'order_list') {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['order'];?>
"><em></em>我的订单</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['rec']->value == 'cart') {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['cart'];?>
"><em></em>购物车</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['rec']->value == 'logout') {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['logout'];?>
"><em></em>退出登录</a></li>
    </ul>
</div><?php }
}
