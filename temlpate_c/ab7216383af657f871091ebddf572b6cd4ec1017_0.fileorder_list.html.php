<?php
/* Smarty version 3.1.30, created on 2017-09-04 12:06:20
  from "D:\WWW\marketing\theme\default\user\order_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59acd13cc107b9_54187106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab7216383af657f871091ebddf572b6cd4ec1017' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\user\\order_list.html',
      1 => 1504497978,
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
function content_59acd13cc107b9_54187106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inc/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
css/goodsList.css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
css/doubox.css"/>
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
                <?php if ($_smarty_tpl->tpl_vars['order_list']->value) {?>
                <!-- <div class="goodsListPurchase">已购买</div> -->
                <table class="goodsList">
                    <thead align="left">
                        <tr>
                            <th>订单号</th>
                            <th>价格</th>
                            <th>下单时间</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody align="left">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_list']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['order_sn'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['order_amount_format'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['add_time'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['status_format'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['order']->value['order_type'] != 1) {?><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['order'];?>
&order_sn=<?php echo $_smarty_tpl->tpl_vars['order']->value['order_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['order_view_btn'];?>
</a><?php }?>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <?php if ($_smarty_tpl->tpl_vars['order']->value['status'] == '0') {?>
                                    <a href="javascript:void(0)" onclick="douBox('<?php echo $_smarty_tpl->tpl_vars['url']->value['order_cancel'];?>
&order_sn=<?php echo $_smarty_tpl->tpl_vars['order']->value['order_sn'];?>
')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['order_cancel'];?>
</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php if ($_smarty_tpl->tpl_vars['order']->value['if_payment']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['order']->value['order_type'] == 1) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['order']->value['payment']) {?><span class="payment"><?php echo $_smarty_tpl->tpl_vars['order']->value['payment'];?>
</span><?php }
echo $_smarty_tpl->tpl_vars['order']->value['pay_name'];?>

                                        <?php } else { ?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['order'];?>
&order_sn=<?php echo $_smarty_tpl->tpl_vars['order']->value['order_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['order_payment_btn'];?>
</a>
                                        <?php }?>
                                    <?php }?>
                                <?php }?>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </tbody>
                </table>
                <?php } else { ?>
                <!-- 未购买 -->
                <div class="goodsListStatus">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
img/statusBg.png">
                    <div class="text">您暂时没有订单</div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['product'];?>
"><div class="goodsListBtn">去看看</div></a>
                </div>
                <?php }?>
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
