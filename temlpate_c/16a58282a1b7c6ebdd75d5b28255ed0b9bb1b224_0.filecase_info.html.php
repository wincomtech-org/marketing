<?php
/* Smarty version 3.1.30, created on 2017-08-31 11:21:20
  from "D:\WWW\marketing\theme\default\case\case_info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a780b08b8c92_49538595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16a58282a1b7c6ebdd75d5b28255ed0b9bb1b224' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\case\\case_info.html',
      1 => 1504149645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head.tpl' => 1,
    'file:inc/online_service.tpl' => 1,
    'file:inc/header.tpl' => 1,
    'file:inc/footer.tpl' => 1,
  ),
),false)) {
function content_59a780b08b8c92_49538595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inc/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/css/reset.css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/css/preferentiallist.css"/>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/js/pagination.js"><?php echo '</script'; ?>
>
<!-- <?php echo '<script'; ?>
 type="text/javascript" src="../../s.union.360.cn/164203.js" async defer><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="js/164203.js" async defer><?php echo '</script'; ?>
> -->

<body>
<?php $_smarty_tpl->_subTemplateRender("file:inc/online_service.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-content">
    <div class="caseDel-block">
        <div class="caseDel-block-tit"></div>
        <div class="caseDel-block-name"><span><?php echo $_smarty_tpl->tpl_vars['case']->value['title'];?>
</span></div>
        <div class="caseDel-block-content">
            <?php echo $_smarty_tpl->tpl_vars['case']->value['content'];?>

        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
