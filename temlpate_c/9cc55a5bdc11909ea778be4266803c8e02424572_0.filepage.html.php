<?php
/* Smarty version 3.1.30, created on 2017-08-31 10:30:39
  from "D:\WWW\marketing\theme\default\case\page.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a774cf824983_52512733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cc55a5bdc11909ea778be4266803c8e02424572' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\case\\page.html',
      1 => 1504146631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head.tpl' => 1,
    'file:inc/header.tpl' => 1,
    'file:inc/pager.tpl' => 1,
    'file:inc/footer.tpl' => 1,
  ),
),false)) {
function content_59a774cf824983_52512733 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inc/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="../resources/bootstrap/css/reset.css"/>
<link rel="stylesheet" href="../resources/bootstrap/css/preferentiallist.css"/>
<?php echo '<script'; ?>
 src="../resources/bootstrap/js/pagination.js"><?php echo '</script'; ?>
>
<style>

    .caselist .caselist-content h3{height:47px;}

</style>

<body onload="caselist();">
<?php $_smarty_tpl->_subTemplateRender("file:inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-content">
    <div class="caselist">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['case_list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        	<li>
        		<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
">
        			<div class="caselist-img" style="height:238.286px;">
        				<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
">
        			</div>
        			<div class="caselist-content">
        				<h3><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</h3>
        				<div><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</div>
        			</div>
        		</a>
        	</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
        <?php $_smarty_tpl->_subTemplateRender("file:inc/pager.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
