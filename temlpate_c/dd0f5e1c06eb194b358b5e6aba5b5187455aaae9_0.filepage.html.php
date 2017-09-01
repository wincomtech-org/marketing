<?php
/* Smarty version 3.1.30, created on 2017-08-31 17:06:17
  from "D:\WWW\marketing\theme\default\report\page.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a7d189d403b2_22419920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd0f5e1c06eb194b358b5e6aba5b5187455aaae9' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\report\\page.html',
      1 => 1504170374,
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
function content_59a7d189d403b2_22419920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inc/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/js/pagination.js"><?php echo '</script'; ?>
>

<body onload="newsReportList()">
    <?php $_smarty_tpl->_subTemplateRender("file:inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- 不知道干嘛的 S -->
    <div class="filter-area m10">
        <ul class="filter-tit" id="filter-tit">
        </ul>
    </div>
    <div class="filter-block" id="filter-content">
        <ul class="filter-content" id="filter-content1">
        </ul>
        <ul class="filter-content" id="filter-content2">
            <li data="0"></li>
            <li data="1"></li>
            <li data="2"></li>
        </ul>
    </div>
    <!-- 不知道干嘛的 E -->

<div class="page-content" style="margin-top: 0">
    <div class="demandlist">
        <ul style="padding-top:0;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <li class="addPreferentialList">
        	<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
">
        		<div class="img"><img style="height:240px;" class="img" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
" alt=""></div>
        		<div class="content">
        			<div class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</div>
        			<div class="priceText"><em>点击量：<?php echo $_smarty_tpl->tpl_vars['v']->value['click'];?>
</em></div>
        			<div class="priceText" style="text-align:right;"><em><?php echo $_smarty_tpl->tpl_vars['v']->value['add_time'];?>
</em></div>
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
</html>
<?php }
}
