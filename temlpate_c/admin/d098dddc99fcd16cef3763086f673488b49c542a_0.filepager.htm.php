<?php
/* Smarty version 3.1.30, created on 2017-08-30 17:02:32
  from "D:\WWW\marketing\admin\templates\pager.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a67f288e84b8_26534766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd098dddc99fcd16cef3763086f673488b49c542a' => 
    array (
      0 => 'D:\\WWW\\marketing\\admin\\templates\\pager.htm',
      1 => 1501745263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a67f288e84b8_26534766 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pager"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pager_1'];?>
 <?php echo $_smarty_tpl->tpl_vars['pager']->value['record_count'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['pager_2'];?>
，<?php echo $_smarty_tpl->tpl_vars['lang']->value['pager_3'];?>
 <?php echo $_smarty_tpl->tpl_vars['pager']->value['page_count'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['pager_4'];?>
，<?php echo $_smarty_tpl->tpl_vars['lang']->value['pager_5'];?>
 <?php echo $_smarty_tpl->tpl_vars['pager']->value['page'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['pager_4'];?>
 | <a href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['first'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pager_first'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['pager']->value['page'] > 1) {?><a href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['previous'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pager_previous'];?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['lang']->value['pager_previous'];
}?> <?php if ($_smarty_tpl->tpl_vars['pager']->value['page'] < $_smarty_tpl->tpl_vars['pager']->value['page_count']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['next'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pager_next'];?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['lang']->value['pager_next'];
}?> <a href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['last'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pager_last'];?>
</a></div><?php }
}
