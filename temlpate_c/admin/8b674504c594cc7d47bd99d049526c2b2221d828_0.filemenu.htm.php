<?php
/* Smarty version 3.1.30, created on 2017-09-07 16:00:09
  from "D:\WWW\marketing\admin\templates\menu.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b0fc893b7c64_30796686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b674504c594cc7d47bd99d049526c2b2221d828' => 
    array (
      0 => 'D:\\WWW\\marketing\\admin\\templates\\menu.htm',
      1 => 1504517828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b0fc893b7c64_30796686 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="menu">
    <ul class="top">
        <!-- 管理首页 -->
        <li><a href="index.php"><i class="home"></i><em><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_home'];
if ($_smarty_tpl->tpl_vars['unum']->value['system']) {?><span class="unum"><span><?php echo $_smarty_tpl->tpl_vars['unum']->value['system'];?>
</span></span><?php }?></em></a></li>
    </ul>

    <!-- 系统设置、自定义导航、首页幻灯、单页面管理 -->
    <ul>
        <li <?php if ($_smarty_tpl->tpl_vars['cur']->value == 'system') {?>class="cur"<?php }?>><a href="system.php"><i class="system"></i><em><?php echo $_smarty_tpl->tpl_vars['lang']->value['system'];?>
</em></a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['cur']->value == 'nav') {?>class="cur"<?php }?>><a href="nav.php"><i class="nav"></i><em><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav'];?>
</em></a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['cur']->value == 'show') {?>class="cur"<?php }?>><a href="show.php"><i class="show"></i><em><?php echo $_smarty_tpl->tpl_vars['lang']->value['show'];?>
</em></a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['cur']->value == 'page') {?>class="cur"<?php }?>><a href="page.php"><i class="page"></i><em><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu_page'];?>
</em></a></li>
    </ul>

    <!-- ？？？ -->
    <?php if (!$_smarty_tpl->tpl_vars['workspace']->value['menu_column'] && !$_smarty_tpl->tpl_vars['workspace']->value['menu_single']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['workspace']->value['menu_simple'], 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
    <ul>
        <li <?php if ($_smarty_tpl->tpl_vars['cur']->value == $_smarty_tpl->tpl_vars['menu']->value['unique_id']) {?>class="cur"<?php }?>><a href="page.php?rec=edit&id=<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
"><i></i><em><?php echo $_smarty_tpl->tpl_vars['menu']->value['page_name'];?>
</em></a></li>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['child'], 'child');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
        <li <?php if ($_smarty_tpl->tpl_vars['cur']->value == $_smarty_tpl->tpl_vars['child']->value['unique_id']) {?>class="cur"<?php }?>><a href="page.php?rec=edit&id=<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
"><i class="menuPage"></i><em><?php echo $_smarty_tpl->tpl_vars['child']->value['page_name'];?>
</em></a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php }?>

    <!-- 分类和列表 来自system.dou -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['workspace']->value['menu_column'], 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
    <ul>
        <li <?php if ($_smarty_tpl->tpl_vars['cur']->value == $_smarty_tpl->tpl_vars['menu']->value['name_category']) {?>class="cur"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['name_category'];?>
.php"><i class="<?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
Cat"></i><em><?php echo $_smarty_tpl->tpl_vars['menu']->value['lang_category'];?>
</em></a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['cur']->value == $_smarty_tpl->tpl_vars['menu']->value['name']) {?>class="cur"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
.php"><i class="<?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
"></i><em><?php echo $_smarty_tpl->tpl_vars['menu']->value['lang'];?>
</em></a></li>
    </ul>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    <!-- 单菜单 来自system.dou -->
    <?php if ($_smarty_tpl->tpl_vars['workspace']->value['menu_single']) {?>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['workspace']->value['menu_single'], 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
        <li <?php if ($_smarty_tpl->tpl_vars['cur']->value == $_smarty_tpl->tpl_vars['menu']->value['name']) {?>class="cur"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
.php"><i class="<?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
"></i><em><?php echo $_smarty_tpl->tpl_vars['menu']->value['lang'];
if ($_smarty_tpl->tpl_vars['menu']->value['name'] == 'plugin') {
if ($_smarty_tpl->tpl_vars['unum']->value['plugin']) {?><span class="unum"><span><?php echo $_smarty_tpl->tpl_vars['unum']->value['plugin'];?>
</span></span><?php }
}?></em></a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
    <?php }?>

    <!-- 系统管理：数据备份、手机版、设置模板、网站管理员、操作记录 -->
    <ul class="bot">
        <li <?php if ($_smarty_tpl->tpl_vars['cur']->value == 'mobile') {?>class="cur"<?php }?>><!-- <li id="must_hide"></li> --><a href="mobile.php"><i class="mobile"></i><em><?php echo $_smarty_tpl->tpl_vars['lang']->value['mobile'];?>
</em></a></li>
        <li id="must_hide" <?php if ($_smarty_tpl->tpl_vars['cur']->value == 'theme') {?>class="cur"<?php }?>><a href="theme.php"><i class="theme"></i><em><?php echo $_smarty_tpl->tpl_vars['lang']->value['theme'];
if ($_smarty_tpl->tpl_vars['unum']->value['theme']) {?><span class="unum"><span><?php echo $_smarty_tpl->tpl_vars['unum']->value['theme'];?>
</span></span><?php }?></em></a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['cur']->value == 'manager') {?>class="cur"<?php }?>><a href="manager.php"><i class="manager"></i><em><?php echo $_smarty_tpl->tpl_vars['lang']->value['manager'];?>
</em></a></li>

        

        <li <?php if ($_smarty_tpl->tpl_vars['cur']->value == 'backup') {?>class="cur"<?php }?>><a href="backup.php"><i class="backup"></i><em><?php echo $_smarty_tpl->tpl_vars['lang']->value['backup'];?>
</em></a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['cur']->value == 'manager_log') {?>class="cur"<?php }?>><a href="manager.php?rec=manager_log"><i class="managerLog"></i><em><?php echo $_smarty_tpl->tpl_vars['lang']->value['manager_log'];?>
</em></a></li>
    </ul>
</div><?php }
}
