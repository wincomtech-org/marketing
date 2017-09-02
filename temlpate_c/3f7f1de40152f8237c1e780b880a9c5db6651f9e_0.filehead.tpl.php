<?php
/* Smarty version 3.1.30, created on 2017-09-01 17:57:52
  from "D:\WWW\marketing\theme\default\inc\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a92f20ec2626_40407433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f7f1de40152f8237c1e780b880a9c5db6651f9e' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\inc\\head.tpl',
      1 => 1504146960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a92f20ec2626_40407433 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
    <!-- 百度认证代码 -->
    <!-- <meta name="baidu-site-verification" content="f7PMG5xVx1" /> -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/css/resert.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/css/style.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/resetCss/header.css"/>
    <!-- <link rel="shortcut icon" href="http://www.315pr.com/resources/bootstrap/img/sdyk.ico"> -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/js/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/js/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="theme/default/images/global.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        var theme = '<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
';
    <?php echo '</script'; ?>
>
</head><?php }
}
