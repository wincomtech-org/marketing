<?php
/* Smarty version 3.1.30, created on 2017-09-01 18:07:19
  from "D:\WWW\marketing\theme\default\inc\pager.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a93157657b12_48880541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b5e59c740f19a7404367d97d7e6ae0630a02889' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\inc\\pager.tpl',
      1 => 1504245697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a93157657b12_48880541 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="page-box">
    <input name="pageInput" value="2" type="hidden">
    <div class="page">
        <a href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['first'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pager_first'];?>
</a> 
        <?php if ($_smarty_tpl->tpl_vars['pager']->value['page'] > 1) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['previous'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pager_previous'];?>
</a>
        <?php } else {
echo $_smarty_tpl->tpl_vars['lang']->value['pager_previous'];
}?>

        <?php echo $_smarty_tpl->tpl_vars['pager']->value['pagep'];?>

        <?php echo $_smarty_tpl->tpl_vars['pager']->value['current'];?>

        <?php echo $_smarty_tpl->tpl_vars['pager']->value['pagen'];?>


        <?php if ($_smarty_tpl->tpl_vars['pager']->value['page'] < $_smarty_tpl->tpl_vars['pager']->value['page_count']) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['next'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pager_next'];?>
</a>
        <?php } else {
echo $_smarty_tpl->tpl_vars['lang']->value['pager_next'];
}?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['last'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pager_last'];?>
</a>
    </div>
    <em>
        <span class="now"><?php echo $_smarty_tpl->tpl_vars['pager']->value['page'];?>
</span>/<span class="num"><?php echo $_smarty_tpl->tpl_vars['pager']->value['page_count'];?>
</span>页
        共<span class="total"><?php echo $_smarty_tpl->tpl_vars['pager']->value['record_count'];?>
</span>条
    </em>
</div><?php }
}
