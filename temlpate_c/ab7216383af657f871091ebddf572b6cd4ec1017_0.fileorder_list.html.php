<?php
/* Smarty version 3.1.30, created on 2017-08-31 18:10:33
  from "D:\WWW\marketing\theme\default\user\order_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a7e099db7937_22345373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab7216383af657f871091ebddf572b6cd4ec1017' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\user\\order_list.html',
      1 => 1504173436,
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
function content_59a7e099db7937_22345373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inc/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/css/goodsList.css"/>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/js/pagination.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/js/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>

<body onload="goodsList();" data-val="7826d00ab11b434f87fd3adae68cb80a">
    <?php $_smarty_tpl->_subTemplateRender("file:inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="page-content">
        <div class="usercenter_page">
            <div class="usercenter_tag">
                <ul>
                    <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['user'];?>
"><em></em>基本信息</a></li>	
                    <li><a href="user.php?rec=order_list"><em></em>我的订单</a></li> 
                    <li><a href="user.php?rec=logout"><em></em>退出登录</a></li>
                </ul>
            </div>
            <div class="usercenter_content usercenter_demand">
                <div class="goodsListTitle">我的订单</div>
                <div class="goodsListPurchase">已购买</div>
                <ul class="goodsList">
                    <li class="goodsListItem">
                       <span class="goodsListItem1">时间</span>
                       <span class="goodsListItem2">商品</span>
                       <span class="goodsListItem3">价格</span>
                   </li>
                   
                   <li class="goodsListItem">
                       <span class="goodsListItem1">2017-04-02</span>
                       <span class="goodsListItem2">商品商品商品商品商品商品</span>
                       <span class="goodsListItem3">￥1,000</span>
                   </li>
                   <li class="goodsListItem">
                       <span class="goodsListItem1">2017-04-02</span>
                       <span class="goodsListItem2">商品商品商品商品商品商品</span>
                       <span class="goodsListItem3">￥1,000</span>
                   </li>
                   <li class="goodsListItem">
                       <span class="goodsListItem1">2017-04-02</span>
                       <span class="goodsListItem2">商品商品商品商品商品商品</span>
                       <span class="goodsListItem3">￥1,000</span>
                   </li>
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
