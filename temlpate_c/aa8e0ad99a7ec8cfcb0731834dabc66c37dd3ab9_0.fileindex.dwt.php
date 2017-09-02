<?php
/* Smarty version 3.1.30, created on 2017-09-01 17:57:52
  from "D:\WWW\marketing\theme\default\index.dwt" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a92f20ea7090_67321789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa8e0ad99a7ec8cfcb0731834dabc66c37dd3ab9' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\index.dwt',
      1 => 1504245697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head.tpl' => 1,
    'file:inc/header.tpl' => 1,
    'file:inc/footer.tpl' => 1,
  ),
),false)) {
function content_59a92f20ea7090_67321789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inc/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/resetCss/index.css"/>
<?php echo '<script'; ?>
 src="../static.geetest.com/static/tools/gt.js"><?php echo '</script'; ?>
>
<style>
    
    .caseShareBox1,.contentBox,.workerList,.shiftBox,.demandBox{cursor:pointer;}
    .caseShare .detailedText{height:26px;}
    .login .reg_p{margin:0;}
    .contentBox .title{line-height:36px;height:108px;white-space:normal;}
    
</style>

<body class="cover" style="background:none;">

    <div class="page-container">
        <?php $_smarty_tpl->_subTemplateRender("file:inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- <div id="popup-captcha"></div> -->
        <div id="banner">
            <?php if ($_smarty_tpl->tpl_vars['show_list']->value) {?>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['show_list']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>class="banner_li_active"<?php }?> data-val="<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
"></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
            <div id="banner_list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['show_list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['show_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['show_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['show_name'];?>
"/></a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            <?php }?>

            <!-- 登录注册 S -->
            <?php if (!$_smarty_tpl->tpl_vars['user']->value) {?>
            <div class="banner_pos">
                <div class="banner_pos_box">
                    <div class="banner_pos_box_h1">
                        <p class="active"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
picture/ico48.png" style="left:29px;">快速注册</p>
                        <p><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
picture/ico25.png" style="left:42px;">登录</p>
                        <div class="clear"></div>
                    </div>
                    <!-- 注册 -->
                    <div class="reg">
                        <form id="register" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['register_post'];?>
" method="post">
                        <span>
                            <i>手机</i>
                            <input type="text" name="telephone">
                            <p id="telephone" class="cue"></p>
                            <div class="clear"></div>
                        </span>
                        <?php if ($_smarty_tpl->tpl_vars['site']->value['captcha']) {?>
                        <span class="reg_v">
                            <i>验证码</i>
                            <input type="text" name="captcha" id="code" onkeyup="code_keyup()" placeholder="请在此输入图片验证码">
                            <a class="getCode"><img id="vcode" src="<?php echo $_smarty_tpl->tpl_vars['site']->value['root_url'];?>
captcha.php" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['captcha'];?>
" onClick="refreshimage()" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['captcha_refresh'];?>
"></a>
                            <div class="clear"></div>
                        </span>
                        <?php }?>
                        <span>
                            <i>密码</i>
                            <input type="password" name="password" id="password1">
                            <p id="password" class="cue"></p>
                            <div class="clear"></div>
                        </span>
                        <span>
                            <i>确认密码</i>
                            <input type="password" name="password_confirm" id="password2">
                            <p id="password_confirm" class="cue"></p>
                            <div class="clear"></div>
                        </span>
                        <p class="reg_p">
                            <label>
                                <input type="checkbox">
                                <em>√</em>
                            </label>
                            我同意
                            <a href="#">《服务条款》</a>
                            <a href="#">《保密协议》</a>
                            <a href="#">《法律公告及免责声明》</a>
                            <a href="#">《隐私条款》</a>
                            <div class="clear"></div>
                        </p>
                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
                        <button id="reg" onclick="register()"><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_register'];?>
</button>
                        </form>
                        <div class="clear"></div>
                    </div>
                    <!-- 用户登录 -->
                    <div class="login" style="display:none">
                        <form id="loginto" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['login_post'];?>
" method="post">
                        <span>
                            <i>用户名</i>
                            <input type="text" name="telephone" id="mobile">
                            <div class="clear"></div>
                        </span>
                        <span>
                            <i>密码</i>
                            <input type="password" name="password" id="password">
                            <div class="clear"></div>
                        </span>
                        <a class="forget_password" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['password_reset'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_password_reset'];?>
</a>
                        <div class="clear"></div>
                        <p class="reg_p">
                            <label>
                                <input type="checkbox">
                                <em>√</em>
                            </label>
                            我同意
                            <a href="#">《服务条款》</a>
                            <a href="#">《保密协议》</a>
                            <a href="#">《法律公告及免责声明》</a>
                            <a href="#">《隐私条款》</a>
                            <div class="clear"></div>
                        </p>
                        <input type="hidden" name="token2" value="<?php echo $_smarty_tpl->tpl_vars['token2']->value;?>
" />
                        <button id="login" onclick="douSubmit('loginto')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_login_btn'];?>
</button>
                        <!-- <button id="login" onclick="login()">登录</button> -->
                        </form>
                    </div>
                </div>
                <?php echo '<script'; ?>
>
                    
                    if(localStorage.getItem('block_num')!=''){
                        $('.reg').css('display','none');
                        $('.login').css('display','block')
                        $('.banner_pos_box_h1 p:eq(0)').removeClass('active')
                        $('.banner_pos_box_h1 p:eq(0)').find('img').attr('src',theme+'resources/bootstrap/resetImg/ico47.png')
                        $('.banner_pos_box_h1 p:eq(1)').find('img').attr('src',theme+'resources/bootstrap/resetImg/ico26.png')
                        $('.banner_pos_box_h1 p:eq(1)').addClass('active')
                    }
                    $(".banner_pos_box_h1 p").click(function(){
                        $(".banner_pos_box_h1 p").removeClass("active");
                        $(this).addClass("active")
                        if($(this).index()==0){
                            $('.reg').css("display",'block');
                            $('.login').css('display','none');
                            $(this).find('img').attr('src',theme+'resources/bootstrap/resetImg/ico48.png');
                            $(this).parent().find("p").not($(this)).find("img").attr('src',theme+'resources/bootstrap/resetImg/ico25.png');
                        }else{
                            $('.login').css('display','block');
                            $('.reg').css("display",'none');
                            $(this).find('img').attr('src',theme+'resources/bootstrap/resetImg/ico26.png');
                            $(this).parent().find("p").not($(this)).find("img").attr('src',theme+'resources/bootstrap/resetImg/ico47.png');
                        }
                    })
                    $('.reg span').click(function(){
                        $(this).find("input").focus()
                    })
                    $('.login span').click(function(){
                        $(this).find("input").focus()
                    })
                    $(".reg_p label").click(function(){
                        if($(this).css("background")=='rgb(255, 84, 84) none repeat scroll 0% 0% / auto padding-box border-box'){
                            $(this).css("background",'#ccc')
                            $(this).attr('tid',0)
                            return false;
                        }else{
                            $(this).css('background','#ff5454');
                            $(this).attr('tid',1)
                            return false;
                        }
                    })
                    if($('.getInto span:eq(0)').html()){
                        $('.banner_pos').css('display','none')
                    }
                    
                <?php echo '</script'; ?>
>
            </div>
            <?php }?>
            <!-- 登录注册 E -->

        </div>

        <div class="requirementBox" style="background:#f5f5f5;">
            <div class="requirementTitle">成功案例</div>
            <div class="requirementText">
                <span>更多案例</span>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['case'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/resetImg/more.png"></a>
                <div class="clear"></div>
            </div>
            <div class="changeTabBox">
                <div class="changeTab">
                    <div class="box">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recommend_case']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <div class="shiftBox" style="left: 0px; z-index: 3;" tid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" >
                            <div class="listContent" to="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
">
                                <div class="describeText">  
                                    <div class="changeTabTitle"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</div>
                                    <div class="briefText"><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</div>
                                </div>
                                <img class="listContentImg" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
">   
                            </div>
                        </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </div>
                </div>

                <div class="leftB"></div>
                <div class="rightB"></div>
            </div>
            <?php echo '<script'; ?>
>
                
                $('.changeTab .box').delegate('.shiftBox','click',function(){
                    window.location.href=$(this).attr('to')
                });
                var changeTab_num=0;
                var changeTab_z=1;
                $('.leftB').click(function(){
                    changeTab_num--;
                    if(changeTab_num==0){
                        changeTab_num=$('.shiftBox').length-1;
                    }
                    $('.shiftBox').eq(changeTab_num).css('zIndex',changeTab_z)
                    changeTab_z++
                })
                $('.rightB').click(function(){
                    changeTab_num++;
                    if(changeTab_num>=$('.shiftBox').length){
                        changeTab_num=0;
                    }
                    $('.shiftBox').eq(changeTab_num).css('zIndex',changeTab_z)
                    changeTab_z++;

                })
                
            <?php echo '</script'; ?>
>
            <div class="clear"></div>
        </div>

        <!-- 产品 S -->
        <div class="workerBox">
            <div class="requirementTitle" style="padding-top:60px;">热门营销包</div>
            <div class="requirementText" style="width:100px;">
                <span>更多</span>
                <a href="package/page_info.html"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/resetImg/more.png"></a>
                <div class="clear"></div>
            </div>
            <div class="workerListBox" >
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recommend_product']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <div class="workerList" to="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
">
                    <div class="nameText">【<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
】</div>
                    <div class="summaryText"><i><?php echo $_smarty_tpl->tpl_vars['v']->value['click'];?>
</i>人咨询</div>
                    <div class="content"><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</div>
                    <div class="scheduleText">参考价格<i><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</i></div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <div class="clear"></div>
            </div>
        </div>

        <!-- 新闻 -->
        <div class="bg">
            <div class="requirementBox1">
                <div class="requirementTitle">媒体报道</div>
                <div class="requirementText">
                    <span>查看更多</span>
                    <a href="report/page.shtml.html"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/resetImg/more.png"></a>
                    <div class="clear"></div>
                </div>
                
                <div id="news_append">
                    <?php
$__section_new_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_new']) ? $_smarty_tpl->tpl_vars['__smarty_section_new'] : false;
$__section_new_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['recommend_article']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_new_0_start = min(0, $__section_new_0_loop);
$__section_new_0_total = min(($__section_new_0_loop - $__section_new_0_start), 1);
$_smarty_tpl->tpl_vars['__smarty_section_new'] = new Smarty_Variable(array());
$__section_new_0_show = (bool) true ? $__section_new_0_total != 0 : false;
if ($__section_new_0_show) {
for ($__section_new_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_new']->value['index'] = $__section_new_0_start; $__section_new_0_iteration <= $__section_new_0_total; $__section_new_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_new']->value['index']++){
?>
                    <div class="caseShare caseShareBox1" to="<?php echo $_smarty_tpl->tpl_vars['recommend_article']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new']->value['index'] : null)]['url'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['recommend_article']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new']->value['index'] : null)]['image'];?>
">
                        <div class="detailedText"><?php echo $_smarty_tpl->tpl_vars['recommend_article']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new']->value['index'] : null)]['title'];?>
</div>
                    </div>
                    <?php
}
}
if ($__section_new_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_new'] = $__section_new_0_saved;
}
?>
                    <div class="contentShow">
                        <?php
$__section_new_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_new']) ? $_smarty_tpl->tpl_vars['__smarty_section_new'] : false;
$__section_new_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['recommend_article']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_new_1_start = min(1, $__section_new_1_loop);
$__section_new_1_total = min(($__section_new_1_loop - $__section_new_1_start), 1);
$_smarty_tpl->tpl_vars['__smarty_section_new'] = new Smarty_Variable(array());
if ($__section_new_1_total != 0) {
for ($__section_new_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_new']->value['index'] = $__section_new_1_start; $__section_new_1_iteration <= $__section_new_1_total; $__section_new_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_new']->value['index']++){
?>
                        <div class="contentBox" to="<?php echo $_smarty_tpl->tpl_vars['recommend_article']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new']->value['index'] : null)]['url'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['recommend_article']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new']->value['index'] : null)]['image'];?>
">
                            <div class="title"><?php echo $_smarty_tpl->tpl_vars['recommend_article']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new']->value['index'] : null)]['title'];?>
</div>
                            <div class="clear"></div>
                        </div>
                        <?php
}
}
if ($__section_new_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_new'] = $__section_new_1_saved;
}
?>
                        <div class="contentBox listBox">
                            <?php
$__section_new_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_new']) ? $_smarty_tpl->tpl_vars['__smarty_section_new'] : false;
$__section_new_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['recommend_article']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_new_2_start = min(2, $__section_new_2_loop);
$__section_new_2_total = min(($__section_new_2_loop - $__section_new_2_start), 6);
$_smarty_tpl->tpl_vars['__smarty_section_new'] = new Smarty_Variable(array());
if ($__section_new_2_total != 0) {
for ($__section_new_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_new']->value['index'] = $__section_new_2_start; $__section_new_2_iteration <= $__section_new_2_total; $__section_new_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_new']->value['index']++){
?>
                            <span to="<?php echo $_smarty_tpl->tpl_vars['recommend_article']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new']->value['index'] : null)]['url'];?>
" tid="<?php echo $_smarty_tpl->tpl_vars['recommend_article']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['recommend_article']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_new']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_new']->value['index'] : null)]['title'];?>
</span>
                            <?php
}
}
if ($__section_new_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_new'] = $__section_new_2_saved;
}
?>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php echo '<script'; ?>
 type="text/javascript">
        
        /*媒体*/
        $('.workerListBox').delegate('.workerList','click',function(){
            window.location.href=$(this).attr('to')
        });
        function code_keyup(){
            var pic_yz=$("#code").val();
            var mobile = $(".reg span:eq(0) input").val();
            if($("#code").val().length==4){
                if(!(/^1(3|4|5|7|8)\d{9}$/.test(mobile))){ 
                    alert("输入错误");  
                    return false; 
                }
                $.ajax({
                    url:url+"/user/send_code.shtml",
                    type:"post",
                    data:{
                        imgCode:pic_yz,
                        mobile:mobile
                    },
                    success:function(e){
                        if(e.code==0){
                            $("#code").val('')
                            $('.reg_v a').attr('onclick','');
                            $("#code").attr("onkeyup",'').attr('placeholder',"验证码1");
                            settime(60);
                            alert("验证码2");
                        }else{
                            alert(e.message)
                            ajax_picYZ();
                            $("#code").attr("placeholder","验证码3").attr("onkeyup","code_keyup()").val('');
                            $('.getCode').html('<img src="user/img.shtml">');
                            $('.getCode').click(function(){
                                ajax_picYZ();
                            });
                        }
                    }
                })
            }
        }
        function ajax_picYZ(){
            $.ajax({
                url:url+"/user/img.shtml",
                type:"post",
                success:function(e){
                    var data=new Date();
                    $('.getCode:eq(0) img').attr('src',url+"/user/img.shtml?"+data.getTime())
                }
            })
        }

        function settime(countdown){
            if (countdown == 0) {
                ajax_picYZ();
                $("#code").attr("placeholder","验证码4").attr("onkeyup","code_keyup()")
                $('.getCode').html('<img src="http://www.315pr.com/user/img.shtml">');
                $('.getCode').click(function(){
                    ajax_picYZ();
                });
                return false;
            }else{
                $('.getCode').html(countdown+'s');
                countdown--;
            }
            setTimeout(function() {
                settime(countdown);
            },1000)
        }
        $('.requirementBox1:eq(0)').delegate(".demandBox",'click',function(){
            window.location.href=url+"/demand/info-2.0-"+$(this).attr("tid")+"-2.shtml";
        })
        $('#news_append').delegate('.caseShare','click',function(){
            window.location.href=$(this).attr('to')
        }).delegate('.contentBox:eq(0)','click',function(){
            window.location.href=$(this).attr('to')
        }).delegate('.listBox span','click',function(){
            window.location.href=$(this).attr('to')
        })
        /* $('.forget_password').click(function(){
            $('.banner_pos_box').css("display",'none')
            $('.banner_pos_forget').css('display','block')
        }) */
        /* $('.icoBox').click(function(){
            $('.icoBox').find(".icoBox_pos").css("display","none")
            $(this).find(".icoBox_pos").css("display",'block');
        }) */
        var banner_num=0;
        var tim=null;
        $("#banner li").click(function(){
            clearInterval(tim)
            $("#banner li").removeClass("banner_li_active");
            $(this).addClass("banner_li_active");
            $('#banner_list').stop().animate({"left":(-100*$(this).index())+"%"},2000)
            banner_num=$(this).index()+1;
            banner();
        })
        banner()
        function banner(){
            tim=setInterval(banner_move,4000)
            function banner_move(){
                if(banner_num>($("#banner li").length-1)){
                    banner_num=0;
                }
                $("#banner li").removeClass("banner_li_active");
                $("#banner li").eq(banner_num).addClass("banner_li_active");
                $('#banner_list').stop().animate({"left":(-100*banner_num)+"%"},1000)
                banner_num++;
            }
        }
        
    <?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
