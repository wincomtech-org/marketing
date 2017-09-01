<?php
/* Smarty version 3.1.30, created on 2017-08-31 15:47:31
  from "D:\WWW\marketing\theme\default\package\page_info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a7bf13c02973_20180004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eab876212e0ee7ff7cdae380c147924fc197c912' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\package\\page_info.html',
      1 => 1504165643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head.tpl' => 1,
    'file:inc/online_service.tpl' => 1,
    'file:inc/header.tpl' => 1,
    'file:inc/footer.tpl' => 1,
  ),
),false)) {
function content_59a7bf13c02973_20180004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inc/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/css/reset.css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/css/preferentiallist.css"/>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/js/pagination.js"><?php echo '</script'; ?>
>
<!-- <?php echo '<script'; ?>
 type="text/javascript" src="../../s.union.360.cn/164203.js" async defer><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/164203.js" async defer><?php echo '</script'; ?>
> -->
 
<body data-val="">
    <?php $_smarty_tpl->_subTemplateRender("file:inc/online_service.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="preferentialList" style="margin:60px auto">
        <div class="moduleBox">
            <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" class="preferentialImg" alt="">
            <div class="contentText">
                <div class="title">【<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
】</div>
                <div class="consult">咨询人数：<label><?php echo $_smarty_tpl->tpl_vars['product']->value['click'];?>
</label></div>
                <div class="preferentialText"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                <div class="serveText">服务原价</div>
                <del class="originalCost"><?php echo $_smarty_tpl->tpl_vars['product']->value['market_price'];?>
</del>
                <div class="serveText">我的价格</div>
                <div class="currentPrice prePrice" data-val="25000.00"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</div>
                <div class="currentPrice" id="packageId" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
</div>
                <div class="purchasebtn" id="buynow">立即购买</div>
            </div>
        </div>
        <div class="describeText">
            <div class="describeTitle">服务描述:</div>
            <div class="describeContent">
                <?php echo $_smarty_tpl->tpl_vars['product']->value['content'];?>

            </div>
        </div>
        <div class="b"></div>
        <!-- 出现一个弹层 -->
        <?php echo '<script'; ?>
 type="text/javascript">
            var guid = '<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
',
                token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
            
            $('#buynow').click(function() {
                if (!guid) {alert('请登录之后再进行购买等操作！');return false;}
                var packageId = $('#packageId').html();
                window.location.href = 'order.php?rec=success_virtual&packageId='+packageId+'&token='+token;
            });
            
        <?php echo '</script'; ?>
>
        <div class="sb"></div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
