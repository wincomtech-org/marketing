<?php
/* Smarty version 3.1.30, created on 2017-09-01 17:58:40
  from "D:\WWW\marketing\theme\default\dou_msg.dwt" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a92f508a2e43_55143465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53969ff9c56b652b8ebc207a8d425ff663de5d59' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\dou_msg.dwt',
      1 => 1504080769,
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
function content_59a92f508a2e43_55143465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inc/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['url']->value) {?>
<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
; URL=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" />
<?php }
if (!$_smarty_tpl->tpl_vars['url']->value) {
echo '<script'; ?>
 type="text/javascript">
    
    function go() {
        window.history.go(-1);
    }
    
    setTimeout("go()", <?php echo $_smarty_tpl->tpl_vars['time']->value;?>
*1000);
<?php echo '</script'; ?>
>
<?php }?>
<body class="cover" style="background:none;">

    <div class="page-container">
        <?php $_smarty_tpl->_subTemplateRender("file:inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="requirementBox" style="background:#f5f5f5;">
            <div class="requirementText">
                <span>提示信息：</span>
                <div class="clear"></div>
            </div>
            <div class="changeTabBox">
                <div id="douMsg" class="wrap">
                <dl>
                    <dt><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</dt>
                    <dd><?php echo $_smarty_tpl->tpl_vars['cue']->value;?>
<a href="<?php if ($_smarty_tpl->tpl_vars['url']->value) {
echo $_smarty_tpl->tpl_vars['url']->value;
} else { ?>javascript:history.go(-1);<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lang']->value['dou_msg_back'];?>
</a></dd>
                </dl>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
