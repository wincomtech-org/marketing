<?php
/* Smarty version 3.1.30, created on 2017-09-04 11:55:33
  from "D:\WWW\marketing\admin\templates\javascript.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59acceb55981d2_77010508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51f8661093e09154ce69a58e0232e8f0e2626e9c' => 
    array (
      0 => 'D:\\WWW\\marketing\\admin\\templates\\javascript.htm',
      1 => 1501745264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59acceb55981d2_77010508 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="images/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="images/global.js"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['cur']->value == 'index') {
echo '<script'; ?>
 type="text/javascript">
var dou_api = '<?php echo $_smarty_tpl->tpl_vars['dou_api']->value;?>
';

if (typeof(json) == 'undefined') var json = '';
function jsonCallBack(url, callback) {
    $.getScript(url,
    function() {
        callback(json);
    });
}
function dou_update() {
    jsonCallBack(dou_api,
    function(json) {
        document.getElementById('douApi').innerHTML = json;
    })
}
window.onload = dou_update;

<?php echo '</script'; ?>
>
<?php }
}
}
