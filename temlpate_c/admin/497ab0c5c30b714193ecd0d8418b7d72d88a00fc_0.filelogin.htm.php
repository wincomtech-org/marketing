<?php
/* Smarty version 3.1.30, created on 2017-08-31 09:30:06
  from "D:\WWW\marketing\admin\templates\login.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a7669e6c1e73_79952276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '497ab0c5c30b714193ecd0d8418b7d72d88a00fc' => 
    array (
      0 => 'D:\\WWW\\marketing\\admin\\templates\\login.htm',
      1 => 1501745264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a7669e6c1e73_79952276 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
<meta name="Copyright" content="Lothar Design." />
<link href="templates/public.css" rel="stylesheet" type="text/css">
<?php echo '<script'; ?>
 type="text/javascript">
function refreshimage() {
    var cap = document.getElementById('vcode');
    cap.src = cap.src + '?';
}
<?php echo '</script'; ?>
>
</head>
<body>
<div id="login">
  <div class="dologo" id="must_hide"></div>
  <?php if ($_smarty_tpl->tpl_vars['rec']->value == 'default') {?>
  <form action="login.php?rec=login" method="post">
   <ul>  
    <li class="inpLi"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['login_user_name'];?>
：</b><input type="text" name="user_name" class="inpLogin"></li>
    <li class="inpLi"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['login_password'];?>
：</b><input type="password" name="password" class="inpLogin"></li>
    <?php if ($_smarty_tpl->tpl_vars['site']->value['captcha']) {?>
    <li class="captchaPic">
      <div class="inpLi"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['login_captcha'];?>
：</b><input type="text" name="captcha" class="captcha"></div>
      <img id="vcode" src="../captcha.php" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['captcha'];?>
" border="1" onClick="refreshimage()" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['login_captcha_refresh'];?>
">
    </li>
    <?php }?>
    <li class="sub"><input type="submit" name="submit" class="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['login_submit'];?>
"></li> 
    <li class="action"><a href="login.php?rec=password_reset"><?php echo $_smarty_tpl->tpl_vars['lang']->value['login_password_forget'];?>
？</a> <em class="separator">|</em> <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['root_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['login_back'];?>
</a></li> 
   </ul>
  </form>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['rec']->value == 'password_reset') {?>
  <form action="login.php?rec=password_reset_post" method="post">
   <ul class="reset">
    <?php if ($_smarty_tpl->tpl_vars['action']->value == 'default') {?>
    <li class="inpLi"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['login_user_name'];?>
：</b><input type="text" name="user_name" class="inpLogin"></li>
    <li class="inpLi"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['login_email'];?>
：</b><input type="text" name="email" class="inpLogin"></li>
    <li class="sub">
     <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
     <input type="submit" name="submit" class="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['login_password_reset'];?>
">
    </li> 
    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'reset') {?>
    <li class="inpLi"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['manager_new_password'];?>
：</b><input type="password" name="password" class="inpLogin"></li>
    <li class="inpLi"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['manager_new_password_confirm'];?>
：</b><input type="password" name="password_confirm" class="inpLogin"></li>
    <li class="sub">
     <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
" />
     <input type="hidden" name="code" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" />
     <input type="hidden" name="action" value="reset" />
     <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
     <input type="submit" name="submit" class="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['btn_submit'];?>
">
    </li> 
    <?php }?>
    <li class="action"><a href="login.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['login_submit'];?>
</a> <em class="separator">|</em> <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['root_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['login_back'];?>
</a></li> 
   </ul>
  </form>
  <?php }?>
</div>
</body>
</html><?php }
}
