<?php
/* Smarty version 3.1.30, created on 2017-09-01 17:49:57
  from "D:\WWW\marketing\admin\templates\header.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a92d455f3b08_69718029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f27b7c92c426e7e2b0dab0de82c09801ab173d71' => 
    array (
      0 => 'D:\\WWW\\marketing\\admin\\templates\\header.htm',
      1 => 1502073437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a92d455f3b08_69718029 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="dcHead">
    <div id="head">
        <div class="logo"><a href="index.php"><img src="images/dclogo.gif" alt="logo"></a></div>
        <div class="nav">
            <ul>
                <li class="M"><a href="JavaScript:void(0);" class="topAdd"><?php echo $_smarty_tpl->tpl_vars['lang']->value['top_add'];?>
</a>
                    <div class="drop mTopad"><?php if ($_smarty_tpl->tpl_vars['lang']->value['top_add_product']) {?><a href="product.php?rec=add"><?php echo $_smarty_tpl->tpl_vars['lang']->value['top_add_product'];?>
</a><?php }?> <?php if ($_smarty_tpl->tpl_vars['lang']->value['top_add_article']) {?><a href="article.php?rec=add"><?php echo $_smarty_tpl->tpl_vars['lang']->value['top_add_article'];?>
</a><?php }?> <a href="nav.php?rec=add"><?php echo $_smarty_tpl->tpl_vars['lang']->value['top_add_nav'];?>
</a> <a href="show.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['top_add_show'];?>
</a> <a href="page.php?rec=add"><?php echo $_smarty_tpl->tpl_vars['lang']->value['top_add_page'];?>
</a> <a href="manager.php?rec=add"><?php echo $_smarty_tpl->tpl_vars['lang']->value['top_add_manager'];?>
</a> <a href="link.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['top_add_link'];?>
</a> </div>
                </li>
                <li><a href="../index.php" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lang']->value['top_go_site'];?>
</a></li>
                <li><a href="index.php?rec=clear_cache"><?php echo $_smarty_tpl->tpl_vars['lang']->value['clear_cache'];?>
</a></li>
                
                
            </ul>
            <ul class="navRight">
                <!-- <li class="M noLeft">
                    切换操作语言
                    <select onchange="window.location=this.value;">
                        <option <?php if ($_smarty_tpl->tpl_vars['site']->value['lang_type'] == 1 || !$_smarty_tpl->tpl_vars['site']->value['lang_type']) {?>selected<?php }?> value="index.php?lpost=zh_cn">中文模式</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['site']->value['lang_type'] == 2) {?>selected<?php }?> value="index.php?lpost=en_us">英文模式</option>
                    </select>
                </li> -->
                <li class="M noLeft"><a href="JavaScript:void(0);"><?php echo $_smarty_tpl->tpl_vars['lang']->value['top_welcome'];
echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</a>
                    <div class="drop mUser">
                        <a href="manager.php?rec=edit&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['top_manager_edit'];?>
</a>
                        
                    </div>
                </li>
                <li class="noRight"><a href="login.php?rec=logout"><?php echo $_smarty_tpl->tpl_vars['lang']->value['top_logout'];?>
</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- dcHead 结束 --><?php }
}
