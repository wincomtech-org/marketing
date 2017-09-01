<?php
/* Smarty version 3.1.30, created on 2017-08-31 18:12:24
  from "D:\WWW\marketing\theme\default\user\user_center.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a7e108408546_08633193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '853993407203429098f16dbd9caf401cfbc61215' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\user\\user_center.html',
      1 => 1504174324,
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
function content_59a7e108408546_08633193 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inc/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/js/jquery-form.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/js/pagination.js"><?php echo '</script'; ?>
>
<style>

    .up_img_de{position:absolute;text-align:center;bottom:-50px;width:225px;margin-left:-38px;}
    .privacy-img{float:left;margin-top:17px;}
    #name{float:left;margin-right:20px;}
    .basic-block .basic-img{width:130px;margin:0px auto 14%;}
    .clear{display:block;content:"";clear:both;}
    
</style>

<body>
<?php $_smarty_tpl->_subTemplateRender("file:inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-content">
    <div class="usercenter_page">
        <div class="usercenter_tag">
            <ul>
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['user'];?>
"><em></em>基本信息</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['order_list'];?>
"><em></em>我的订单</a></li> 
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['logout'];?>
"><em></em>退出登录</a></li>
            </ul>
        </div>
        <div class="usercenter_content usercenter_demand">
            <div class="demand-block basic-block">
                <div class="demand-block-content edit_area" style="display: none;">
                    <div class="basic-img up_img">
                        <form id="attachForm" method="post" action="" enctype="multipart/form-data">
                            <input type="file" accept="image/*" class="uploadFile" name="file" id="attachFile"/>
                            <input type="hidden" value=""/>
                        </form>
                        <div class="basic-img-img" style="height:130px;width:130px;">
                            <img src="http://file.315pr.com/upload/20170825/dfe99157e4e74da18964ce987df14572.png" alt="三点一刻智能协同营销平台"/>
                        </div>
                        <p class="up_img_de">请上传正方形图片，建议尺寸：130*130</p>
                    </div>

                    <div class="basic-block-tit">基本信息</div>

                    <div class="basic-tit"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/img/basic_1.jpg" alt="三点一刻智能协同营销平台"/>姓名</div>
                    <div class="basic-content">
                        <input type="text" name="name" id="name" value="123"/>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/resetImg/privacy1.png" class="privacy-img" title="隐藏您的个人信息" tit=0>
                        <em class="clear"></em>
                    </div>
                    <i class="clear"></i>
                    <?php echo '<script'; ?>
>
                    
                        $(".privacy-img").click(function(){
                            if($(this).attr("tit")==1){
                                $(this).attr("src","{$site.theme}resources/bootstrap/resetImg/privacy1.png").attr("tit",0)
                            }else{
                                $(this).attr("src","{$site.theme}resources/bootstrap/resetImg/privacy0.png").attr("tit",1)
                            }
                        })
                    
                    <?php echo '</script'; ?>
>
                    <div class="basic-tit"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/img/basic_2.jpg" alt="三点一刻智能协同营销平台"/>性别</div>
                    <div class="basic-content sex">
                        <span ><input type="radio" name="sex" id="sex1"  value="1"/> 男</span>
                        <span ><input type="radio" name="sex" id="sex2"  value="2"/> 女</span>
                    </div>
                    <div class="basic-tit"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/img/basic_3.jpg" alt="三点一刻智能协同营销平台"/>从业年限</div>
                    <div class="basic-content">
                        <div class="ex">
                            <select id="ex" name="ex">
                                <option checked>请选择您的从业年限</option>
                                <option >1-3年</option>
                                <option >3-5年</option>
                                <option >5-8年</option>
                                <option >8-10年</option>
                                <option >10年以上</option>
                            </select>
                        </div>
                    </div>
                    <div class="basic-tit">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/img/basic_4.jpg" alt="三点一刻智能协同营销平台"/>出生日期
                    </div>
                    <div class="basic-content">
                        <input type="text" name="birthday" id="birthday" value=""/>
                    </div>
                    <div class="basic-tit">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/img/basic_5.jpg" alt="三点一刻智能协同营销平台"/>所在地区
                    </div>
                    <div class="basic-content">
                        <input type="text" id="cityArea" name="cityArea" value="" />
                    </div>
                    <div class="basic-tit">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/img/basic_6.jpg" alt="三点一刻智能协同营销平台"/>微信号
                    </div>
                    <div class="basic-content">
                        <input type="text" id="wxNum" name="wxNum" value=""/>
                    </div>
                    <div class="basic-tit">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/img/basic_7.jpg" alt="三点一刻智能协同营销平台"/>一句话简介
                    </div>
                    <div class="basic-content intro">
                        <textarea id="des" rows="3" name="des"  placeholder="请描述您的经验和专长，会更容易受到关注和青睐"/></textarea>
                    </div>
                    <div class="basic-block-tit">账户信息</div>
                    <div class="basic-tit"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/img/basic_8.jpg" alt="三点一刻智能协同营销平台"/>邮箱</div>
                    <div class="basic-content">
                        <input type="text" id="email" name="email" value=""/>
                    </div>
                    <div class="basic-tit"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/img/basic_9.jpg" alt="三点一刻智能协同营销平台"/>手机号</div>
                    <div class="basic-content">
                        <input type="text" readonly value="13205513306"/>
                    </div>
                    <div class="basic-btn">
                        <button onclick="edit_user();">保存</button>
                        <button class="cancel">取消</button>
                    </div>
                </div>
                <div class="basic-show">
                    <div class="basic-edit"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/img/basic_edit.jpg" alt="三点一刻智能协同营销平台"/></div>
                    <dl class="basic-img" style="width: 33%;">
                        <dt><img src="http://file.315pr.com/upload/20170825/dfe99157e4e74da18964ce987df14572.png" alt="三点一刻智能协同营销平台"/></dt>
                        <dd style="height: 25px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">123</dd>
                        <span style="left:65%;bottom:25%;"></span>
                        <div></div>
                    </dl>
                    <div class="basic-block-tit">基本信息</div>
                    <ul>
                        <li><em><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/img/basic_4.jpg" alt="三点一刻智能协同营销平台"/></em>出生日期：</li>
                        <li><em><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/img/basic_3.jpg" alt="三点一刻智能协同营销平台"/></em>从业年限：</li>
                        <li><em><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/img/basic_6.jpg" alt="三点一刻智能协同营销平台"/></em>微信号：</li>
                        <li><em><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/img/basic_7.jpg" alt="三点一刻智能协同营销平台"/></em>一句话简介：</li>
                    </ul>
                    <div class="basic-block-tit">账户信息</div>
                    <ul>
                        <li><em><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/img/basic_8.jpg" alt="三点一刻智能协同营销平台"/></em>邮箱：</li>
                        <li><em><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme'];?>
resources/bootstrap/img/basic_9.jpg" alt="三点一刻智能协同营销平台"/></em>手机号：13205513306</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
<?php echo '<script'; ?>
 type="text/javascript">
    
    $('.up_img').css("height",'130px')
    $('.basic-img .basic-img-img').css("height",'130px')

    $(".basic-area em").each(function(){
        $(this).click(function(i){
            if($(this).hasClass('onstyle')){
                $(this).removeClass('onstyle').find('input').removeAttr('checked');
            }else{
                $(this).addClass('onstyle').find('input').attr('checked','checked');
            }
        });
    })

    $(".sex span").each(function(){
        $(this).click(function(i){
            $(this).addClass('onstyle').find('input').attr('checked','checked').end().siblings().removeClass('onstyle').find('input').removeAttr('checked');
        });
    });
    
    //限制修改不为空
    $("#name").blur(function(){
        if($(this).val()==""){
            $(this).val("此选项必填").css("color","#f05");
        }
    })
    $("#name").focus(function(){
        if($(this).val()=="此选项必填"){
            $(this).val("").css("color","#000");
        }
    })
    $("#cityArea").blur(function(){
        if($(this).val()==""){
            $(this).val("此选项必填").css("color","#f05");
        }
    })
    $("#cityArea").focus(function(){
        if($(this).val()=="此选项必填"){
            $(this).val("").css("color","#000");
        }
    })
    $("#wxNum").blur(function(){
        if($(this).val()==""){
            $(this).val("此选项必填").css("color","#f05");
        }
    })
    $("#wxNum").focus(function(){
        if($(this).val()=="此选项必填"){
            $(this).val("").css("color","#000");
        }
    })
    $("#des").blur(function(){
        if($(this).val()==""){
            $(this).css("color","#f05");
            $(this).val("此选项必填")
        } 
    })
    $("#des").focus(function(){
        if($(this).val()=="此选项必填"){
            $(this).val("").css("color","#000");
        }
    })
    $("#ex").change(function(){
        if($(this).val()=="请选择您的从业年限"){
            //alert("请重新选择您的从业年限")
            $(this).val("1-3年")
        }
    })
    
    //修改完成
    $("#server1").change(function(){
        $('#server2').empty();
        if($('#server1 option:selected')){
            var demand_type1 =$('#server1 option:selected').attr('value');
            $.ajax({
                type: 'post',
                url: url + "/tag/service_child.shtml",
                data: {
                    'v' : '2.0',
                    'source' : 2,
                    'pid' : demand_type1
                },
                success: function(data){
                    var  dt = data.data;

                    $('#server2').append('<option value="0">全部</option>');
                    
                    for(var i=0;i<dt.length;i++){
                        $('#server2').append('<option value="'+ dt[i].id +'">'+ dt[i].name +'</option>');
                    }
                }
            });
        }
    });

    $('.basic-edit').click(function () {
        $('.basic-show').hide();
        $('.edit_area').show();
    });

    $('.cancel').click(function(){
        $('.basic-show').hide();
        $('.edit_area').show();
    });

    var skip_url = location.href;
    if(skip_url.indexOf('#') != -1){
        $('.basic-show').hide();
        $('.edit_area').show();
    }
    //  laydate({
    //     elem: '#birthday'
    // });
    
<?php echo '</script'; ?>
>
</html><?php }
}
