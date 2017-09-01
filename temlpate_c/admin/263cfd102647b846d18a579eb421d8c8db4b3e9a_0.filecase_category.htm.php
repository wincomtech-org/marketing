<?php
/* Smarty version 3.1.30, created on 2017-08-30 17:02:40
  from "D:\WWW\marketing\admin\templates\case_category.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a67f30c64c13_26593293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '263cfd102647b846d18a579eb421d8c8db4b3e9a' => 
    array (
      0 => 'D:\\WWW\\marketing\\admin\\templates\\case_category.htm',
      1 => 1501745266,
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
function content_59a67f30c64c13_26593293 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h3><a href="<?php echo $_smarty_tpl->tpl_vars['action_link']->value['href'];?>
" class="actionBtn add"><?php echo $_smarty_tpl->tpl_vars['action_link']->value['text'];?>
</a><?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
        <th width="120" align="left"><?php echo $_smarty_tpl->tpl_vars['lang']->value['case_category_name'];?>
</th>
      <th align="left"><?php echo $_smarty_tpl->tpl_vars['lang']->value['unique'];?>
</th>
        <th align="left"><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
</th>
       <th width="60" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sort'];?>
</th>
        <th width="80" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['handler'];?>
</th>
      </tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['case_category']->value, 'cate');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->value) {
?>
      <tr>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['cate']->value['mark'];?>
 <a href="case.php?cat_id=<?php echo $_smarty_tpl->tpl_vars['cate']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value['cat_name'];?>
</a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['cate']->value['unique_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['cate']->value['description'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['cate']->value['sort'];?>
</td>
        <td align="center"><a href="case_category.php?rec=edit&cat_id=<?php echo $_smarty_tpl->tpl_vars['cate']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
</a> | <a href="case_category.php?rec=del&cat_id=<?php echo $_smarty_tpl->tpl_vars['cate']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['del'];?>
</a></td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['rec']->value == 'add' || $_smarty_tpl->tpl_vars['rec']->value == 'edit') {?>
    <h3><a href="<?php echo $_smarty_tpl->tpl_vars['action_link']->value['href'];?>
" class="actionBtn"><?php echo $_smarty_tpl->tpl_vars['action_link']->value['text'];?>
</a><?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
</h3>
    <form action="case_category.php?rec=<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" method="post">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="80" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['case_category_name'];?>
</td>
       <td>
        <input type="text" name="cat_name" value="<?php echo $_smarty_tpl->tpl_vars['cat_info']->value['cat_name'];?>
" size="40" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['unique'];?>
</td>
       <td>
        <input type="text" name="unique_id" value="<?php echo $_smarty_tpl->tpl_vars['cat_info']->value['unique_id'];?>
" size="40" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['parent'];?>
</td>
       <td>
        <select name="parent_id">
         <option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['empty'];?>
</option>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['case_category']->value, 'cate');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->value) {
?>
         <?php if ($_smarty_tpl->tpl_vars['cate']->value['cat_id'] == $_smarty_tpl->tpl_vars['cat_info']->value['parent_id']) {?>
         <option value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['cat_id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['cate']->value['mark'];?>
 <?php echo $_smarty_tpl->tpl_vars['cate']->value['cat_name'];?>
</option>
         <?php } else { ?>
         <option value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value['mark'];?>
 <?php echo $_smarty_tpl->tpl_vars['cate']->value['cat_name'];?>
</option>
         <?php }?>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
       </td>
      </tr>
      <tr>
       <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['keywords'];?>
</td>
       <td>
        <input type="text" name="keywords" value="<?php echo $_smarty_tpl->tpl_vars['cat_info']->value['keywords'];?>
" size="40" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
</td>
       <td>
        <textarea name="description" cols="60" rows="4" class="textArea"><?php echo $_smarty_tpl->tpl_vars['cat_info']->value['description'];?>
</textarea>
       </td>
      </tr>
      <tr>
       <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sort'];?>
</td>
       <td>
        <input type="text" name="sort" value="<?php if ($_smarty_tpl->tpl_vars['cat_info']->value['sort']) {
echo $_smarty_tpl->tpl_vars['cat_info']->value['sort'];
} else { ?>50<?php }?>" size="5" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td></td>
       <td>
        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
        <input type="hidden" name="cat_id" value="<?php echo $_smarty_tpl->tpl_vars['cat_info']->value['cat_id'];?>
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
