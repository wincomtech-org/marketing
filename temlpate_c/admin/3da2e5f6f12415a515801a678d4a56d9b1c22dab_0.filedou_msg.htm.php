<?php
/* Smarty version 3.1.30, created on 2017-08-30 17:09:20
  from "D:\WWW\marketing\admin\templates\dou_msg.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a680c069fa28_96136783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3da2e5f6f12415a515801a678d4a56d9b1c22dab' => 
    array (
      0 => 'D:\\WWW\\marketing\\admin\\templates\\dou_msg.htm',
      1 => 1504084130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:javascript.htm' => 1,
    'file:header.htm' => 1,
    'file:menu.htm' => 1,
    'file:ur_here.htm' => 1,
    'file:footer.htm' => 1,
  ),
),false)) {
function content_59a680c069fa28_96136783 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php if ($_smarty_tpl->tpl_vars['url']->value) {?>
<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
; URL=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" />
<?php }?>
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home'];
if ($_smarty_tpl->tpl_vars['ur_here']->value) {?> - <?php echo $_smarty_tpl->tpl_vars['lang']->value['msg'];?>
 <?php }?></title>
<meta name="Copyright" content="Lothar Design." />
<link href="templates/public.css" rel="stylesheet" type="text/css">
<?php $_smarty_tpl->_subTemplateRender("file:javascript.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (!$_smarty_tpl->tpl_vars['url']->value) {
echo '<script'; ?>
 type="text/javascript">

function go()
{
window.history.go(-1);
}
setTimeout("go()",{$time}*1000);

<?php echo '</script'; ?>
>
<?php }?>
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['out']->value != 'out') {?>
<div id="dcWrap">
 <?php $_smarty_tpl->_subTemplateRender("file:header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <div id="dcLeft"><?php $_smarty_tpl->_subTemplateRender("file:menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
 <div id="dcMain">
  <?php $_smarty_tpl->_subTemplateRender("file:ur_here.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="mainBox" style="<?php echo $_smarty_tpl->tpl_vars['workspace']->value['height'];?>
">
   <h3><?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
</h3>
   <div id="douMsg">
    <h2><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</h2>
    <dl>
     <dt><?php echo $_smarty_tpl->tpl_vars['cue']->value;?>
</dt>
     <?php if ($_smarty_tpl->tpl_vars['check']->value) {?>
     <p><form action="<?php echo $_smarty_tpl->tpl_vars['check']->value;?>
" method="post"><input name="confirm" class="btn" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['del_confirm'];?>
" /></form></p>
     <?php }?>
     <dd><a href="<?php if ($_smarty_tpl->tpl_vars['url']->value) {
echo $_smarty_tpl->tpl_vars['url']->value;
} else { ?>javascript:history.go(-1);<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lang']->value['dou_msg_back'];?>
</a></dd>
    </dl>
   </div>
  </div>
 </div>
 <?php $_smarty_tpl->_subTemplateRender("file:footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php } else { ?>
<div id="outMsg">
 <h2><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</h2>
 <dl>
  <dt><?php echo $_smarty_tpl->tpl_vars['cue']->value;?>
</dt>
  <dd><a href="<?php if ($_smarty_tpl->tpl_vars['url']->value) {
echo $_smarty_tpl->tpl_vars['url']->value;
} else { ?>javascript:history.go(-1);<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lang']->value['dou_msg_back'];?>
</a></dd>
 </dl>
</div>
<?php }?>
</body>
</html><?php }
}
