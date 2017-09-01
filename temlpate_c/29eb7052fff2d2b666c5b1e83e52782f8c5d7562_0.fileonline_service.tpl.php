<?php
/* Smarty version 3.1.30, created on 2017-08-31 16:37:39
  from "D:\WWW\marketing\theme\default\inc\online_service.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a7cad3ee5192_18657148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29eb7052fff2d2b666c5b1e83e52782f8c5d7562' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\inc\\online_service.tpl',
      1 => 1504168643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a7cad3ee5192_18657148 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="fixedBox">
  <style>
    
    .fixed-frame .text{font-size:16px;color:#000;} 
    .frame-box{ text-align: center;clear: both; }
    .box{float:left;width:100%;position: relative;margin-bottom: 10px;}
    .fixed-frame .tel {float:left;display:block;width:100%;padding-bottom:10px;color:#c8003c;font-size:14px;font-weight: bold; } 
    .fixed-frame .btn { display: block; width: 110px; height: 35px; line-height: 35px; border-radius: 7px; border:1px #B2B0B0 solid; background: #fff; color: #000; text-align: center; margin: 10px auto; }
    .fixed-frame img{display:block;margin:2px auto;}
    .fixed-frame div,.fixed-frame a{text-align:center;}
    
  </style>
  <div id="fixed" class="fixed-frame fixed">
    <div class="box">
      <div class="text">联系电话</div>
    </div>
    <a href="tel:4008-315-002" class="tel"><?php echo $_smarty_tpl->tpl_vars['site']->value['tel'];?>
</a>
    <div class="text">营销咨询</div>
    <img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
picture/icocode1.png" alt="客服"/>
    <div class="text">智库咨询</div>
    <img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
picture/icocode2.png" alt="客服"/>
  </div>
</div><?php }
}
