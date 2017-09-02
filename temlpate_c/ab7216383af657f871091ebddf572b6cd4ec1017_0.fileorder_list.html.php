<?php
/* Smarty version 3.1.30, created on 2017-09-02 17:53:39
  from "D:\WWW\marketing\theme\default\user\order_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aa7fa30d74e7_53018845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab7216383af657f871091ebddf572b6cd4ec1017' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\user\\order_list.html',
      1 => 1504345910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head.tpl' => 1,
    'file:inc/header.tpl' => 1,
    'file:inc/pager.tpl' => 1,
    'file:inc/footer.tpl' => 1,
  ),
),false)) {
function content_59aa7fa30d74e7_53018845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inc/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
css/goodsList.css"/>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
js/pagination.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
js/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>

<body onload="goodsList();" data-val="7826d00ab11b434f87fd3adae68cb80a">
    <?php $_smarty_tpl->_subTemplateRender("file:inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="page-content">
        <div class="usercenter_page">
            <div class="usercenter_tag">
                <ul>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['user'];?>
"><em></em>基本信息</a></li>
                    <li class="active"><a href="user.php?rec=order_list"><em></em>我的订单</a></li>
                    <li><a href="user.php?rec=logout"><em></em>退出登录</a></li>
                </ul>
            </div>
            <div class="usercenter_content usercenter_demand">
                <div class="goodsListTitle">我的订单</div>
                <div class="goodsListPurchase">已购买</div>
                <ul class="goodsList">
                    <li class="goodsListItem">
                       <span class="goodsListItem2">订单号</span>
                       <span class="goodsListItem3">价格</span>
                       <span class="goodsListItem1">下单时间</span>
                       <span class="goodsListItem3">状态</span>
                       <span class="goodsListItem3">操作</span>
                   </li>
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_list']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
                   <li class="goodsListItem">
                       <span class="goodsListItem1"><?php echo $_smarty_tpl->tpl_vars['order']->value['order_sn'];?>
</span>
                       <span class="goodsListItem3"><?php echo $_smarty_tpl->tpl_vars['order']->value['order_amount_format'];?>
</span>
                       <span class="goodsListItem2"><?php echo $_smarty_tpl->tpl_vars['order']->value['add_time'];?>
</span>
                       <span class="goodsListItem3"><?php echo $_smarty_tpl->tpl_vars['order']->value['status_format'];?>
</span>
                       <span class="goodsListItem3"><?php if (!$_smarty_tpl->tpl_vars['order']->value['status']) {?><a href="order">付款 /</a><?php }?><a href="del"> 删除</a></span>
                   </li>
                   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

               </ul>
            <!-- 未购买 -->
			<!--  <div class="goodsListStatus">
				<img src="../../resources/bootstrap/img/statusBg.png">
				<div class="text">您暂时没有订单</div>
				<a href="../../package/page.shtml.html"><div class="goodsListBtn">去看看</div></a>
            </div> -->
            <ul class="user_demand">
            	
            </ul>
            <?php $_smarty_tpl->_subTemplateRender("file:inc/pager.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
