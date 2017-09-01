<?php
/* Smarty version 3.1.30, created on 2017-08-30 17:02:32
  from "D:\WWW\marketing\admin\templates\case.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a67f288bd525_48610150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1e61ec4a5c0e0c7d4d66e204fe57b0a2ef1a145' => 
    array (
      0 => 'D:\\WWW\\marketing\\admin\\templates\\case.htm',
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
    'file:pager.htm' => 1,
    'file:footer.htm' => 1,
  ),
),false)) {
function content_59a67f288bd525_48610150 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript" src="images/jquery.autotextarea.js"><?php echo '</script'; ?>
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
    <?php if ($_smarty_tpl->tpl_vars['rec']->value == 'default') {?>
    <h3><a href="<?php echo $_smarty_tpl->tpl_vars['action_link']->value['href'];?>
" class="actionBtn add"><?php echo $_smarty_tpl->tpl_vars['action_link']->value['text'];?>
</a><?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
</h3>
    <div class="filter">
    <form action="case.php" method="post">
     <select name="cat_id">
      <option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['uncategorized'];?>
</option>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['case_category']->value, 'cate');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['cate']->value['cat_id'] == $_smarty_tpl->tpl_vars['cat_id']->value) {?>
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
     <input name="keyword" type="text" class="inpMain" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" size="20" />
     <input name="submit" class="btnGray" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['btn_filter'];?>
" />
    </form>
    <span>
    <?php if ($_smarty_tpl->tpl_vars['if_sort']->value) {?>
    <a class="btnGray" href="case.php?rec=sort"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sort_close'];?>
</a>
    <?php } else { ?>
    <a class="btnGray" href="case.php?rec=sort"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sort_case'];?>
</a>
    <?php }?>
    </span>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['if_sort']->value) {?>
    <div class="homeSortRight">
     <ul class="homeSortBg">
      <?php echo $_smarty_tpl->tpl_vars['sort_bg']->value;?>

     </ul>
     <ul class="homeSortList">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort']->value, 'case', false, NULL, 'sort', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['case']->value) {
?>
      <li>
       <em><?php echo $_smarty_tpl->tpl_vars['case']->value['title'];?>
</em>
       <a href="case.php?rec=del_sort&id=<?php echo $_smarty_tpl->tpl_vars['case']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['sort_cancel'];?>
">X</a>
      </li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

     </ul>
    </div>
    <?php }?>
    <div id="list"<?php if ($_smarty_tpl->tpl_vars['if_sort']->value) {?> class="homeSortLeft"<?php }?>>
    <form name="action" method="post" action="case.php?rec=action">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
      <th width="40" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['record_id'];?>
</th>
      <th align="left"><?php echo $_smarty_tpl->tpl_vars['lang']->value['case_name'];?>
</th>
      <th width="150" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['case_category'];?>
</th>
      <th width="80" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add_time'];?>
</th>
      <th width="80" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['handler'];?>
</th>
     </tr>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['case_list']->value, 'case');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['case']->value) {
?>
     <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="<?php echo $_smarty_tpl->tpl_vars['case']->value['id'];?>
" /></td>
      <td align="center"><?php echo $_smarty_tpl->tpl_vars['case']->value['id'];?>
</td>
      <td><a href="case.php?rec=edit&id=<?php echo $_smarty_tpl->tpl_vars['case']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['case']->value['title'];?>
</a><?php if ($_smarty_tpl->tpl_vars['case']->value['image']) {?> <a href="../<?php echo $_smarty_tpl->tpl_vars['case']->value['image'];?>
" target="_blank"><img src="images/icon_picture.png" width="16" height="16" align="absMiddle"></a><?php }?></td>
      <td align="center"><?php if ($_smarty_tpl->tpl_vars['case']->value['cat_name']) {?><a href="case.php?cat_id=<?php echo $_smarty_tpl->tpl_vars['case']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['case']->value['cat_name'];?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['lang']->value['uncategorized'];
}?></td>
      <td align="center"><?php echo $_smarty_tpl->tpl_vars['case']->value['add_time'];?>
</td>
      <td align="center">
       <?php if ($_smarty_tpl->tpl_vars['if_sort']->value) {?>
       <a href="case.php?rec=set_sort&id=<?php echo $_smarty_tpl->tpl_vars['case']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sort_btn'];?>
</a>
       <?php } else { ?>
       <a href="case.php?rec=edit&id=<?php echo $_smarty_tpl->tpl_vars['case']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
</a> | <a href="case.php?rec=del&id=<?php echo $_smarty_tpl->tpl_vars['case']->value['id'];?>
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
    <div class="action">
     <select name="action" onchange="douAction()">
      <option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['select'];?>
</option>
      <option value="del_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value['del'];?>
</option>
      <option value="category_move"><?php echo $_smarty_tpl->tpl_vars['lang']->value['category_move'];?>
</option>
     </select>
     <select name="new_cat_id" style="display:none">
      <option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['uncategorized'];?>
</option>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['case_category']->value, 'cate');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['cate']->value['cat_id'] == $_smarty_tpl->tpl_vars['cat_id']->value) {?>
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
     <input name="submit" class="btn" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['btn_execute'];?>
" />
    </div>
    </form>
    </div>
    <div class="clear"></div>
    <?php $_smarty_tpl->_subTemplateRender("file:pager.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['rec']->value == 'add' || $_smarty_tpl->tpl_vars['rec']->value == 'edit') {?>
    <h3><a href="<?php echo $_smarty_tpl->tpl_vars['action_link']->value['href'];?>
" class="actionBtn"><?php echo $_smarty_tpl->tpl_vars['action_link']->value['text'];?>
</a><?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
</h3>
    <form action="case.php?rec=<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" method="post" enctype="multipart/form-data">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['case_name'];?>
</td>
       <td>
        <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['case']->value['title'];?>
" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['case_category'];?>
</td>
       <td>
        <select name="cat_id">
         <option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['uncategorized'];?>
</option>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['case_category']->value, 'cate');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->value) {
?>
         <?php if ($_smarty_tpl->tpl_vars['cate']->value['cat_id'] == $_smarty_tpl->tpl_vars['case']->value['cat_id']) {?>
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
      <?php if ($_smarty_tpl->tpl_vars['case']->value['defined']) {?>
      <tr>
       <td align="right" valign="top"><?php echo $_smarty_tpl->tpl_vars['lang']->value['case_defined'];?>
</td>
       <td>
        <textarea name="defined" id="defined" cols="50" class="textAreaAuto" style="height:<?php echo $_smarty_tpl->tpl_vars['case']->value['defined_count'];?>
0px"><?php echo $_smarty_tpl->tpl_vars['case']->value['defined'];?>
</textarea>
        <?php echo '<script'; ?>
 type="text/javascript">
         
          $("#defined").autoTextarea({maxHeight:300});
         
        <?php echo '</script'; ?>
>
        </td>
      </tr>
      <?php }?>
      <tr>
       <td align="right" valign="top"><?php echo $_smarty_tpl->tpl_vars['lang']->value['case_content'];?>
</td>
       <td>
        <!-- KindEditor -->
        <?php echo '<script'; ?>
 charset="utf-8" src="include/kindeditor/kindeditor.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 charset="utf-8" src="include/kindeditor/lang/zh_CN.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
        
         var editor;
         KindEditor.ready(function(K) {
             editor = K.create('#content');
         });
        
        <?php echo '</script'; ?>
>
        <!-- /KindEditor -->
        <textarea id="content" name="content" style="width:780px;height:400px;" class="textArea"><?php echo $_smarty_tpl->tpl_vars['case']->value['content'];?>
</textarea>
       </td>
      </tr>
      <tr>
       <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['thumb'];?>
</td>
       <td>
        <input type="file" name="image" size="38" class="inpFlie" />
        <?php if ($_smarty_tpl->tpl_vars['case']->value['image']) {?><a href="../<?php echo $_smarty_tpl->tpl_vars['case']->value['image'];?>
" target="_blank"><img src="images/icon_yes.png"></a><?php } else { ?><img src="images/icon_no.png"><?php }?></td>
      </tr>
      <tr>
       <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['keywords'];?>
</td>
       <td>
        <input type="text" name="keywords" value="<?php echo $_smarty_tpl->tpl_vars['case']->value['keywords'];?>
" size="114" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
</td>
       <td>
        <textarea name="description" cols="115" rows="3" class="textArea" /><?php echo $_smarty_tpl->tpl_vars['case']->value['description'];?>
</textarea>
       </td>
      </tr>
      <tr>
       <td></td>
       <td>
        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['case']->value['id'];?>
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
 <?php echo '<script'; ?>
 type="text/javascript">
 
 onload = function()
 {
   document.forms['action'].reset();
 }

 function douAction()
 {
     var frm = document.forms['action'];

     frm.elements['new_cat_id'].style.display = frm.elements['action'].value == 'category_move' ? '' : 'none';
 }
 
 <?php echo '</script'; ?>
>
</body>
</html><?php }
}
