<?php
/* Smarty version 3.1.30, created on 2017-08-30 17:22:34
  from "D:\WWW\marketing\admin\templates\nav.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a683da604fe0_52120882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59237909245811c61f0a5789f89eeb392f307681' => 
    array (
      0 => 'D:\\WWW\\marketing\\admin\\templates\\nav.htm',
      1 => 1501815405,
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
function content_59a683da604fe0_52120882 (Smarty_Internal_Template $_smarty_tpl) {
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
      <h3><a href="<?php echo $_smarty_tpl->tpl_vars['action_link']->value['href'];?>
" class="actionBtn"><?php echo $_smarty_tpl->tpl_vars['action_link']->value['text'];?>
</a><?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
</h3>
      <?php if ($_smarty_tpl->tpl_vars['rec']->value == 'default') {?>
      <div class="navList">
       <ul class="tab">
        <li><a href="nav.php"<?php if ($_smarty_tpl->tpl_vars['type']->value == 'middle') {?> class="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_type_middle'];?>
</a></li>
        <li><a href="nav.php?type=top"<?php if ($_smarty_tpl->tpl_vars['type']->value == 'top') {?> class="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_type_top'];?>
</a></li>
        <li><a href="nav.php?type=bottom"<?php if ($_smarty_tpl->tpl_vars['type']->value == 'bottom') {?> class="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_type_bottom'];?>
</a></li>
      </ul>
      <table width="100%" border="0" cellpadding="10" cellspacing="0" class="tableBasic">
        <tr>
         <th width="113" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_name'];?>
</th>
         <th align="left"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_link'];?>
</th>
         <th width="80" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sort'];?>
</th>
         <th width="120" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['handler'];?>
</th>
       </tr>
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav_list']->value, 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
?>
       <tr>
         <td><?php echo $_smarty_tpl->tpl_vars['nav']->value['mark'];?>
 <?php echo $_smarty_tpl->tpl_vars['nav']->value['nav_name'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['nav']->value['guide'];?>
</td>
         <td align="center"><?php echo $_smarty_tpl->tpl_vars['nav']->value['sort'];?>
</td>
         <td align="center"><a href="nav.php?rec=edit&id=<?php echo $_smarty_tpl->tpl_vars['nav']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
</a> | <a href="nav.php?rec=del&id=<?php echo $_smarty_tpl->tpl_vars['nav']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['del'];?>
</a></td>
       </tr>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

     </table>
   </div>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['rec']->value == 'add') {?>
   <?php echo '<script'; ?>
 type="text/javascript">
     
     $(function(){ $(".idTabs").idTabs(); });
     
   <?php echo '</script'; ?>
>
   <div class="idTabs">
    <ul class="tab">
      <li><a href="#nav_add"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_inside'];?>
</a></li>
      <li><a href="#nav_defined"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_defined'];?>
</a></li>
    </ul>
    <div class="items">
      <div id="nav_add">
       <form action="nav.php?rec=insert" method="post">
        <table width="100%" border="0" cellpadding="5" cellspacing="1" class="tableBasic">
         <tr>
          <td width="80" height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_system'];?>
</td>
          <td>
           <select name="nav_menu" onchange="change('nav_name', this)">
            <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_menu'];?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalog']->value, 'log');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['log']->value['module'];?>
,<?php echo $_smarty_tpl->tpl_vars['log']->value['guide'];?>
"<?php if ($_smarty_tpl->tpl_vars['log']->value['cur']) {?> selected="selected"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['log']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['log']->value['mark'];?>
 <?php echo $_smarty_tpl->tpl_vars['log']->value['name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </select>
        </td>
      </tr>
      <tr>
        <td width="80" height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_name'];?>
</td>
        <td>
         <input type="text" id="nav_name" name="nav_name" value="" size="40" class="inpMain" />
       </td>
     </tr>
     <tr>
      <td height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_type'];?>
</td>
      <td>
       <label for="type_0">
        <input type="radio" name="type" id="type_0" value="middle" checked="true" onChange="dou_callback('nav.php?rec=nav_select&id=<?php echo $_smarty_tpl->tpl_vars['nav_info']->value['id'];?>
', 'type', this.value, 'parent')">
        <?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_type_middle'];?>
</label>
        <label for="type_1">
          <input type="radio" name="type" id="type_1" value="top" onChange="dou_callback('nav.php?rec=nav_select&id=<?php echo $_smarty_tpl->tpl_vars['nav_info']->value['id'];?>
', 'type', this.value, 'parent')">
          <?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_type_top'];?>
</label>
          <label for="type_2">
            <input type="radio" name="type" id="type_2" value="bottom" onChange="dou_callback('nav.php?rec=nav_select&id=<?php echo $_smarty_tpl->tpl_vars['nav_info']->value['id'];?>
', 'type', this.value, 'parent')">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_type_bottom'];?>
</label>
          </td>
        </tr>
        <tr>
          <td height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['parent'];?>
</td>
          <td id="parent">
           <select name="parent_id">
            <option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['empty'];?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav_list']->value, 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['nav']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['mark'];?>
 <?php echo $_smarty_tpl->tpl_vars['nav']->value['nav_name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </select>
        </td>
      </tr>
      <tr>
        <td height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sort'];?>
</td>
        <td>
         <input type="text" name="sort" value="50" size="5" class="inpMain" />
       </td>
     </tr>
     <tr>
      <td></td>
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
<div id="nav_defined">
 <form action="nav.php?rec=insert" method="post">
  <table width="100%" border="0" cellpadding="5" cellspacing="1" class="tableBasic">
   <tr>
    <td width="80" height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_name'];?>
</td>
    <td>
     <input type="text" name="nav_name" value="" size="40" class="inpMain" />
   </td>
 </tr>
 <tr>
  <td height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_type'];?>
</td>
  <td>
    <label for="type_0">
      <input type="radio" name="type" id="type_0" value="middle" checked="true" onChange="dou_callback('nav.php?rec=nav_select&id=<?php echo $_smarty_tpl->tpl_vars['nav_info']->value['id'];?>
', 'type', this.value, 'parent_external')">
      <?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_type_middle'];?>

    </label>
    <label for="type_1">
      <input type="radio" name="type" id="type_1" value="top" onChange="dou_callback('nav.php?rec=nav_select&id=<?php echo $_smarty_tpl->tpl_vars['nav_info']->value['id'];?>
', 'type', this.value, 'parent_external')">
      <?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_type_top'];?>

    </label>
    <label for="type_2">
      <input type="radio" name="type" id="type_2" value="bottom" onChange="dou_callback('nav.php?rec=nav_select&id=<?php echo $_smarty_tpl->tpl_vars['nav_info']->value['id'];?>
', 'type', this.value, 'parent_external')">
      <?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_type_bottom'];?>

    </label>
  </td>
</tr>
<tr>
  <td height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_link'];?>
</td>
  <td>
   <input type="text" name="guide" value="" size="80" class="inpMain" />
 </td>
</tr>
<tr>
  <td height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['parent'];?>
</td>
  <td id="parent_external">
   <select name="parent_id">
    <option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['empty'];?>
</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav_list']->value, 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['nav']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['mark'];?>
 <?php echo $_smarty_tpl->tpl_vars['nav']->value['nav_name'];?>
</option>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </select>
</td>
</tr>
<tr>
  <td height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sort'];?>
</td>
  <td>
   <input type="text" name="sort" value="50" size="5" class="inpMain" />
 </td>
</tr>
<tr>
  <td></td>
  <td>
   <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
   <input type="hidden" name="nav_menu" value="nav,0" />
   <input name="submit" class="btn" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['btn_submit'];?>
" />
 </td>
</tr>
</table>
</form>
</div>
</div>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['rec']->value == 'edit') {?>
<form action="nav.php?rec=update" method="post">
 <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
  <tr>
   <th colspan="2">&nbsp;</th>
 </tr>
 <?php if ($_smarty_tpl->tpl_vars['nav_info']->value['module'] != 'nav') {?>
 <tr>
   <td width="80" height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_system'];?>
</td>
   <td>
    <select name="nav_menu" onchange="change('nav_name', this)">
     <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_menu'];?>
</option>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalog']->value, 'log');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
?>
     <option value="<?php echo $_smarty_tpl->tpl_vars['log']->value['module'];?>
,<?php echo $_smarty_tpl->tpl_vars['log']->value['guide'];?>
"<?php if ($_smarty_tpl->tpl_vars['log']->value['cur']) {?> selected="selected"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['log']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['log']->value['mark'];?>
 <?php echo $_smarty_tpl->tpl_vars['log']->value['name'];?>
</option>
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

   </select>
 </td>
</tr>
<?php }?>
<tr>
 <td width="80" height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_name'];?>
</td>
 <td>
  <input type="text" id="nav_name" name="nav_name" value="<?php echo $_smarty_tpl->tpl_vars['nav_info']->value['nav_name'];?>
" size="40" class="inpMain" />
</td>
</tr>
<tr>
  <td height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_type'];?>
</td>
  <td>
   <label for="type_0">
     <input type="radio" name="type" id="type_0" value="middle"<?php if ($_smarty_tpl->tpl_vars['nav_info']->value['type'] == 'middle') {?> checked="true"<?php }?> onChange="dou_callback('nav.php?rec=nav_select&id=<?php echo $_smarty_tpl->tpl_vars['nav_info']->value['id'];?>
', 'type', this.value, 'parent')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_type_middle'];?>
</label>
     <label for="type_1">
       <input type="radio" name="type" id="type_1" value="top"<?php if ($_smarty_tpl->tpl_vars['nav_info']->value['type'] == 'top') {?> checked="true"<?php }?> onChange="dou_callback('nav.php?rec=nav_select&id=<?php echo $_smarty_tpl->tpl_vars['nav_info']->value['id'];?>
', 'type', this.value, 'parent')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_type_top'];?>
</label>
       <label for="type_2">
         <input type="radio" name="type" id="type_2" value="bottom"<?php if ($_smarty_tpl->tpl_vars['nav_info']->value['type'] == 'bottom') {?> checked="true"<?php }?> onChange="dou_callback('nav.php?rec=nav_select&id=<?php echo $_smarty_tpl->tpl_vars['nav_info']->value['id'];?>
', 'type', this.value, 'parent')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_type_bottom'];?>
</label>
       </td>
     </tr>
     <tr>
       <td height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_link'];?>
</td>
       <td>
        <?php if ($_smarty_tpl->tpl_vars['nav_info']->value['module'] == 'nav') {?>
        <input type="text" name="guide" value="<?php echo $_smarty_tpl->tpl_vars['nav_info']->value['url'];?>
" size="60" class="inpMain" />
        <?php } else { ?>
        <input type="text" name="guide_no" value="<?php echo $_smarty_tpl->tpl_vars['nav_info']->value['url'];?>
" size="60" readOnly="true" class="inpMain" />
        <b class="cue"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_not_modify'];?>
</b>
        <?php }?>
      </td>
    </tr>
    <tr>
     <td height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['parent'];?>
</td>
     <td id="parent">
      <select name="parent_id">
       <option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['empty'];?>
</option>
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav_list']->value, 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
?>
       <option value="<?php echo $_smarty_tpl->tpl_vars['nav']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['nav']->value['id'] == $_smarty_tpl->tpl_vars['nav_info']->value['parent_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['nav']->value['mark'];?>
 <?php echo $_smarty_tpl->tpl_vars['nav']->value['nav_name'];?>
</option>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

     </select>
   </td>
 </tr>
 <tr>
   <td height="35" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sort'];?>
</td>
   <td>
    <input type="text" name="sort" value="<?php if ($_smarty_tpl->tpl_vars['nav_info']->value['sort']) {
echo $_smarty_tpl->tpl_vars['nav_info']->value['sort'];
} else { ?>50<?php }?>" size="5" class="inpMain" />
  </td>
</tr>
<tr>
 <td></td>
 <td>
  <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
  <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['nav_info']->value['id'];?>
" />
  <input name="submit" class="btn" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['btn_submit'];?>
" />
</td>
</tr>
</table>
</form>
<?php }?>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
</body>
</html><?php }
}
