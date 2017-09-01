<?php
/* Smarty version 3.1.30, created on 2017-08-30 16:38:54
  from "D:\WWW\marketing\admin\templates\system.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a6799ebe9757_86010799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00bd047b2053ee3a7d3aad17d09e28e8002b0010' => 
    array (
      0 => 'D:\\WWW\\marketing\\admin\\templates\\system.htm',
      1 => 1501745262,
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
function content_59a6799ebe9757_86010799 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home'];
if ($_smarty_tpl->tpl_vars['ur_here']->value) {?> - <?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
 <?php }?></title>
<meta name="Copyright" content="Lothar Design." />
<link href="templates/public.css" rel="stylesheet" type="text/css">
<?php $_smarty_tpl->_subTemplateRender("file:javascript.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="images/jquery.tab.js"><?php echo '</script'; ?>
>
</head>
<body>
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
    <?php echo '<script'; ?>
 type="text/javascript">
     
     $(function(){ $(".idTabs").idTabs(); });
     
    <?php echo '</script'; ?>
>
    <div class="idTabs">
      <ul class="tab">
        <li><a href="#main"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system_main'];?>
</a></li>
        <li><a href="#display"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system_display'];?>
</a></li>
        <li><a href="#defined"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system_defined'];?>
</a></li>
        <?php if ($_smarty_tpl->tpl_vars['cfg_list_mail']->value) {?>
        <li><a href="#mail"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system_mail'];?>
</a></li>
        <?php }?>
      </ul>
      <div class="items">
       <form action="system.php?rec=update" method="post" enctype="multipart/form-data">
        <div id="main">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
         <tr>
           <th width="131"><?php echo $_smarty_tpl->tpl_vars['lang']->value['input_name'];?>
</th>
           <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['input_value'];?>
</th>
         </tr>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cfg_list_main']->value, 'cfg_list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cfg_list']->value) {
?>
         <tr>
          <td align="right"><?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['lang'];?>
</td>
          <td>
           <?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['type'] == 'radio') {?>
           <label for="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
_0">
            <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
_0" value="0"<?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['value'] == '0') {?> checked="true"<?php }?>>
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
</label>
           <label for="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
_1">
            <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
_1" value="1"<?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['value'] == '1') {?> checked="true"<?php }?>>
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
</label>
           <?php } elseif ($_smarty_tpl->tpl_vars['cfg_list']->value['type'] == 'select') {?>
           <select name="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cfg_list']->value['box'], 'value', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['value'] == $_smarty_tpl->tpl_vars['value']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

           </select>
           <?php } elseif ($_smarty_tpl->tpl_vars['cfg_list']->value['type'] == 'file') {?>
           <input type="file" name="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
" size="18" />
           <?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['value']) {?><a href="../<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['value'];?>
" target="_blank"><img src="images/icon_yes.png"></a><?php } else { ?><img src="images/icon_no.png"><?php }?>
           <?php } elseif ($_smarty_tpl->tpl_vars['cfg_list']->value['type'] == 'textarea') {?>
           <textarea name="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
" cols="83" rows="8" class="textArea" /><?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['value'];?>
</textarea>
           <?php } else { ?>
           <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['value'];?>
" size="80" class="inpMain" />
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['cue']) {?>
            <?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['type'] == 'radio' || $_smarty_tpl->tpl_vars['cfg_list']->value['type'] == 'select') {?>
            <span class="cue ml"><?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['cue'];?>
</span>
            <?php } else { ?>
            <p class="cue"><?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['cue'];?>
</p>
            <?php }?>
           <?php }?>
          </td>
         </tr>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
        </div>

        <div id="display">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
         <tr>
           <th width="131"><?php echo $_smarty_tpl->tpl_vars['lang']->value['input_name'];?>
</th>
           <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['input_value'];?>
</th>
         </tr>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cfg_list_display']->value, 'cfg_list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cfg_list']->value) {
?>
         <?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['type'] == 'array') {?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cfg_list']->value['value'], 'cfg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cfg']->value) {
?>
          <tr>
           <td align="right"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['lang'];?>
</td>
           <td>
            <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['value'];?>
" size="80" class="inpMain" />
            <?php if ($_smarty_tpl->tpl_vars['cfg']->value['cue']) {?>
             <p class="cue"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['cue'];?>
</p>
            <?php }?>
           </td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

         <?php } else { ?>
         <tr>
          <td align="right"><?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['lang'];?>
</td>
          <td>
           <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['value'];?>
" size="80" class="inpMain" />
           <?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['cue']) {?>
            <p class="cue"><?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['cue'];?>
</p>
           <?php }?>
          </td>
         </tr>
         <?php }?>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
        </div>

        <div id="defined">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
         <tr>
           <th width="131"><?php echo $_smarty_tpl->tpl_vars['lang']->value['input_name'];?>
</th>
           <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['input_value'];?>
</th>
         </tr>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cfg_list_defined']->value, 'cfg_list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cfg_list']->value) {
?>
         <?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['type'] == 'array') {?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cfg_list']->value['value'], 'cfg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cfg']->value) {
?>
          <tr>
           <td align="right"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['lang'];?>
</td>
           <td>
            <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['value'];?>
" size="80" class="inpMain" />
            <?php if ($_smarty_tpl->tpl_vars['cfg']->value['cue']) {?>
             <p class="cue"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['cue'];?>
</p>
            <?php }?>
           </td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

         <?php } else { ?>
         <tr>
          <td align="right"><?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['lang'];?>
</td>
          <td>
           <?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['type'] == 'textarea') {?>
           <textarea name="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
" cols="70" rows="5" class="textArea" /><?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['value'];?>
</textarea>
           <?php } else { ?>
           <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['value'];?>
" size="80" class="inpMain" />
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['cue']) {?>
            <p class="cue"><?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['cue'];?>
</p>
           <?php }?>
          </td>
         </tr>
         <?php }?>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['cfg_list_mail']->value) {?>
        <div id="mail">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
         <tr>
           <th width="131"><?php echo $_smarty_tpl->tpl_vars['lang']->value['input_name'];?>
</th>
           <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['input_value'];?>
</th>
         </tr>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cfg_list_mail']->value, 'cfg_list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cfg_list']->value) {
?>
         <tr>
          <td align="right"><?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['lang'];?>
</td>
          <td>
           <?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['type'] == 'radio') {?>
           <label for="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
_0">
            <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
_0" value="0"<?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['value'] == '0') {?> checked="true"<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['name'] == 'mail_service') {
echo $_smarty_tpl->tpl_vars['lang']->value['mail_service_mail'];
} else {
echo $_smarty_tpl->tpl_vars['lang']->value['no'];
}?></label>
           <label for="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
_1">
            <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
_1" value="1"<?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['value'] == '1') {?> checked="true"<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['name'] == 'mail_service') {
echo $_smarty_tpl->tpl_vars['lang']->value['mail_service_smtp'];
} else {
echo $_smarty_tpl->tpl_vars['lang']->value['yes'];
}?></label>
           <?php } else { ?>
           <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['value'];?>
" size="80" class="inpMain" />
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['cue']) {?>
            <?php if ($_smarty_tpl->tpl_vars['cfg_list']->value['type'] == 'radio' || $_smarty_tpl->tpl_vars['cfg_list']->value['type'] == 'select') {?>
            <span class="cue ml"><?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['cue'];?>
</span>
            <?php } else { ?>
            <p class="cue"><?php echo $_smarty_tpl->tpl_vars['cfg_list']->value['cue'];?>
</p>
            <?php }?>
           <?php }?>
          </td>
         </tr>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
        </div>
        <?php }?>

        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
         <tr>
          <td width="131"></td>
          <td>
           <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
           <input name="submit" class="btn" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['btn_submit'];?>
" />
          </td>
         </tr>
        </table>
        </form>
      </div>
    </div>
   </div>
 </div>
 <?php $_smarty_tpl->_subTemplateRender("file:footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 </div>
</body>
</html><?php }
}
