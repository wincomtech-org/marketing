<?php
/* Smarty version 3.1.30, created on 2017-08-31 14:15:10
  from "D:\WWW\marketing\admin\templates\plugin.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a7a96e874aa9_77871709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3335b2ae34ccfe04c36900ca6bdfa2a932df749b' => 
    array (
      0 => 'D:\\WWW\\marketing\\admin\\templates\\plugin.htm',
      1 => 1501745263,
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
function content_59a7a96e874aa9_77871709 (Smarty_Internal_Template $_smarty_tpl) {
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
   <?php if ($_smarty_tpl->tpl_vars['rec']->value == 'default') {?>
   <h3><?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
</h3>
   <ul class="tab">
    <li><a href="plugin.php" class="selected"><?php echo $_smarty_tpl->tpl_vars['lang']->value['plugin_list'];?>
</a></li>
    <li><a href="plugin.php?rec=install"><?php echo $_smarty_tpl->tpl_vars['lang']->value['plugin_install'];
if ($_smarty_tpl->tpl_vars['unum']->value['theme']) {?><span class="unum"><span><?php echo $_smarty_tpl->tpl_vars['unum']->value['theme'];?>
</span></span><?php }?></a></li>
   </ul>
   <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
    <tr>
     <th width="100" align="left"><?php echo $_smarty_tpl->tpl_vars['lang']->value['plugin_name'];?>
</th>
     <th align="left"><?php echo $_smarty_tpl->tpl_vars['lang']->value['plugin_description'];?>
</th>
     <th width="60" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['plugin_ver'];?>
</th>
     <th width="80" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['handler'];?>
</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugin_list']->value, 'plugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
?>
    <tr <?php if ($_smarty_tpl->tpl_vars['plugin']->value['if_read'] == '0') {?>class="unread"<?php }?>>
     <td valign="top"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['name'];?>
</td>
     <td valign="top"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['description'];?>
</td>
     <td align="center" valign="top"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['ver'];?>
</td>
     <td align="center" valign="top">
      <?php if ($_smarty_tpl->tpl_vars['plugin']->value['enabled']) {?>
      <a href="plugin.php?rec=disable&unique_id=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['unique_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['plugin_disable'];?>
</a> | <a href="plugin.php?rec=edit&unique_id=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['unique_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
</a>
      <?php } else { ?>
      <a href="plugin.php?rec=enable&unique_id=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['unique_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['plugin_enable_btn'];?>
</a> | <a href="plugin.php?rec=del&unique_id=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['unique_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['del'];?>
</a>
      <?php }?>
     </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

   </table>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['rec']->value == 'install') {?>
   <h3><?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
</h3>
   <ul class="tab">
    <li><a href="plugin.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['plugin_list'];?>
</a></li>
    <li><a href="plugin.php?rec=install" class="selected"><?php echo $_smarty_tpl->tpl_vars['lang']->value['plugin_install'];?>
</a></li>
   </ul>
   <div class="selector"></div>
   <div class="cloudList">
   </div>
   <?php echo '<script'; ?>
 type="text/javascript">get_cloud_list('plugin', '<?php echo $_smarty_tpl->tpl_vars['get']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['localsite']->value;?>
')<?php echo '</script'; ?>
>
   <div class="pager"></div>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['rec']->value == 'enable' || $_smarty_tpl->tpl_vars['rec']->value == 'edit') {?>
   <h3><a href="<?php echo $_smarty_tpl->tpl_vars['action_link']->value['href'];?>
" class="actionBtn"><?php echo $_smarty_tpl->tpl_vars['action_link']->value['text'];?>
</a><?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
</h3>
   <form action="plugin.php?rec=<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" method="post">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <td width="90" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['plugin_name'];?>
</td>
      <td>
       <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['name'];?>
" size="50" class="inpMain" />
      </td>
     </tr>
     <tr>
      <td width="90" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['plugin_description'];?>
</td>
      <td>
       <textarea name="description" cols="70" rows="5" class="textArea" /><?php echo $_smarty_tpl->tpl_vars['plugin']->value['description'];?>
</textarea>
      </td>
     </tr>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugin']->value['config'], 'config');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['config']->value) {
?>
     <tr>
      <td align="right"><?php echo $_smarty_tpl->tpl_vars['config']->value['name'];?>
</td>
      <td>
       <?php if ($_smarty_tpl->tpl_vars['config']->value['type'] == 'select') {?>
       <select name="config[<?php echo $_smarty_tpl->tpl_vars['config']->value['field'];?>
]">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['config']->value['option'], 'value', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['config']->value['value'] == $_smarty_tpl->tpl_vars['value']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

       </select>
       <?php } elseif ($_smarty_tpl->tpl_vars['config']->value['type'] == 'textarea') {?>
       <textarea name="config[<?php echo $_smarty_tpl->tpl_vars['config']->value['field'];?>
]" cols="70" rows="5" class="textArea" /><?php echo $_smarty_tpl->tpl_vars['config']->value['value'];?>
</textarea>
       <?php } else { ?>
       <input type="text" name="config[<?php echo $_smarty_tpl->tpl_vars['config']->value['field'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['value'];?>
" size="50" class="inpMain" />
       <?php }?>
       <?php if ($_smarty_tpl->tpl_vars['config']->value['desc']) {?> <p class="cue"><?php echo $_smarty_tpl->tpl_vars['config']->value['desc'];?>
</p><?php }?>
      </td>
     </tr>
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

     <tr>
      <td></td>
      <td>
       <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
       <input type="hidden" name="unique_id" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['unique_id'];?>
">
       <input type="hidden" name="plugin_group" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['plugin_group'];?>
">
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
