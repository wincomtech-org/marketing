<?php
/* Smarty version 3.1.30, created on 2017-09-07 15:36:32
  from "D:\WWW\marketing\theme\default\inc\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b0f70003cea2_04551217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daedac52b7ef804c7e5ec1dcf556393d780dd0e3' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\inc\\header.tpl',
      1 => 1504681985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b0f70003cea2_04551217 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="fixedTop" style="position:relative"></div>

<div class="head">
    <div class="logo">
        <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['root_url'];?>
"><img src="theme/default/sys/<?php echo $_smarty_tpl->tpl_vars['site']->value['site_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"></a>
    </div>
    <ul class="nav">
        <li<?php if ($_smarty_tpl->tpl_vars['index']->value['cur']) {?> class="cur"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['root_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home'];?>
</a></li>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav_middle_list']->value, 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
?>
        <li<?php if ($_smarty_tpl->tpl_vars['nav']->value['cur']) {?> class="cur hover"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['nav_name'];?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
        <?php if ($_smarty_tpl->tpl_vars['open']->value['user']) {?>
        <!-- 登录后 -->
        <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
        <div class="getInto">
            <div class="right-btn1">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['user'];?>
"><img alt="123" src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
resetImg/ico21.png"></a>
                <span><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</span>
                <div class="user_list">
                    <span><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
resetImg/list_up.png"></span>
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['user'];?>
"><em class="list1"></em>个人中心</a><div style="clear:both"></div></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['logout'];?>
"><em class="list3"></em><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_logout'];?>
</a><div style="clear:both"></div></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php } else { ?>
        <div class="getInto2">
            <div class="right-btn1">
                <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['root_url'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_login_nav'];?>
</span> / <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_register_nav'];?>
</span></a>
            </div>
        </div>
        <?php }?>
        <?php }?>
    <div style="clear:both"></div>
</div>

<hr style="margin:0;padding:0;">

<?php echo '<script'; ?>
>
    
    $('.nav_a').mouseover(function(){
        $('.nav_a_hover').removeClass("nav_a_hover");
        $(this).addClass("nav_a_hover");
    })
    $('.nav_a').click(function(){
        if($('.getInto img:eq(0)').attr("src")){
            window.location.href=$(this).attr('tolink');
        }else{
            localStorage.setItem("block_num",$(this).attr('tolink'));
            window.location.href=url
        }
    })
    $('.user_list li:eq(2)').click(function(){
        localStorage.setItem('block_num','')
    })
    setTimeout(function(){
        $('.fixedTop').css('display','none');
    },5000)
    
<?php echo '</script'; ?>
><?php }
}
