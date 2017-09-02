<?php
/* Smarty version 3.1.30, created on 2017-09-02 17:11:29
  from "D:\WWW\marketing\theme\default\user\user_center.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aa75c1704641_14868042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '853993407203429098f16dbd9caf401cfbc61215' => 
    array (
      0 => 'D:\\WWW\\marketing\\theme\\default\\user\\user_center.html',
      1 => 1504343476,
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
function content_59aa75c1704641_14868042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inc/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
js/jquery-form.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
js/pagination.js"><?php echo '</script'; ?>
>
<style>
    
    .up_img_de{position:absolute;text-align:center;bottom:-50px;width:225px;margin-left:-38px;}
    .privacy-img{float:left;margin-top:17px;}
    #name{float:left;margin-right:20px;}
    .basic-block .basic-img{width:130px;margin:0px auto 14%;}
    .clear{display:block;content:"";clear:both;}
    .user_name{height:25px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}

.imgbox{width:110px;height:150px;margin:0 auto;} 
.imgbox1{width:110px;height:110px;border:1px solid #e7e8e8;background:#f5f5f5;border-radius: 50%;} 
.imgbox1 img{width:110px;height:110px;} 
.btnupload{float:left;width: 85px; height: 30px; line-height: 30px; text-align: center; background: #ebebeb; border:1px solid #7e7e7e; display: block; font-size: 16px; color:#4c4c4c; margin-left:10px; margin-top:5px; position:relative;}
.upload_pic{display: block; width: 100%; height: 30px; position: absolute; left: 0; top: 0; opacity: 0; } 
    
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
                <!-- 页面默认显示的 -->
                <div class="basic-show">
                    <div class="basic-edit"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
img/basic_edit.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"/></div>
                    <dl class="basic-img" style="width:33%;">
                        <dt><img src="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['avatar'];?>
" alt="用户头像"/></dt>
                        <dd class="user_name"><?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
</dd>
                        <span style="left:65%;bottom:25%;"></span>
                        <div></div>
                    </dl>
                    <div class="basic-block-tit">基本信息</div>
                    <ul>
                        <li><em><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
img/basic_4.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"/></em>出生日期：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['birthday'];?>
</li>
                        <li><em><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
img/basic_3.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"/></em>从业年限：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['workage'];?>
 年</li>
                        <li><em><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
img/basic_6.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"/></em>微信号：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['weixin'];?>
</li>
                        <li><em><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
img/basic_7.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"/></em>一句话简介：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['introduce'];?>
</li>
                    </ul>
                    <div class="basic-block-tit">账户信息</div>
                    <ul>
                        <li><em><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
img/basic_8.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"/></em>邮箱：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['email'];?>
</li>
                        <li><em><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
img/basic_9.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"/></em>手机号：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['telephone'];?>
</li>
                    </ul>
                </div>

                <!-- 页面默认不显示的 -->
                <div class="demand-block-content edit_area" style="display:none;">
                <form id="userForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['edit_post'];?>
" enctype="multipart/form-data">

                    <div class="imgbox">
                        <div id="preview1" class="imgbox1"><?php if ($_smarty_tpl->tpl_vars['user_info']->value['avatar']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['avatar'];?>
" class="preimg"><?php }?></div>  
                        <address class="btnupload">选择文件
                            <input type="file" class="upload_pic" onchange="preview(this,1)" name="avatar" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['avatar'];?>
">
                        </address>
                    </div>
                    <!-- <div class="basic-img up_img">
                        <div class="avatar_upload">
                            <input type="file" accept="image/*" class="uploadFile" name="file" id="attachFile"/>
                            <input type="hidden" value=""/>
                        </div>
                        <div class="basic-img-img" style="height:130px;width:130px;">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['avatar'];?>
" alt="用户头像"/>
                        </div>
                        <p class="up_img_de">请上传正方形图片，建议尺寸：256*256（等比）</p>
                    </div> -->

                    <!-- <div class="basic-img up_img">
                        <form id="attachForm" method="post" action="" enctype="multipart/form-data">
                            <input type="file" accept="image/*" class="uploadFile" name="file" id="attachFile"/>
                            <input type="hidden" value=""/>
                        </form>
                        <div class="basic-img-img" style="height:130px;width:130px;">
                            <img src="http://file.315pr.com/upload/20170825/dfe99157e4e74da18964ce987df14572.png" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"/>
                        </div>
                        <p class="up_img_de">请上传正方形图片，建议尺寸：256*256（等比）</p>
                    </div> -->

                    <div class="basic-block-tit">基本信息</div>
                    <div class="basic-tit"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
img/basic_1.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"/>昵称</div>
                    <div class="basic-content">
                        <input onfocus="mod_u_info(this,1)" onblur="mod_u_info(this,2)" type="text" name="nickname" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
"/>
                        
                        <em class="clear"></em>
                    </div>
                    <i class="clear"></i>
                    <!-- <?php echo '<script'; ?>
>
                    
                        $(".privacy-img").click(function(){
                            if($(this).attr("tit")==1){
                                $(this).attr("src",theme+"resources/bootstrap/resetImg/privacy1.png").attr("tit",0);
                            }else{
                                $(this).attr("src",theme+"resources/bootstrap/resetImg/privacy0.png").attr("tit",1);
                            }
                        })
                    
                    <?php echo '</script'; ?>
> -->

                    <div class="basic-tit"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
img/basic_2.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"/>性别</div>
                    <div class="basic-content sex">
                        <span ><input <?php if ($_smarty_tpl->tpl_vars['user_info']->value['sexnum'] == 1) {?>checked style="color: #FFFFFF;background: #a90916;" <?php }?> type="radio" name="sex" id="sex1" value="1"/> 男</span>
                        <span ><input <?php if (!$_smarty_tpl->tpl_vars['user_info']->value['sexnum']) {?>checked style="color: #FFFFFF;background: #a90916;" <?php }?> type="radio" name="sex" id="sex2" value="0"/> 女</span>
                    </div>

                    <div class="basic-tit"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
img/basic_3.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"/>从业年限</div>
                    <div class="basic-content">
                        <div class="workage">
                            <input type="text" name="workage" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['workage'];?>
"> 年
                        </div>
                    </div>

                    <div class="basic-tit">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
img/basic_4.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"/>出生日期
                    </div>
                    <div class="basic-content">
                        <input type="text" name="birthday" id="birthday" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['birthday'];?>
"/>
                    </div>

                    <div class="basic-tit">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
img/basic_5.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"/>所在地区
                    </div>
                    <div class="basic-content">
                        <input onfocus="mod_u_info(this,1)" onblur="mod_u_info(this,2)" type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['address'];?>
" />
                    </div>

                    <div class="basic-tit">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
img/basic_6.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"/>微信号
                    </div>
                    <div class="basic-content">
                        <input type="text" name="weixin" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['weixin'];?>
"/>
                    </div>

                    <div class="basic-tit">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
img/basic_7.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"/>一句话简介
                    </div>
                    <div class="basic-content intro">
                        <textarea rows="3" name="introduce" placeholder="请描述您的经验和专长，会更容易受到关注和青睐"/><?php echo $_smarty_tpl->tpl_vars['user_info']->value['introduce'];?>
</textarea>
                    </div>

                    <div class="basic-block-tit">账户信息</div>
                    <div class="basic-tit"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
img/basic_8.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"/>邮箱</div>
                    <div class="basic-content">
                        <input <?php if ($_smarty_tpl->tpl_vars['user_info']->value['email']) {?>readonly<?php }?> type="text" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['email'];?>
"/>
                    </div>

                    <div class="basic-tit"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['theme_s'];?>
img/basic_9.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['site_name'];?>
"/>手机号</div>
                    <div class="basic-content">
                        <input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['telephone'];?>
"/>
                    </div>

                    <div class="basic-btn">
                        <!-- <button onclick="edit_user();">保存</button> -->
                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
                        <input type="submit" value="保存">
                        <input type="reset" value="重置">
                    </div>
                </form></div>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
<?php echo '<script'; ?>
 type="text/javascript">
    
    // 预览头像
    function preview(f,o)  
    {
        var prevDiv = document.getElementById('preview'+o);
        if (f.files && f.files[0]) {
            var reader = new FileReader();
            reader.onload = function(evt) {
                prevDiv.innerHTML = '<img src="' + evt.target.result + '" />';
            }
            reader.readAsDataURL(f.files[0]);
        } else {
            // prevDiv.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + f.value + '\'"></div>';
            prevDiv.innerHTML = '<img style="width:110px;height:110px" src="'+ f.value +'" />';
        }
    }


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
    function mod_u_info(node,type) {
        if (type==1) {
            if($(node).val()=="此选项必填"){
                $(node).val('').css("color","#000");
            }
        } else {
            if($(node).val()==''){
                $(node).val("此选项必填").css("color","#f05");
            }
        }
    }
    
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
