<?php
/* Smarty version 3.1.30, created on 2017-09-08 08:51:16
  from "D:\WWW\marketing\theme\default\user\shopcart.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b1e9847971c2_24071944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e6e0fb4ef457eebcf560cead93a98bbf47d3a02' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\user\\shopcart.html',
      1 => 1504769269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head.tpl' => 1,
    'file:inc/header.tpl' => 1,
    'file:inc/user_menu.tpl' => 1,
    'file:inc/footer.tpl' => 1,
  ),
),false)) {
function content_59b1e9847971c2_24071944 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inc/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
js/pagination.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
js/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>

<body >
    <?php $_smarty_tpl->_subTemplateRender("file:inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="page-content">
        <div class="usercenter_page">
            <?php $_smarty_tpl->_subTemplateRender("file:inc/user_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="usercenter_content usercenter_demand">
                <div class="shopCart"> 
                    <div class="shopCart-tab-main">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['checkout'];?>
" method="post">
                        <table class="cart-table" id="cart-table">  
                            <thead class="cart-head">   
                                <tr class="cart-head-th tabl-tr">   
                                    <th class="th th-chk tabl">    
                                        <input class="" id="selectAll" type="checkbox">
                                        <label for="selectAll">全选</label>
                                    </th>
                                    <th class="th th-logo tabl">LOGO</th> 
                                    <th class="th th-name tabl">名称</th> 
                                    <th class="th th-indust tabl">行业</th> 
                                    <th class="th th-area tabl">地区</th> 
                                    <th class="th th-fans tabl">粉丝数</th> 
                                    <th class="th th-price tabl">单价</th>
                                    <th class="th th-nums tabl">数量</th> 
                                    <th class="th th-total tabl">小计</th> 
                                    <th class="th th-delete tabl"><a id="delAll">操作</a></th> 
                                </tr>
                            </thead>    
                            <tbody class="cart-order">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carts']->value['list'], 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                <tr class="order-item tabl-tr">
                                    <td class="td td-chk tabl">
                                        <input class="slectBox" type="checkbox" name="idbox[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                                    </td>
                                    <td class="td td-logo tabl">
                                        <span class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"></span>
                                    </td>
                                    <td class="td td-name tabl"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
                                    <td class="td td-indust tabl"><?php echo $_smarty_tpl->tpl_vars['v']->value['industry'];?>
</td>
                                    <td class="td td-area tabl"><?php if ($_smarty_tpl->tpl_vars['v']->value['district']) {
echo $_smarty_tpl->tpl_vars['v']->value['district'];
} else { ?>全国<?php }?></td> 
                                    <td class="td td-fans tabl"><?php echo $_smarty_tpl->tpl_vars['v']->value['fans'];?>
</td>
                                    <td class="td td-price tabl"><?php echo $_smarty_tpl->tpl_vars['v']->value['price_normal'];?>
</td>
                                    <td class="td td-nums tabl"><?php echo $_smarty_tpl->tpl_vars['v']->value['number'];?>
</td>
                                    <td class="td td-total tabl">￥<span class="price-sum"><?php echo $_smarty_tpl->tpl_vars['v']->value['subtotal_normal'];?>
.00</span>元</td>
                                    <td class="td td-delete tabl">
                                        <a class="delete" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['del'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['del'];?>
</a>
                                    </td>
                                </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </tbody>    
                        </table>

                        <div class="shopcart_more">
                            <button type="button" id="more">点击加载更多</button>
                            <p class="jiazai"></p>
                        </div>
                        <div class="cart-foot">
                            <div class="cart-footer-money">
                                <div class="cart-total-amount tf">
                                    已选商品 <span class="total-amount" id="totalAmount">0</span>件商品
                                </div>
                                <div class="cart-total-price tf">
                                    总计：<span class="total-price" id="priceTotal">0.00</span>元
                                </div>
                                <div class="cart-pay tf">
                                    <!-- <input type="hidden" name="nums" value="0">
                                    <input type="hidden" name="amount" value="0"> -->
                                    <input class="btn" type="submit" value="结算">
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pagend" style="display:none"><?php echo $_smarty_tpl->tpl_vars['pagend']->value;?>
</div>

    <?php $_smarty_tpl->_subTemplateRender("file:inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
js/order.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        var href = '<?php echo $_smarty_tpl->tpl_vars['url']->value['cart'];?>
';
        
        $(document).delegate('#more','click',function(){
            var pagend = $('#pagend').html();
            $.ajax({
                url: href,
                type: 'POST',
                data:{p:pagend,ajax:true},
                dataType: 'json',
                success:function(data) {
                    if (data.nore) { $('#more').hide(); }
                    $('#pagend').html(data.end);
                    $('.cart-order').append(data.box);
                    if( $('#selectAll').is(":checked")){
                        $('.slectBox').attr('checked',true);
                        $('.slectBox').parent().parent().addClass('slectedbox');
                        total();
                    }
                }
            });
        });
        
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
