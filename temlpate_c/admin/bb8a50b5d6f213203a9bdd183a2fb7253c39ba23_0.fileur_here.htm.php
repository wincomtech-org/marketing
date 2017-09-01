<?php
/* Smarty version 3.1.30, created on 2017-08-30 16:38:51
  from "D:\WWW\marketing\admin\templates\ur_here.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a6799bd1d665_49983343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb8a50b5d6f213203a9bdd183a2fb7253c39ba23' => 
    array (
      0 => 'D:\\WWW\\marketing\\admin\\templates\\ur_here.htm',
      1 => 1499653078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a6799bd1d665_49983343 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- 当前位置 -->
<div id="urHere"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home'];
if ($_smarty_tpl->tpl_vars['ur_here']->value) {?><b>></b><strong><?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
</strong> <?php }?></div><?php }
}
