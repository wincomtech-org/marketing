<?php
/* Smarty version 3.1.30, created on 2017-08-31 17:10:20
  from "D:\WWW\marketing\theme\default\report\article_info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a7d27c3f8b33_33220071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77eede958f1fccf52bf97a905f83bfa732df90ca' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\report\\article_info.html',
      1 => 1504170617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head.tpl' => 1,
    'file:inc/header.tpl' => 1,
    'file:inc/footer.tpl' => 1,
  ),
),false)) {
function content_59a7d27c3f8b33_33220071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inc/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/js/pagination.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/js/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
<style>
    
    #append{padding:80px 20%;font-size:16px;}
    #append h1{font-siz:35px;}
    
</style>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="append">
        <h3 align="center"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h3>
        <div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['defined']->value, 'diy');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['diy']->value) {
?>
            <p><?php echo $_smarty_tpl->tpl_vars['diy']->value['arr'];?>
：<span><?php echo $_smarty_tpl->tpl_vars['diy']->value['value'];?>
</span></p>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
        <br>
        <div><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
