﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿/**
 * Created by sdyk on 16/11/24.
 */
    
/**头部切换*/
$(document).delegate('.menu_icon','click',function(){
    $(this).siblings('.nav').toggle();
 })

/**媒介内容在不同尺寸下切换*/
$(function(){
    if(screen.width < 768){
        $('.smart-block .smart_smaller').show();
        $('.smart-block .smart_bigger').hide();
    }else{
        $('.smart-block .smart_bigger').css('display','block');
        $('.smart-block .smart_smaller').css('display','none');
    }
})
 
// var _hmt = _hmt || [];
// (function() {
//   var hm = document.createElement("script");
//   hm.src = "https://hm.baidu.com/hm.js?c16e71335ce5575c1aab0ce71c7415ae";
//   var s = document.getElementsByTagName("script")[0]; 
//   s.parentNode.insertBefore(hm, s);
// })();
 

//全局变量
//var url = window.location.protocol + '//' + window.location.host;
var url = "http://www.315pr.com";
//var url = 'http://testwww.315pr.com';
 
var admin_url = 'http://file.315pr.com';

//var url_img = "http://test1.315pr.com:38080/resources/bootstrap/img/";
//var url_img = "http://www.315pr.com/resources/bootstrap/img/";
 var url_img = url + "/resources/bootstrap/img/";
 
// 注册成功设置昵称
 $(function(){
	    $(document).on('change','#attachFile7',function(){
	        var file_name = $(this).val();
	        var attachUrl = "";
	        // $("#attachForm").submit();
	        var option = {
	            url : url+"/file/img.shtml",
	            data : {
	                'v' : '2.0',
	                'source' : 2
	            },
	            type: "post",
	            success : function(result){
	                if(result.code == '0'){
	                	console.log(1)
	                    attachUrl = result.data.url;
	                    $('#attachForm7 input[type="hidden"]').val(attachUrl);
	                    $('.img').attr('src',admin_url + attachUrl);
	                }else{
	                    alert(result.message)
	                }
	            }
	        };
	        $("#attachForm7").ajaxSubmit(option);
	    });
	});
// 上传附件（头像）
$(function(){
    $(document).on('change','#attachFile',function(){
        var file_name = $(this).val();
        $("input[name='copyFile']").val(file_name);
        var attachUrl = "";
        // $("#attachForm").submit();
        var option = {
            url : url+"/file/img.shtml",
            data : {
                'v' : '2.0',
                'source' : 2
            },
            type: "post",
            success : function(result){
                if(result.code == '0'){
                    attachUrl = result.data.url;
                    // alert(attachUrl);
                    $('#attachForm input[type="hidden"]').val(attachUrl);
                    $('.basic-img-img img').attr('src', admin_url + attachUrl );
                }else{
                    alert(result.message)
                }
            }
        };
        $("#attachForm").ajaxSubmit(option);
    });
});
// 上传附件（修改作品）
$(function(){
    $(document).on('change','#attachFile1',function(){
        var file_name = $(this).val();
        $("input[name='copyFile']").val(file_name);
        var attachUrl = "";
        // $("#attachForm").submit();
        var option = {
            url : url+"/file/img.shtml",
            data : {
                'v' : '2.0',
                'source' : 2
            },
            type: "post",
            success : function(result){
                if(result.code == '0'){
                    attachUrl = result.data.url;
                    // alert(attachUrl);
                    $('#attachForm1 input[type="hidden"]').val(attachUrl);
                    $('.deit_img img').attr('src', admin_url + attachUrl );
                }else{
                    alert(result.message)
                }
            }
        };
        $("#attachForm1").ajaxSubmit(option);
    });
});
// 上传附件（添加作品）
$(function(){
    $(document).on('change','#attachFile2',function(){
        var file_name = $(this).val();
        $("input[name='copyFile']").val(file_name);
        var attachUrl = "";
        // $("#attachForm").submit();
        var option = {
            url : url+"/file/img.shtml",
            data : {
                'v' : '2.0',
                'source' : 2
            },
            type: "post",
            success : function(result){
                if(result.code == '0'){
                    attachUrl = result.data.url;
                   // alert(attachUrl);
                    $('#attachForm2 input[type="hidden"]').val(attachUrl);
                }else{
                    alert(result.message)
                }
            }
        };
        $("#attachForm2").ajaxSubmit(option);
    });
});

// 上传附件（文件）
$(function(){
    $(document).on('change','#attachFile3',function(){
        var file_name = $(this).val();

        var fileName = getFileName(file_name);

        $("input[name='copyFile']").val(file_name);
        var attachUrl = "";
        // $("#attachForm").submit();
        var option = {
            url : url+"/file/img.shtml",
            data : {
                'v' : '2.0',
                'source' : 2
            },
            type: "post",
            success : function(result){
                if(result.code == '0'){
                    attachUrl = result.data.url;
                    // alert(attachUrl);
                    $('#attachForm3 input[type="hidden"]').val(attachUrl);
                    $('#attachForm3_tit').val(fileName);
                }else{
                    alert(result.message)
                }
            }
        };
        $("#attachForm3").ajaxSubmit(option);
    });
});
// 上传附件 项目（文件）
$(function(){
    $(document).on('change','#attachFile4',function(){
        var file_name = $(this).val();

        var fileName = getFileName(file_name);

        $("input[name='copyFile']").val(file_name);
        var attachUrl = "";
        // $("#attachForm").submit();
        var option = {
            url : url+"/file/img.shtml",
            data : {
                'v' : '2.0',
                'source' : 2
            },
            type: "post",
            success : function(result){
                if(result.code == '0'){
                    attachUrl = result.data.url;
                    // alert(attachUrl);
                    $('#attachForm4 input[type="hidden"]').val(attachUrl);
                    $('#attachForm4_tit').val(fileName);
                }else{
                    alert(result.message)
                }
            }
        };
        $("#attachForm4").ajaxSubmit(option);
    });
});
//上传附件 项目（文件）
//上传附件 项目（文件）    (发布需求页)
$(function(){
	$(document).on('change','#attachFile6',function(){
		var file_name = $(this).val();
        var fileName = getFileName(file_name);
        $("input[name='copyFile']").val(file_name);
        var attachUrl = "";
        var option = {
            url : url+"/file/img.shtml",
            data : {
                'v' : '2.0',
                'source' : 2
            },
            type: "post",
            success : function(result){
            	var str ='';
                if(result.code == '0'){
                    attachUrl = result.data.url;
                    // alert(attachUrl);valImg
                    $('#valImg').val(attachUrl);
                   str='<p><img src="'+url_img+'/supplierRegisterOk.png" alt="" class="demand-block-box2-show-a"><span> '+file_name+'</span><img src="'+url_img+'/supplierDelete.png" class="demand-block-box2-show-b"></p>';
                    /*str+='<div class="deleteImg'+i+'" style="float: left;margin-top: 22px;width: 100%;">';
                    str+='<img src="'+url_img+'/supplierRegisterOk.png">';
                    str+='<div class="addName">'+file_name+'</div>';
                    str+='<img class="supplierDelete" src="'+url_img+'/supplierDelete.png" onclick="deleteImg('+i+')">';
					str+='<div class="dataUrl" style="display: none;">'+attachUrl+',</div>' 
                    str+='</div>';
                    */
                	$(".demand-block-box2-show").html(str);
                    $('#attachForm6 input[type="hidden"]').val(attachUrl);
                   // $('#attachForm5_tit').val(fileName);
				  
                }else{
                    alert(result.message) 
                }
            }
        };
       $("#attachForm6").ajaxSubmit(option);
    });
});
// 上传附件 项目（文件）
$(function(){
	var i = 1;
    $(document).on('change','#attachFile5',function(){
	
		i = i + 1;
		console.log(i);
        var file_name = $(this).val();
        var fileName = getFileName(file_name);
        $("input[name='copyFile']").val(file_name);
        var attachUrl = "";
        var option = {
            url : url+"/file/img.shtml",
            data : {
                'v' : '2.0',
                'source' : 2
            },
            type: "post",
            success : function(result){
                var str ='';
                if(result.code == '0'){
                    attachUrl = result.data.url;
                    // alert(attachUrl);valImg
                    $('#valImg').val(attachUrl);
                    str+='<div class="deleteImg'+i+'" style="float: left;margin-top: 22px;width: 100%;">';
                    str+='<img src="'+url_img+'/supplierRegisterOk.png">';
                    str+='<div class="addName">'+file_name+'</div>';
                    str+='<img class="supplierDelete" src="'+url_img+'/supplierDelete.png" onclick="deleteImg('+i+')">';
					str+='<div class="dataUrl" style="display: none;">'+attachUrl+',</div>' 
                    str+='</div>';
                    $('.addDescribe').append(str);
                    $('#attachForm5 input[type="hidden"]').val(attachUrl);
                   // $('#attachForm5_tit').val(fileName);
				  
                }else{
                    alert(result.message) 
                }
            }
        };
        $("#attachForm5").ajaxSubmit(option);
    });
});
 
function getFileName(o){
    var pos=o.lastIndexOf("\\");
    return o.substring(pos+1);
}
/*删除上传文件*/
function deleteImg(i){
	$('.deleteImg'+i).remove();
}
/* ==========供应商自注册post ============== */

function supplierRegister(){ 
	var supplierPropertyId = $('.select').attr('data-type');
	var supplierName = $('.offerName').val();
	var company = $('.companyName').val();
	var city = $('.areaVal').val() +$('.provinceVal').val();
	var describes = $('.companyIntroduce').val();
	var supplierPerson = $('.supplierPerson').val();
	var mobile = $('.mobile').val();
	var wxNum = $('.wxNum').val();
	var other = $('.dataUrl').text();
	var resourceMerit = $('.resourceMerit').val();
	if(supplierName.length < 1 ){
	 		alert('请输入供应商名称！'); 
	 		return false; 
	} 
	if(company.length < 1 ){
	 		alert('请输入公司名称！'); 
	 		return false; 
	} 
	if(other.length < 1 ){
	 		alert('请输入添加公司资质！'); 
	 		return false; 
	} 
	$.ajax({
        type:"post",
        url: url + "/supplier/register.shtml",
        data: {
            "v":"2.0",
            "source": 2,
			"supplierPropertyId":supplierPropertyId,
			"supplierName":supplierName,
			"company":company,
			"city":city,
			"describes":describes,
			"supplierPerson":supplierPerson,
			"mobile":mobile,
			"wxNum":wxNum,
			"other":other,
			"resourceMerit":resourceMerit
        },
        success: function(data){
            // var dataset = $.parseJSON(data);
            if('0' == data.code){
				/*var skip_url = location.href;
				if(skip_url.indexOf('#') != -1){
					skip_url = location.href.split('#')[1];
				}else{
					skip_url = "index.shtml";
				}*/
				//console.log(skip_url);
               // window.location.href = '/'+ skip_url;
            	alert("注册供应商成功！");
//            	alert(data.data);
            	window.location.href = url + "/supplier/" + data.data + ".shtml";
            	
            }else{
                alert(data.message);
            }
        }
    });
}
/* ============= 登录 ------ 登录 ============== */

function login(){
    var mobile = $("#mobile").val();
    var password = $("#password").val();
    if($('.reg_p:eq(1) label').attr('tid')==0){
    	alert("您未同意服务条款")
    	return false;
    }
    $.ajax({
        type:"post",
        url: url + "/user/login.shtml",
        data: {
            "v":"2.0",
            "source": 2,
            "mobile": mobile,
            "password": password
        },
        success: function(data){
            //var dataset = $.parseJSON(data);
            if('0' == data.code){
            	/*var skip_url = location.href;
				if(skip_url.indexOf('#') != -1){
					skip_url = location.href.split('#')[1];
				}else{
					skip_url =url+"/index.shtml";
				}
				console.log(skip_url);
                window.location.href =skip_url;*/
            	$.ajax({
            		url:url+'/user/loginRecord.shtml',
            		type:'post'
            	})
            	if(localStorage.getItem('block_num')!=''&& localStorage.getItem('block_num')){
            		window.location.href=localStorage.getItem('block_num');
            	}else{
            		window.location.href=url;
            	}
            }else{
                alert(data.message);
           // 	window.location.href=url+"/loginComple.shtml";
            }
        }
    });
}

/* ============= 登录 ------ 发现验证码 ============== */
function sendCode(){
    var mobile = $("#mobile").val();
    $.ajax({
        type:"post",
        url: url + "/user/send_code.shtml",
        data: {
            "v": "2.0",
            "source": 2,
            "mobile": mobile
        },
        success: function(data){
            if('0' == data.code){
                $('button').attr('onclick','');
                settime(60);
                alert("发送成功！");
            }else{
                alert(data.message);
            }
        }
    });
}
/* ============= 登录 ------ 获取验证码倒计时 ============== */
function settime(countdown){
    if (countdown == 0) {
        $('.login-from button').html('重新获取');
        $('.login-from button').css('background','#b43d3d');
        $('button').click(function(){
            sendCode();
        });
        return false;
    }else{
        $('.login-from button').html(countdown);
        $('.login-from button').css('background','#d3d3d3');
        countdown--;
    }
    setTimeout(function() {
        settime(countdown);
    },1000)
}
/* ============= 登录 ------ 注册 ============== */
function register(){
	var str=location.href; //取得整个地址栏
    var num=str.indexOf("?"); 
    var str=str.substr(num+1);
    /*
//	var isFreeman = $(':radio[name="radio"]:checked').val(); 
//	if(isFreeman==null){
//		alert("请选择服务类型!");debugger;
//		return false;
//	}*/
    var mobile = $("#mobile1").val();
    var password1 = $("#password1").val();
    var password2 = $("#password2").val();
    var code = $("#code").val();

    if(password1 != password2){
        alert("两次密码不一致！");
        return false;
    }
    if($('.reg_p:eq(0) label').attr('tid')==0){
    	alert("您未同意服务条款")
    	return false;
    }

    $.ajax({
        type:"post",
        url: url + "/user/register.shtml",
        data: {
            "v":"2.0",
            "source": 2,
            "mobile": mobile,
            "vCode": code,
            "password": password1,
			"fromSource": str
			 
        },
        success: function(data){
            if('0' == data.code){
//				if(isFreeman =='1'){
//        	 		window.location.href = url + "/user/reg_suc_a.shtml";
//        	 		return false; 
//        	 	};
//        	 	if(isFreeman =='2'){
//        	 		window.location.href = url + "/user/reg_suc_b.shtml";
//        	 		return false; 
//        	 	}
            	
            	    $.ajax({
            	        type:"post",
            	        url: url + "/user/login.shtml",
            	        data: {
            	            "v":"2.0",
            	            "source": 2,
            	            "mobile": mobile,
            	            "password": password1
            	        },
            	        success: function(data){
            	            //var dataset = $.parseJSON(data);
            	            if('0' == data.code){
            	            	/*var skip_url = location.href;
            					if(skip_url.indexOf('#') != -1){
            						skip_url = location.href.split('#')[1];
            					}else{
            						skip_url =url+"/index.shtml";
            					}
            					console.log(skip_url);
            	                window.location.href =skip_url;*/
            	            	window.location.href=url+"/user/loadpage.shtml";
            				}else{
            	                alert(data.message);
            	           // 	window.location.href=url+"/loginComple.shtml";
            	            }
            	        }
            	    });
            	
            }else{
                alert(data.message);
            }
        }
    });
}

/* ============= 登录——————忘记密码 ============== */
function resetPass(){
    var mobile = $('#mobile').val();
    var code = $('#code').val();
    var password1 = $('#password1').val();
    var password2 = $('#password2').val();
console.log(mobile+"..."+code+"..."+password1)
    if(password1 != password2){
        alert("两次密码不一致！");
        return false;
    }
    $.ajax({
        type:"post",
        url: url + "/user/restpass.shtml",
        data: {
            "v":"2.0",
            "source": 2,
            "mobile": mobile,
            "vCode": code,
            "password": password1
        },
        success: function(data){
            if('0' == data.code){
                alert("密码修改成功！");
                window.location.href = "/user/logv.shtml#user/user_center.shtml";
            }else{
                alert(data.message);
            }
        }
    });
}


/* ============= 基本信息—————修改 ============== */
function edit_user(){
	
	var name = $('#name').val();
	var sex = $('.basic-content.sex input[name="sex"]:checked ').val();
	var birthday = $('#birthday').val();
	var cityArea = $('#cityArea').val();
	var wxNum = $('#wxNum').val();
	var email = $('#email').val();
	var des = $('#des').val();
    var headerpic = $('#attachForm input[type="hidden"]').val();
    var workingLife = $('#ex').val();
    var privacy=$(".privacy-img").attr("tit");
	var channelIds =""; 
	var channels ="";
	
	
	$('input[name="channelId"]:checked').each(function(){
		channelIds = channelIds + $(this).val() +",";
		channels =  channels + $(this).next().text() + ",";
		}
	); 
	if(channelIds != null || channelIds.length > 0){
		channelIds = channelIds.substring(0, channelIds.length - 1);
		channels = channels.substring(0, channels.length - 1);
	}
	// 图片没有上传有默认图片
    if(isEmpty(headerpic)){
        headerpic = $('.basic-img-img img').attr('src').substring(21);
    }
    /*alert($(".basic-skill:eq(1)").find("span").size()==0)*/
    if(name=="此选项必填"){
    	alert("您的姓名未填写完全");
    }else if(cityArea=="此选项必填"){
    	alert("您所在的地区位未填写完整")
    }else if(wxNum=="此选项必填"){
    	alert("您未填写微信号")
    }else if(des=="此选项必填"){
    	alert('您未填写简介')
    }else{
    	$.ajax({
    		url : url + '/user/modify.shtml',
    		type : "post",
    		data : {
    			'v' : '2.0',
    			'source' : 2,
    			'channelIds' : channelIds,
    			'channels' : channels,
    			'name' : name,
    			"privacy":privacy,
    			'des' : des,
    			'birthday' : birthday,
    			'cityArea' : cityArea,
    			'wxNum' : wxNum,
    			'email' : email,
    			'workingLife' : workingLife,
    			'headerpic' : headerpic,
    			'gender' : sex,
    		},
    		success: function(data){
    			if(data.code == '0'){
    				location.reload() ;
    			}else{
    				alert(data.message);
    			}
    		}
    	});
    }
    
}



/* ============= 完善资料 ============== */
function edit_user_info(){
	
	var name = $('#name').val();
	var sex = $('.basic-content.sex input[name="sex"]:checked ').val();
	var birthday = $('#birthday').val();
	var cityArea = $('#cityArea').val();
	var wxNum = $('#wxNum').val();
	var email = $('#email').val();
	var des = $('#des').val();
    var headerpic = $('#attachForm input[type="hidden"]').val();
    var workingLife = $('#ex').val();
	var channelIds =""; 
	var channels ="";
	if(name==''){
		alert(1)
	}
	
	$('input[name="channelId"]:checked').each(function(){
		channelIds = channelIds + $(this).val() +",";
		channels =  channels + $(this).next().text() + ",";
		}
	); 
	if(channelIds != null || channelIds.length > 0){
		channelIds = channelIds.substring(0, channelIds.length - 1);
		channels = channels.substring(0, channels.length - 1);
	}
	// 图片没有上传有默认图片
    if(isEmpty(headerpic)){
        headerpic = $('.basic-img-img img').attr('src').substring(21);
    }


	$.ajax({
		url : url + '/user/modify.shtml',
		type : "post",
		data : {
			'v' : '2.0',
			'source' : 2,
			'channelIds' : channelIds,
			'channels' : channels,
			'name' : name,
			'des' : des,
			'birthday' : birthday,
			'cityArea' : cityArea,
			'wxNum' : wxNum,
			'email' : email,
			'workingLife' : workingLife,
			'headerpic' : headerpic,
			'gender' : sex,
		},
		success: function(data){
			if(data.code == '0'){
				location.reload() ;
			}else{
				alert(data.message);
			}
		}
	});
}

/* ============= 基本信息—————删除标签（需优化） ============== */
function del_tag(obj,id){
	$.ajax({
		url : url + '/user/del_tag.shtml',
		type : "post",
		data : {
			'v' : '2.0',
			'source' : 2,
			'id' : id
		},
		success: function(data){
			if(data.code == '0'){
				alert("删除成功！");
                $(obj).parents('span').remove();
			}else{
				alert(data.message);
			}
		}
	});
}

/* ============= 基本信息—————添加标签 （未完成） ============== */
function add_tag(){
	var serviceTagLv1Id = $('#server1 option:selected').val();
	var serviceTagLv2Id = $('#server2 option:selected').val();
	var serviceTagLv1 = $('#server1 option:selected').text();
	var serviceTagLv2 = $('#server2 option:selected').text();

    if(serviceTagLv1 == '请选择'){
        alert('请选择技能标签');
        return false;
    }
    if(serviceTagLv1 == '请选择'){
        alert('请选择技能标签');
        return;
    }
				
	$.ajax({
		url : url + '/user/add_tag.shtml',
		type : "post",
		data : {
			'v' : '2.0',
			'source' : 2,
			'serviceTagLv1Id' : serviceTagLv1Id,
			'serviceTagLv2Id' : serviceTagLv2Id,
			'serviceTagLv1' : serviceTagLv1,
			'serviceTagLv2' : serviceTagLv2
		},
		success: function(data){
			if(data.code == '0'){
				$('.basic-skill').append('<span id="'+ serviceTagLv1Id + '-' + serviceTagLv2Id +'">'+ serviceTagLv1 + '-' + serviceTagLv2 +'<a href="javascript:;" onclick="del_tag(this,'+ data.data +');">x</a></span>');
			}else{
				alert(data.message);
			}
		}
	});
}

/* ============= 基本信息—————添加经验（需优化） ============== */
function add_experience(){

	var company = $("#company").val();
	if(isEmpty(company)){
		alert("请输入公司信息！");
		return;
	}
	var position = $("#position").val();
	if(isEmpty(position)){
		alert("请输入职位信息！");
		return;
	}			
	$.ajax({
		url : url + '/user/add_experience.shtml',
		type : "post",
		data : {
			'v' : '2.0',
			'source' : 2,
			'company' : company,
			'position' : position
		},
		success: function(data){
			if(data.code == '0'){
                $('.baisc-ex-show').append('<p>'+ company + '-'+ position +'<a href="javascript:;" onclick="del_experience(this,'+ data.data +');">x</a></p>');
                $("#company").val('');
                $("#position").val('');
			}else{
				alert(data.message);
			}
		}
	});
}

/* ============= 基本信息—————删除经验 （需优化） ============== */
function del_experience(obj,id){
	$.ajax({
		url : url + '/user/del_experience.shtml',
		type : "post",
		data : {
			'v' : '2.0',
			'source' : 2,
			'id' : id
		},
		success: function(data){
			if(data.code == '0'){
				alert("删除成功！");
                $(obj).parents('p').remove();
			}else{
				alert(data.message);
			}
		}
	});
}

/* ============= 基本信息—————关闭任务（需优化） ============== */
function close_task(id){
	$.ajax({
		url : url + '/user/close_task.shtml',
		type : "post",
		data : {
			'v' : '2.0',
			'source' : 2,
			'id' : id
		},
		success: function(data){
			if(data.code == '0'){
				alert("关闭成功！");
				location.reload() ;
			}else{
				alert(data.message);
			}
		}
	});
}

/* ============= 我的 —————— 我的任务列表 ============== */
function myTask(pageNum){
    $.ajax({
        url : url + '/user/tasks.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 9,
            'type' : 1
        },
        success : function(data){
        var mt = data.data.list;
            for(var i=0;i<mt.length;i++){
                $('#myTask_self').append('<li><a href="'+url+'/user/task_info-2.0-'+ mt[i].applyId +'-2.shtml"><div class="t_img"><img src="'+ mt[i].background +'" alt=""/></div><span class="tit">'+ mt[i].title +'</span><span class="del">'+ mt[i].detail +'</span><span class="bt"><span class="channel">'+ mt[i].channel +'</span><span class="price" style="width:50%;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;margin-top:1px;">￥<em class="red">'+ mt[i].budget +'</em></span></span><i><img src="'+url_img+getTaskStatusLabelImg(mt[i].applyStatus)+'" alt=""/></i></a></li>');
            }

            $('.user_demand .t_img').height($('.user_demand .t_img').width()/(315/250));

            $('#num_1').html('('+ data.data.totalCount +')');

            if(data.data.totalCount == 0){
                $('#page-box').hide();
            }

            if(data.data.totalCount%9 >0){
                $('input[name="pageInput"]').val(parseInt(data.data.totalCount/9)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/9)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/9));
                $('#page-box .num').text(parseInt(data.data.totalCount/9));
            }

            $('#page-box .total').text(data.data.totalCount);
            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    myTask(page)
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
        }
    });
    $.ajax({
        url : url + '/user/tasks.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 9,
            'type' : 2
        },
        success : function(data){
            var mt = data.data.list;
//            var i=0;
//            for(var i=0;i<mt.length;i++){
//                mt[i].status==0;
//                i=i+1;
//            }
//            if(i!=0){
//            	alert("您有"+i+"条受邀请任务");
//            }
            for(var i=0;i<mt.length;i++){
                $('#myTask_other').append('<li><a href="task_info-2.0-'+ mt[i].applyId +'-2.shtml"><div class="t_img"><img src="'+ mt[i].background +'" alt=""/></div><span class="tit">'+ mt[i].title +'</span><span class="del">'+ mt[i].detail +'</span><span class="bt"><span class="channel">'+ mt[i].channel +'</span><span class="price" style="width:50%;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;">￥<em class="red">'+ mt[i].budget +'</em></span></span><i><img src="'+url_img+getTaskStatusLabelImg(mt[i].applyStatus)+'" alt=""/></i></a></li>');
            }

            $('.user_demand .t_img').height($('.user_demand .t_img').width()/(315/250));

            $('#num_2').html('('+ data.data.totalCount +')');

            if(data.data.totalCount == 0){
                $('#page-box1').hide();
            }

            if(data.data.totalCount%9 >0){
                $('input[name="pageInput"]').val(parseInt(data.data.totalCount/9)+1);
                $('#page-box1 .num').text(parseInt(data.data.totalCount/9)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/9));
                $('#page-box1 .num').text(parseInt(data.data.totalCount/9));
            }

            $('#page-box1 .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    myTask(page)
                }
            });
            $('#page-box1 .now').text($('#page-box1 .active').text());
        }
    });


}
/* ============= 我的 —————— 我的订单列表 ============== */
function goodsList(pageNum){
    $.ajax({
        url : url + '/order/list.shtml',
        type : "POST",
        data : {
            'v' : '2.0',
            'source' : 2,
		 
            'page' : '1',
            'limit' : '9',
			'customerId':$('body').attr('data-val') 
        },
        success : function(data){
			if(data.code =='0'){
				var md = data.data;
				for(var i=0;i<md.length;i++){
					if( md[i].executeTime != '' &&  md[i].executeTime != null ){
						$('.user_demand').append('<li><a href="'+url+'/order/info.shtml?'+md[i].orderNum+'"><span class="del" style="height:90px;" ><img src="'+md[i].image+'"/></span><span class="tit">'+ md[i].packageTitle +'</span><span class="bt"><span class="price" style="width:100%;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;">￥<em class="red">'+ md[i].amount +'</em></span></span></a></li>');
					}
					
				}
			}else{
				$('.goodsListStatus').show();
			}
/*
            $('.user_demand .d_img').height($('.user_demand .d_img').width()/(315/250));

            if(data.data.totalCount == 0){
                $('#page-box').hide();
            }

            if(data.data.totalCount%9 >0){
                $('input[name="pageInput"]').val(parseInt(data.data.totalCount/9)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/9)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/9));
                $('#page-box .num').text(parseInt(data.data.totalCount/9));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    myDemand(page);
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
			*/
        }
    });


}
/* ============= 我的 —————— 我的订单列表详情 ============== */
function orderInfo(pageNum){
	var format = function(time, format){
	    var t = new Date(time);
	    var tf = function(i){return (i < 10 ? '0' : '') + i};
	    return format.replace(/yyyy|MM|dd|HH|mm|ss/g, function(a){
	        switch(a){
	            case 'yyyy':
	                return tf(t.getFullYear());
	                break;
	            case 'MM':
	                return tf(t.getMonth() + 1);
	                break;
	            case 'mm':
	                return tf(t.getMinutes());
	                break;
	            case 'dd':
	                return tf(t.getDate());
	                break;
	            case 'HH':
	                return tf(t.getHours());
	                break;
	            case 'ss':
	                return tf(t.getSeconds());
	                break;
	        }
	    })
	}
 
	var str=location.href; //取得整个地址栏
	var num=str.indexOf("?") 
	str=str.substr(num+1);console.log(str);
    $.ajax({
        url : url + '/order/'+str+'.shtml',
        type : "get",
		
        success : function(data){
            var md = data.data;
			var createTime =format(md.createTime, 'yyyy-MM-dd HH:mm:ss');
			if(md.executeTime!=null && md.executeTime!="null"){
				var executeTime =format(md.executeTime, 'yyyy-MM-dd HH:mm:ss');
			}else{
				var executeTime="";
			}
			console.log(executeTime)
			$('.preferentialImg').attr('src',md.image.substring(21,md.image.length)).show();
			$('.title').html(md.title);
			$('.describe').html(md.packageTitle);
			$('.amount').html('￥'+md.amount);
			$('.describe1').html(md.describe);
			$('.str').html('订单编号：'+str);
			$('.createTime').html('下单时间：'+createTime);
			$('.executeTime').html('付款时间：'+executeTime);
			
			
			
			
			console.log(md);
          

        }
    });


}


/* ============= 我的 —————— 我的发布需求列表 ============== */
function myDemand(pageNum){
    $.ajax({
        url : url + '/user/demands.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 9
        },
        success : function(data){
            var md = data.data.list;

            for(var i=0;i<md.length;i++){
                $('.user_demand').append('<li><a href="'+url+'/user/demand_info-2.0-'+ md[i].id +'-2.shtml"><div class="d_img"><img src="'+ md[i].background +'" alt=""/></div><span class="tit">'+ md[i].title +'</span><span class="del">'+ md[i].detail +'</span><span class="bt"><span class="channel">'+ md[i].channel +'</span><span class="price" style="width:50%;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;">￥<em class="red">'+ md[i].budget +'</em></span></span><i><img src="'+url_img+getDemandStatusLabelImg(md[i].status)+'" alt=""/></i></a></li>');
            }

            $('.user_demand .d_img').height($('.user_demand .d_img').width()/(315/250));

            if(data.data.totalCount == 0){
                $('#page-box').hide();
            }

            if(data.data.totalCount%9 >0){
                $('input[name="pageInput"]').val(parseInt(data.data.totalCount/9)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/9)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/9));
                $('#page-box .num').text(parseInt(data.data.totalCount/9));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    myDemand(page);
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
        }
    });
}

/* ============= 我的 —————— 我的项目列表 ============== */
function myProject(pageNum){
    $.ajax({
        url : url + '/user/projects.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 9,
            'type' : 1
        },
        success : function(data){
            var mt = data.data.list;
status
            for(var i=0;i<mt.length;i++){
                $('#myPreoject_self').append('<li><a href="project_del-2.0-'+mt[i].applyId+'-2.shtml"><div class="p_img"><img src="'+ mt[i].background +'" alt=""/></div><span class="tit">'+ mt[i].title +'</span><span class="del">'+ mt[i].detail +'</span><span class="bt"><span class="channel">'+ mt[i].channel +'</span><span class="price" style="width:50%;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;">￥<em class="red">'+ mt[i].budget +'</em></span></span><i><img src="'+url_img+getTaskStatusLabelImg1(mt[i].status)+'" alt=""/></i></a></li>');
            }

            $('.user_demand .p_img').height($('.user_demand .p_img').width()/(315/250));

            $('#num_1').html('('+ data.data.totalCount +')');

            if(data.data.totalCount == 0){
                $('#page-box').hide();
            }

            if(data.data.totalCount%9 >0){
                $('input[name="pageInput"]').val(parseInt(data.data.totalCount/12)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/12)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12));
                $('#page-box .num').text(parseInt(data.data.totalCount/12));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    myProject(page)
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
        }
    });
    $.ajax({
        url : url + '/user/projects.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 9,
            'type' : 2
        },
        success : function(data){
            var mt = data.data.list;

            for(var i=0;i<mt.length;i++){
                $('#myProject_other').append('<li><a href="project_del-2.0-'+ mt[i].applyId +'-2.shtml"><div class="p_img"><img src="'+ mt[i].background +'" alt=""/></div><span class="tit">'+ mt[i].title +'</span><span class="del">'+ mt[i].detail +'</span><span class="bt"><span class="channel">'+ mt[i].channel +'</span><span class="price" style="width:50%;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;">￥<em class="red">'+ mt[i].budget +'</em></span></span><i><img src="'+url_img+getTaskStatusLabelImg1(mt[i].status)+'" alt=""/></i></a></li>');
            }
            $('.user_demand .p_img').height($('.user_demand .p_img').width()/(315/250));

            $('#num_2').html('('+ data.data.totalCount +')');

            if(data.data.totalCount == 0){
                $('#page-box1').hide();
            }

            if(data.data.totalCount%9 >0){
                $('input[name="pageInput"]').val(parseInt(data.data.totalCount/12)+1);
                $('#page-box1 .num').text(parseInt(data.data.totalCount/12)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12));
                $('#page-box1 .num').text(parseInt(data.data.totalCount/12));
            }

            $('#page-box1 .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    myProject(page)
                }
            });
            $('#page-box1 .now').text($('#page-box1 .active').text());
        }
    });


}

/* ============= 我的 ———————— 我的作品列表 ============== */
function myWork(pageNum){

    $('.usercenter_work ul').empty();

    $.ajax({
        url : url + '/user/works.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 9
        },
        success : function(data){
            var mw = data.data.list;

            if(mw.length < 0){
                $('.usercenter_work ul').append('<p>添加您的作品案例，让需求方了解您做过的成绩</p>');
            }

            for(var i=0;i<mw.length;i++){
            	if(mw[i].img.indexOf("jpg")<0 && mw[i].img.indexOf("png")<0 && mw[i].img.indexOf("gif")<0){
            		mw[i].img="http://file.315pr.com/upload/20161227/87ab1d63df604b8fbdfe9c7c4d0311e8.png";
                }
                $('.usercenter_work ul').append('<li><div class="w_img"><img src="'+mw[i].img+'" /></div><div class="user_work_tit">'+ mw[i].title +'</div><div class="user_work_des">'+ mw[i].des +'</div><a href="'+ mw[i].link +'">作品链接</a><div class="user_hover"><span class="user_work_edit" onclick="edit_work(this,'+ mw[i].id +')"><img src="'+url_img+'/work_edit.png"/></span><span class="user_work_del" onclick="del_work('+ mw[i].id +')"><img src="'+url_img+'/work_del.png"/></span></div></li><div class="usercenter_editwork"><div class="addwork_img"><img src="'+ mw[i].img +'" alt=""/><form id="attachForm1" method="post" action="" enctype="multipart/form-data"><input type="file"  class="uploadFile" name="file" id="attachFile1"/><input type="hidden" value=""/></form></div><div class="addwork_tit">作品名称</div><div class="addwork_con"><input type="text" name="work_tit" value="'+ mw[i].title +'"/></div><div class="addwork_tit">作品链接</div><div class="addwork_con"><input type="text" name="work_link" value="'+ mw[i].link +'"/></div><div class="addwork_tit">作品描述</div><div class="addwork_con"><textarea name="work_des">'+ mw[i].des +'</textarea></div><div class="addwork_btn"><button id="edit_work">保存</button><button class="cancel" onclick="cancle_work(this);">取消</button></div></div>');
            }

            $('.usercenter_work .w_img').height($('.usercenter_work .w_img').width()/(915/350));
            $('.usercenter_work .w_img').css('overflow','hidden');

            if(data.data.totalCount == 0){
                $('#page-box').hide();
            }

            if(data.data.totalCount%9 >0){
                $('input[name="pageInput"]').val(parseInt(data.data.totalCount/9)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/9)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/9));
                $('#page-box .num').text(parseInt(data.data.totalCount/9));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    myWork(page)
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
        }
    });
}

/* ============= 我的 ———————— 我的作品修改 ============== */
function edit_work(obj,id){
    $(obj).parents('li').hide().next('.usercenter_editwork').show().find('.addwork_img').addClass('deit_img');


    $('#edit_work').click(function(){
        var work_tit = $('input[name="work_tit"]').val();
        var work_link = $('input[name="work_link"]').val();
        var work_des = $('textarea[name="work_des"]').val();
        var img = $('#attachForm1 input[type="hidden"]').val();

        if(isEmpty(img)){
            img = $('.deit_img img').attr('src').substring(21);
        }

        // 图片没有上传有默认图片

        $.ajax({
            url : url + '/user/modify_work.shtml',
            type : "post",
            data : {
                'v' : '2.0',
                'source' : 2,
                'id' : id,
                'title' : work_tit,
                'des' : work_des,
                'link' : work_link,
                'img' : img
            },
            success: function(data){

                if(data.code == '0'){
                    alert('修改成功！');
                    $(obj).parents('.usercenter_editwork').hide().prev('li').show();
                    myWork(1);
                }else{
                    alert(data.message);
                }
            }
        });
        myWork(1);
    });
}

/* ============= 我的 ———————— 我的作品删除 ============== */
function del_work(id){
    $.ajax({
        url : url + '/user/del_work.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'id' : id
        },
        success: function(data){

            if(data.code == '0'){
                alert('删除成功！');
                myWork(1);
            }else{
                alert(data.message);
            }
        }
    });
}

/* ============= 我的 ———————— 添加我的作品 ============== */
function save_work(){

    var title = $('input[name="add_tit"]').val();
    var des = $('textarea[name="add_des"]').val();
    var link = $('input[name="add_link"]').val();
    var img=$("#attachForm2 input[type='hidden']").val();
    var reg=/^((ht|f)tps?):\/\/[\w\-]+(\.[\w\-]+)+([\w\-\.,@?^=%&:\/~\+#]*[\w\-\@?^=%&\/~\+#])?$/;
	if(!reg.test(link)){
    	alert("此网址格式不正确，请输入例如http://www.315pr.com格式的网址！")
    	return false;
    }
    if(isEmpty(title)){
        alert('内容不全请补齐！');
        return false;
    }
    if(isEmpty(des)){
        alert('内容不全请补齐！');
        return false;
    }
    if(img == '0'){
        img = '';
    }
    $.ajax({
        url : url + '/user/add_work.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'title' : title,
            'des' : des,
            'link' : link,
            'img' : img
        },
        success: function(data){

            if(data.code == '0'){
                alert('添加成功！');
                location.reload();
            }else{
                alert(data.message);
            }
        }
    });
    myWork(1);
}

function cancle_work(obj){
    $(obj).parents('.usercenter_editwork').hide().prev('li').show();
}

/* ============= 我的 ———— 添加子任务 ============== */
function addTask(){

    $("#demand_type1").change(function(){
        $('#demand_type2').empty();
        if($('#demand_type1 option:selected')){
            var demand_type1 =$('#demand_type1 option:selected').attr('value');
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

                    for(var i=0;i<dt.length;i++){
                        $('#demand_type2').append('<option value="'+ dt[i].id +'">'+ dt[i].name +'</option>');
                    }
                }
            });
        }
    });

    $('.demand-block-btn div').click(function(){
        var name = $('input[name="demandTit"]').val();
        var dt1 = $('#demand_type1').val();
        var dt1_v = $('#demand_type1 option:selected').text();
        var dt2 = $('#demand_type2').val();
        var dt2_v = $('#demand_type2 option:selected').text();
        var bud = $('input[name="demandPrice"]').val();
        var time = $('#date').val();
        var demandDes = $('#demandDes').val();

        var href = document.location.href;
//        alert(href);
        var str = href.split('task-')[1];
        demandId = str.substring(0,str.lastIndexOf('.'));
        if(dt1_v == '请选择'){
            alert('请选择您的任务类型！');
            return false;
        }
console.log($(this))
        $.ajax({
            url : url + '/user/add_task.shtml',
            type : "post",
            data : {
                'v' : '2.0',
                'source' : 2,
                'demandId': demandId,
                'title' : name,
                'serviceLv1Id' : dt1,
                'serviceLv1' : dt1_v,
                'serviceLv2Id' : dt2,
                'serviceLv2' : dt2_v,
                'budget' : bud,
                'endTime' : time,
                'describe' : demandDes,
                'remark' : ''
            },
            success: function(data){

                if(data.code == '0'){
                    alert('发布成功！');
                    history.go(-1);
                    window.location.href = document.referrer;
                }else{
                    alert(data.message);
                }
            }
        });

    });
    $('.task-block-btn div').click(function(){
    	var name = $('input[name="demandTit"]').val();
    	var dt1 = $('#demand_type1').val();
    	var dt1_v = $('#demand_type1 option:selected').text();
    	var dt2 = $('#demand_type2').val();
    	var dt2_v = $('#demand_type2 option:selected').text();
    	var bud = $('input[name="demandPrice"]').val();
    	var time = $('#date').val();
    	var demandDes = $('#demandDes').val();
    	
    	var href = document.location.href;
    	var str = href.split('task-')[1];
    	id = str.substring(0,str.lastIndexOf('.'));
    	if(dt1_v == '请选择'){
    		alert('请选择您的任务类型！');
    		return false;
    	}
    	console.log($(this))
    	$.ajax({
    		url : url + '/user/add_subtask.shtml',
    		type : "post",
    		data : {
    			'v' : '2.0',
    			'source' : 2,
    			'title' : name,
    			'serviceLv1Id' : dt1,
    			'serviceLv1' : dt1_v,
    			'serviceLv2Id' : dt2,
    			'serviceLv2' : dt2_v,
    			'budget' : bud,
    			'endTime' : time,
    			'describe' : demandDes,
    			'remark' : '',
    			'parentId' : id
    		},
    		success: function(data){
    			
    			if(data.code == '0'){
    				alert('发布成功！');
    				history.go(-1);
    				window.location.href = document.referrer;
    			}else{
    				alert(data.message);
    			}
    		}
    	});
    	
    });
}

/* ============= 我的 ———— 审核子任务 ============== */
function task_check(id){
    $.ajax({
        url : url + '/user/check_apply.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'id' : id
        },
        success: function(data){

            if(data.code == '0'){
                alert('分配成功!');
            }else{
                alert(data.message);
            }
        }
    });
}

/* ============= 发布需求 ============== */
function addDemand(){
	var dt1_v_date=[];
	var arr=[];
	$.ajax({
		url:url + '/demand/getWorkType.shtml',
		type:"post",
		success:function(e){
			dt1_v_data=e.data;
			arr=e.data.slice(0,15);
			for(var i=0;i<arr.length;i++){
				switch(i%4){
					case 0:
						$(".demand-block-box-spanright-industry span:eq(0)").html($(".demand-block-box-spanright-industry span:eq(0)").html()+"<em tid="+arr[i].id+">"+arr[i].channel_name+"</em>");
						break;
					case 1:
						$(".demand-block-box-spanright-industry span:eq(1)").html($(".demand-block-box-spanright-industry span:eq(1)").html()+"<em tid="+arr[i].id+">"+arr[i].channel_name+"</em>");
						break;
					case 2:
						$(".demand-block-box-spanright-industry span:eq(2)").html($(".demand-block-box-spanright-industry span:eq(2)").html()+"<em tid="+arr[i].id+">"+arr[i].channel_name+"</em>");
						break;
					case 3:
						$(".demand-block-box-spanright-industry span:eq(3)").html($(".demand-block-box-spanright-industry span:eq(3)").html()+"<em tid="+arr[i].id+">"+arr[i].channel_name+"</em>");
						break;	
				}
			}
			$(".demand-block-box-spanright-industry span:eq(3)").html($(".demand-block-box-spanright-industry span:eq(3)").html()+"<a id='work_data_show'>展开</a>");
				
		}
	})
	
	$('#submit_btn').click(function(){
    	var dtid = $('.demand-block-box-spanright:eq(0)').attr("id");  //类型
    	var dt1 = $('.demand-block-box-spanright:eq(0)').attr("tit");  //类型
    	var dt1_v = $('.demand-block-box-spanright:eq(1)').attr("tit");  //所属行业
    	var dt1_vId = $('.demand-block-box-spanright:eq(1)').attr("tid");  //所属行业
        var bud = $('.demand-block-box-spanright:eq(2)').attr("tit");      //项目开始时间
        var endDate = $('#pay_date').val();      
        var pic=$('#attachForm6 input[type="hidden"]').val();       //上传附件
        var demandDes = $('.demand-block-box-spanright:eq(4)').attr("tit");    //预算
        var isTicket=$('.demand-block-box-spanright:eq(5)').attr("tit");	//发票
        var officeRange=$('.demand-block-box-spanright:eq(7)').attr("tit");	//远程办公
        var remark=$('.demand-block-box-spanright-text:eq(0)').val();	//补填信息
        var companyDes=$('.demand-block-box2-spanright-input:eq(0) input').val();	//公司名称
        var productDes=$('.demand-block-box-spanright-text:eq(1)').val();	//公司简介
        var financing=$('.demand-block-box-spanright:eq(12)').attr("tit");	//公司融资阶段
        var companySize=$('.demand-block-box-spanright:eq(13)').attr("tit");	//公司规模
        var companyAdress=$('.demand-block-box2-spanright-input:eq(1) input').val();	//公司网址
        var contactName=$('.demand-block-box-spanright:eq(15) input:eq(0)').val();	//发布人姓名
        var job=$('.demand-block-box-spanright:eq(15) input:eq(1)').val();	//职位
        var contactEmail=$('.demand-block-box-spanright:eq(15) input:eq(2)').val();	//邮箱
        var contactMobile=$('.demand-block-box-spanright:eq(15) input:eq(3)').val();	//电话
//<<<<<<< .mine
        //        console.log(dt1+"      "+dt1_v+"      "+bud+"      "+endDate+"      "+demandDes+"      "+isTicket+"      "+workCity+"      "+officeRange+"      "+remark+"      "+companyDes+"      "+productDes+"      "+financing+"      "+companySize+"      "+companyAdress+"      "+contactName+"      "+job+"      "+contactEmail+"      "+contactMobile);
//=======
       
      //  console.log(dt1+"      "+dt1_v+"      "+bud+"      "+endDate+"      "+demandDes+"      "+isTicket+"      "+workCity+"      "+officeRange+"      "+remark+"      "+companyDes+"      "+productDes+"      "+financing+"      "+companySize+"      "+companyAdress+"      "+contactName+"      "+job+"      "+contactEmail+"      "+contactMobile);
//>>>>>>> .r1856
        
        if(productDes=="字数请控制在400字以内"){
        	productDes="";
        }
        if($('#demo-wrap-pr2').val()==""){
        	var workCity="";
        }else if($('#demo-wrap-pr2').val()!="" && $('#demo-wrap-ci2').val()==""){
        	var workCity=$('#demo-wrap-pr2').val()
        }else if($('#demo-wrap-pr2').val()!="" && $('#demo-wrap-ci2').val()!="" && $('#demo-wrap-co2').val()==""){
        	var workCity=$('#demo-wrap-pr2').val()+"/"+$('#demo-wrap-ci2').val() //工作地点
        }else{
        	var workCity=$('#demo-wrap-pr2').val()+"/"+$('#demo-wrap-ci2').val()+"/"+$('#demo-wrap-co2').val();  //工作地点
        }
        if(bud==1){
        	var nowdate=new Date()
        	bud=nowdate.getFullYear()+"-"+(nowdate.getMonth()+1)+"-"+nowdate.getDate()
        }else{
        	bud= $('.demand-block-box-spanright:eq(2)').attr("tit");
        }
        if(!(/^1[34578]\d{9}$/.test(contactMobile))){ 
            alert("手机号码有误，请重填");  
            return false; 
        }

        $.ajax({
            url : url + '/demand/save.shtml',
            type : "post",
            data : {
            	serviceLv1Id:dtid,    //需求类型id
        		serviceLv1:dt1,        //需求类型内容
        		channel:dt1_v,			//所属行业
        		channelId:dt1_vId,
        		createTime:bud,			//项目开始时间
        		endDate:endDate,		//需求交付时间
        		isTicket:isTicket,		//是否接受大票
        		budget:demandDes, //预算金额
        		workCity:workCity,		//工作地点
        		officeRange:officeRange,//是否接受远程办公
        		remark:remark,			//补填信息
        		attachment:pic,          //图片路径
        		companyDes:companyDes,	//公司名称
        		productDes:productDes,  //公司简介
        		financing:financing,	//公司融资阶段
        		companySize:companySize,//公司规模
        		companyAdress:companyAdress,//公司网址
        		contactName:contactName,	//发布人姓名
        		job:job,					//发布人职位
        		contactEmail:contactEmail,	//邮箱
        		contactMobile:contactMobile	//电话
            },
            success: function(data){

                if(data.code == '0'){
					console.log(data.data);
					sessionStorage.setItem('id',data.data)
                  //show_alert('提交成功');
					window.location.href =url+'/demand/release_suc.shtml';
                    // setTimeout(function () {
                        // ;
                    // },2000);

                }else{
                    alert(data.message);
                }
            }
        });

    });
}

//发布需求跳转弹出层
function showAlertJudge(){
	window.location.href = '/index.shtml'
}
//发布需求跳转弹出层
function demandDetails(){
	window.location.href = '/user/demand_info-2.0-'+sessionStorage.getItem('id')+'-2.shtml'
}

function effectDemand(){
    $.divSelect("#select_style","#select_value");
    $.divSelect("#budget_style","#budget_value");
    $.divSelect("#type_style","#type_value");

    $('#submit_effect').click(function(){
        var channelId = $('#select_value').val();
        var channelName = $('.select_value').html();
        var budget = $('#budget_value').val();
        var projectType = $('#type_value').val();
        var startDate = $('#strat_date').val();
        var endDate = $('#end_date').val();
        var companyDes = $('input[name="company"]').val();
        var productDes = $('input[name="infomation"]').val();
        var demandDes = $('#demandDes').val();

        if(isEmpty(channelId)){
            alert('请选择您的行业类型！');
            return false;
        }
        if(isEmpty(budget)){
            alert('请选择您的预算！');
            return false;
        }
        if(isEmpty(startDate)){
            alert('请选择您的需求交付日期！');
            return false;
        }
        if(isEmpty(endDate)){
            alert('请选择您的需求交付日期！');
            return false;
        }

        $.ajax({
            url : url + '/demand/save_as.shtml',
            type : "post",
            data : {
                'v' : '2.0',
                'source' : 2,
                'channelId' : channelId,
                'channelName' : channelName,
                'budget' : budget,
                'projectType' : projectType,
                'startDate' : startDate,
                'endDate' : endDate,
                'companyDes' : companyDes,
                'productDes' : productDes,
                'demandDes' : demandDes
            },
            success: function(data){

                if(data.code == '0'){
                    show_alert('提交成功');
                    setTimeout(function () {
                        window.location.href = '/index.shtml';
                    },2000);

                }else{
                    alert(data.message);
                }
            }
        });

    });
}

/* ============= 我的------邀请freeman ============== */
function invite(){
   $('.search-more').click(function(){
        $(this).toggleClass('active');
        $(this).siblings('.search-con').toggleClass('cur');
    });


    /*
	 * $('#channel span').each(function(){ if($(this).attr('data') ==
	 * $('input[name="channel"]').val()){ $('.search-tag').append('<span
	 * id="search_channel" data="'+ $(this).attr('data') +'">'+ $(this).html() + '
	 * X' +'</span>'); } }); $('#server span').each(function(){
	 * if($(this).attr('data') == $('input[name="server1_id"]').val()){
	 * $('.search-tag').append('<span id="search_server1" data="'+
	 * $(this).attr('data') +'">'+ $(this).html() + ' X' +'</span>'); } });
	 */

    $('#search_server2').click(function(){
        $(this).remove();
        match(1);
    });
    $('#search_server1').click(function(){
        $(this).remove();
        $('#search_server2').remove();
        $('.search-server').show();
        match(1);
    });
    $('#search_channel').click(function(){
        $(this).remove();
        $('.search-channel').show();
        match(1);
    });

    $('#channel span').each(function(){
		 
			var i =$(this).attr('data');
		//	var 
				console.log($(this).attr('data')==$('.delete'+i).attr('data'));
		 
				$(this).click(function(){ 
						$(this).parents('#search_channel').hide();
						var i =$(this).attr('data');
						if(!$('.delete'+i).attr('data')){
						$('.search-tag').append('<span id="search_channel" onclick="deletes('+$(this).attr('data')+')" class="delete'+$(this).attr('data')+'"  data="'+ $(this).attr('data') +'">'+ $(this).html() + ' X' +'</span>');
						}
				});
    });
    $('#server span').each(function(){
        $(this).click(function(){
            var demand_type1 = $(this).attr('data');
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

                    for(var i=0;i<dt.length;i++){
                        $('#demand_type2').append('<span data="'+ dt[i].id +'">'+ dt[i].name +'</span>');
                    }
                }
            });
            if(!$('.delete'+demand_type1).attr('data')){
            $('.search-tag').append('<span id="search_channel" onclick="deletes('+$(this).attr('data')+')" class="delete'+$(this).attr('data')+'" data="'+ $(this).attr('data') +'">'+ $(this).html() + ' X' +'</span>');
			}
        });
    });

   match(1);
}
	function deletes(i){
		 $('.delete'+i).remove();
        $('.search-channel').show();
        match(1);
	}

function match(pageNum){
    var ci = $('#search_channel').attr('data');
    var s1 = $('#search_server1').attr('data');
    var s2 = $('#search_server2').attr('data');
    var id = $('input[name="task_id"]').val();
    var s1v = $('#search_server1').text().split('X')[0];
    var s2v = $('#search_server2').text().split('X')[0];
    var civ = $('#search_channel').text().split('X')[0];
    var s = "";

    if(isEmpty(s2v)){
        s = s1v;
    }else{
        s = s1v + "- " + s2v;
    }


    console.log(s);
    var sch = $('input[name="query"]').val();

    if(!isEmpty(sch)){
        ci = '';
        s1 = '';
        s2 = '';
    }

    $('table tbody').empty();

    $.ajax({
        url : url + '/user/screen_freeman.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 9,
            'channel' : ci,
            'serviceTag1' : s1,
            'serviceTag2' : s2,
            'query' : sch
        },
        success : function (data) {
            var freemanlist = data.data.freemans;

            for(var i=0;i<freemanlist.length;i++){
                if(isEmpty(s)){
                    if(!isEmpty(freemanlist[i].services)){
                        s = freemanlist[i].services.split(',')[0];
                    }else{
                        s = '未填写';
                    }

                }
                if(isEmpty(civ)){
                    if(!isEmpty(freemanlist[i].channels)){
                        civ = freemanlist[i].channels[1];
                    }else{
                        civ = '未填写';
                    }

                }
                var f = '';
                if(!isEmpty(freemanlist[i].freemanName)){
                    f = freemanlist[i].freemanName;
                }else{
                    f = '未填写';
                }
                var href = document.location.href;
//                alert(href);
                var str = href.split('match-')[1];
                id = str.substring(0,str.lastIndexOf('.'));
//                alert(id);
                $('table tbody').append('<tr><td>'+ f +'</td><td>'+ civ +'</td><td>'+ s +'</td><td><span title="邀请" onclick="invite_freeman('+"'"+freemanlist[i].freemanId+"'"+','+"'"+id+"'"+')"><img src="'+url_img+'/user_4.png" title="邀请"/></span><span alt="详情" onclick="invite_del('+"'"+freemanlist[i].freemanId+"'"+');"><img src="'+url_img+'/user_3.png" title="详情"/></span></td></tr>');
            }

            if(data.data.totalCount%9 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/9)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/9)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/9));
                $('#page-box .num').text(parseInt(data.data.totalCount/9));
            }

            $('#page-box .total').text(data.data.totalCount);


            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    match(page)
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
        }
    });
}


function invite_freeman(fid,tid){
  $.ajax({
        url : url + '/user/invite.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'id' : tid,
            'freemanId' : fid
        },
        success : function (data) {

            if(data.code == '0'){
                alert('邀请成功！');
            }else{
                alert(data.message);
            }
        }
    });
}

function invite_del(fid){
   $('.invite-block').show();
    $('.invite_bg').show();

    $.ajax({
        url : url + '/user/freeman_del-{v}-{f}-{source}.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'f' : fid
        },
        success : function (data) {
            var f = data.data;

            var str1 = '';
            for(var i=0;i< f.channels.length;i++){
                str1 += '<span>'+ f.channels[i] +'</span>';
            }

            var str2 = '';
            for(var i=0;i< f.skills.length;i++){
                str2 += '<span>'+ f.skills[i] +'</span>';
            }

            var str3 = '';
            for(var i=0;i< f.works.length;i++){
                str3 += '<div><h4>'+ f.works[i].title +'</h4><p>'+ f.works[i].des +'</p><a href="'+ f.works[i].link +'">点击链接</a></div>';
            }

            $('.freemanDel-block-img').find('img').attr('src', f.headerpic);
            $('.freemanDel-block-name').html(f.freemanName);
            $('.freemanDel-block-channel').html(str1 +'<span>'+ f.workingLife +'</span><span>'+ f.position +'</span>');
            $('.freemanDel-block-me').find('dd').html(f.experience);
            $('.freemanDel-block-skill').html(str2);
            $('.freemanDel-block-works').html(str3);
        }
    });
}

/* ============= 申请干活 ============== */
function applyDemand(id){
    $.ajax({
        url : url + '/demand/apply.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'id' : id
        },
        success : function (data) {

            if(data.code == '0'){
                show_alert('申请成功！');
                setTimeout(function(){
                    window.location.href = window.location.href;
                },1000);
            }else{
                show_alert(data.message);
                setTimeout(function(){
                    $('#show_alert_bg').hide();
                    $('#show_alert').hide();
                },2000);
			}

        }
    });
}

/* ============= 筛选------分类 ============== */
function filter_fun(listName){
    var aLi = $('#filter-tit li');

    aLi.each(function(i){
        $(this).click(function(){
            $('.filter-block .filter-content').eq(i).addClass('active').show().siblings().removeClass('active').hide();
        });
    });
    $('.filter-content li').click(function(){
        var item_name = $(this).html();
        var item_id = $(this).attr('data');
        var item = $(this).parent().hide().attr('id');
        if(item == 'filter-content1'){
            aLi.eq(0).find('span').html(item_name).attr('data',item_id);
        }else{
            aLi.eq(1).find('span').html(item_name).attr('data',item_id);
        }
        listName();
        // freemanlist();
        // smart_Load();
    });
}

/* ============= 导航------需求列表 ============== */
function demand_status(num){
	switch(num){
	case 0:
		$(".demandlist .content .img_pos").addClass(".img_pos_f00")
		return "招募中";
		break;
	case 1:
		return "执行中";
		break;
	case 2:
		return "已完成";
		break;
	case 4:
		return "对接中";
		break;
	}
}
function demandList(pageNum){

    filter_fun(demandlist);
    demandlist(pageNum);
    // freemanlist(pageNum);
}
function demandlist(pageNum){
    var servicetag1 = $('#filter-tit li').eq(0).find('span').attr('data');
    var status = $('#filter-tit li').eq(1).find('span').attr('data');
    if(servicetag1 == ''){
        servicetag1 = '';
    };
    if(status == ''){
        status = '';
    }

    $.ajax({
        url : url + '/demand/demands.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 9,
            'status' : status,
            'serviceTag1' : servicetag1
        },
        success : function (data) {
            // var dataset = $.parseJSON(data);
            var demandlist = data.data.list;

            $('.demandlist ul').empty();
            var servicezifu=0;
            for(var i=0;i<demandlist.length;i++){
            	if(!isEmpty(demandlist[i].serviceTag1) ){
                	var strlength=demandlist[i].serviceTag1 +'-'+ demandlist[i].serviceTag2 +'' +demandlist[i].channel;
    	            if(!isEmpty(strlength)){
    	            	servicezifu=strlength.replace(/[^\x00-\xFF]/g,'**').length;
    	            }
                }
	            if(isEmpty(demandlist[i].channel)){
		            demandlist[i].channel = '保密';
	            }
	            if(demandlist[i].status==0){
	            	var img_bg="img_pos_f00"
	            }else if(demandlist[i].status==1){
	            	var img_bg="img_pos_000"
	            }else if(demandlist[i].status==2){
	            	var img_bg="img_pos_ccc"
	            }else if(demandlist[i].status==4){
	            	var img_bg="img_pos_green"
	            }
	            if(servicezifu<20){
	            	$('.demandlist ul').append('<li><a href="'+url+'/demand/info-2.0-'+ demandlist[i].id +'-2.shtml"><div class="content"><div class="img_pos '+img_bg+'">'+demand_status(demandlist[i].status)+'</div><h3>'+demandlist[i].title+'</h3><p class="end_time">发布时间：</p><div class="demandlist-date">'+ timeTransformation(demandlist[i].createTime) +'</div><div class="demandlist-d"><span>'+ (demandlist[i].serviceTag1 +'-'+ demandlist[i].serviceTag2) +'</span><span>'+ (demandlist[i].channel) +'</span></div><div class="demandlist-p">￥'+demandlist[i].budget+'</div><div class="demandlist-c"><span>已申请<i>'+ demandlist[i].applyCount +'</i>人</span><span>已浏览<i>'+demandlist[i].seeCount+'</i>人</span></div></div></a></li>');
	            }else{
	            	/*$('.demandlist ul').append('<li><a href="'+url+'/demand/info-2.0-'+ demandlist[i].id +'-2.shtml"><div class="img"><img src="'+ url_img +'/demand_bg.png" alt=""/></div><div class="icon"><img src="'+ url_img +'/'+ server_icon(demandlist[i].service1Id) +'.png" alt=""/></div><div class="content"><h3>'+ demandlist[i].title +'</h3><div class="demandlist-p">￥'+ demandlist[i].budget +'</div><div class="demandlist-d"><span>'+ (demandlist[i].serviceTag1 +'-'+ demandlist[i].serviceTag2).slice(0,8) +'</span><span>'+ (demandlist[i].channel).slice(0,6) +'</span></div>'+getDemandStatusList(demandlist[i].status)+'<div class="demandlist-c"><span>已申请<em><i>'+ demandlist[i].applyCount +'</i>人</em></span><span>已浏览<em><i>'+ demandlist[i].seeCount +'</i>人</em></span></div><div class="demandlist-date">完成时间：'+ demandlist[i].endTime +'</div></div></a></li>');*/
	            	$('.demandlist ul').append('<li><a href="'+url+'/demand/info-2.0-'+ demandlist[i].id +'-2.shtml"><div class="content"><div class="img_pos '+img_bg+'">'+demand_status(demandlist[i].status)+'</div><h3>'+demandlist[i].title+'</h3><p class="end_time">发布时间：</p><div class="demandlist-date">'+ timeTransformation(demandlist[i].createTime) +'</div><div class="demandlist-d"><span>'+ (demandlist[i].serviceTag1 +'-'+ demandlist[i].serviceTag2).slice(0,8) +'</span><span>'+ (demandlist[i].channel).slice(0,6) +'</span></div><div class="demandlist-p">￥'+demandlist[i].budget+'</div><div class="demandlist-c"><span>已申请<i>'+ demandlist[i].applyCount +'</i>人</span><span>已浏览<i>'+demandlist[i].seeCount+'</i>人</span></div></div></a></li>');
	            }
	            servicezifu=0;
            }
            
           var aLi = $('.demandlist li');
            for(var i=0;i<aLi.length;i++){
                if(i%3 == 2){
                    aLi[i].style.marginRight = '0';
                }
            }

            if(data.data.totalCount%9 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/9)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/9)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/9));
                $('#page-box .num').text(parseInt(data.data.totalCount/9));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();
                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    demandList(page);
                }
            });
        }
    });
}


/* ============= 导航------案例列表 ============== */

// function caselist(){
//     caseList();
// }

// function caseList(pageNum){

//     $('.caselist ul').empty();

//     $.ajax({
//         url : url + '/case/cases.shtml',
//         type : "post",
//         data : {
//             'v' : '2.0',
//             'source' : 2,
//             'page' : pageNum,
//             'limit' : 9
//         },
//         success : function (data) {
//             var caselist = data.data.list;


//             if(caselist.length>0){
//                 for(var i=0;i<caselist.length;i++){
//                     var tags = '';
//                     if(isEmpty(caselist[i].tags)){
//                         tags = ''
//                     }else{
//                         tags = caselist[i].tags;
//                     }
//                     $('.caselist ul').append('<li><a href="'+url+'/case/info-2.0-'+ caselist[i].id +'-2.shtml"><div class="caselist-img"><img src="'+ caselist[i].showImage +'" alt="'+ caselist[i].title +'" /></div><div class="caselist-content"><h3>'+ caselist[i].title.slice(0,28) +'</h3><div>'+ tags +'</div></div></a></li>');
//                 }
//             }

//             $('.caselist li .caselist-img').height($('.caselist li .caselist-img').width()*240/420);
//             var aLi = $('.caselist li');
//             for(var i=0;i<aLi.length;i++){
//                 if(i%3 == 2){
//                     aLi[i].style.marginRight = '0';
//                 }
//             }

//             if(data.data.totalCount == 0){
//                 $('#page-box').hide();
//             }

//             if(data.data.totalCount%9 >0){
//                 $('input[type="hidden"]').val(parseInt(data.data.totalCount/9)+1);
//                 $('#page-box .num').text(parseInt(data.data.totalCount/9)+1);
//             }else{
//                 $('input[type="hidden"]').val(parseInt(data.data.totalCount/9));
//                 $('#page-box .num').text(parseInt(data.data.totalCount/9));
//             }

//             $('#page-box .total').text(data.data.totalCount);

//             $('.page').pagination({
//                 coping:true,
//                 count:2,
//                 homePage:'首页',
//                 endPage:'末页',
//                 prevContent:'上页',
//                 nextContent:'下页',
//                 current: pageNum,
//                 callback:function(options){
//                     var page = options.getCurrent();

//                     $('.now').text(page);
//                     // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
//                     caseList(page);
//                 }
//             });
//         }
//     });
// }


/* ============= 我的 ------ 媒体列表 ============== */

function report(){
    reportList();
}
function reportList(pageNum){
    $('#report').empty();

    $.ajax({
        url : url + '/report_list.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' :15
        },
        success : function (data) {
            var report = data.data.list;

            for(var i=0;i<report.length;i++){
                /*
				 * var tags = ''; if(isEmpty(caselist[i].tags)){ tags = ''
				 * }else{ tags = caselist[i].tags; }
				 */
                $('#report').append('<dl><dt><img src="'+ report[i].image +'"/></dt><dd><div>'+ report[i].title +'</div><span>来自：'+ report[i].source +'</span><a href="'+ report[i].link +'" target="_blank">查看详情</a> </dd></dl>');
            }

            $('.report-block dt').height($('.report-block dt').width()*330/400);
            $('.report-block dd').height($('.report-block dt').width()*330/400);

            if(data.data.totalCount == 0){
                $('#page-box').hide();
            }

            if(data.data.totalCount%9 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/9)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/9)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/9));
                $('#page-box .num').text(parseInt(data.data.totalCount/9));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    reportList(page);
                }
            });
        }
    });
}

/* ============= 导航------freeman列表 ============== */

function freemanList(pageNum){

    filter_fun(freemanlist);
    freemanlist(pageNum);

}

function freemanlist(pageNum){
    var servicetag1 = $('#filter-tit li').eq(0).find('span').attr('data');
    var status = $('#filter-tit li').eq(1).find('span').attr('data');
    if(servicetag1 == ''){
        servicetag1 = '';
    };
    if(status == ''){
        status = '';
    }

    $('.freemanlist ul').empty();

    $.ajax({
        url : url + '/freeman/freemans.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 12,
            'channel' : status,
            'serviceTag1' : servicetag1
        },
        success : function (data) {
            var freemanlist = data.data.freemans;
            if(!isEmpty(freemanlist)){
            	for(var i=0;i<freemanlist.length;i++){
                	if(!isEmpty(freemanlist[i].freemanName)){
    	            	if(freemanlist[i].freemanName.length>8){
    	            		if(!isEmpty(freemanlist[i].services)){
    	            			if(freemanlist[i].services.split(',').length > 0){
    	            				/*$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substring(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>'+freemanlist[i].services.split(',')[0]+'</span></div></div></a></li>');*/
    	            				$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt="三点一刻智能协同营销平台" /></div><div class="freemanlist-content"><h3>'+freemanlist[i].freemanName.substring(0,8)+'...'+'</h3><div>服务标签<span>'+freemanlist[i].services.split(',')[0]+'</span></div><p>'+freemanlist[i].experience +'</p><p style="float:right">完成单数：<span style="color:#f00">'+ freemanlist[i].orderCount +'单</span></p><i class="clear"></i></div></a></li>');
    	            			}else{
    	            				/*$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substring(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');*/
    	            				$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt="三点一刻智能协同营销平台" /></div><div class="freemanlist-content"><h3>'+freemanlist[i].freemanName.substring(0,8)+'...'+'</h3><div>服务标签<span>完善中</span></div><p style="float:right">完成单数：<span style="color:#f00">'+ freemanlist[i].orderCount +'单</span></p><i class="clear"></i></div></a></li>');
    	            			}
    	            		}else{
    	            			/*$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substring(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');*/
    	            			$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt="三点一刻智能协同营销平台" /></div><div class="freemanlist-content"><h3>'+freemanlist[i].freemanName.substring(0,8)+'...'+'</h3><div>服务标签<span>完善中</span></div><p style="float:right">完成单数：<span style="color:#f00">'+ freemanlist[i].orderCount +'单</span></p><i class="clear"></i></div></a></li>');
    	            		}
    	            	}else{
/*    	            		if(!isEmpty(freemanlist[i].services)){
    	            			if(freemanlist[i].services.split(',').length > 0){
    	            				$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>'+freemanlist[i].services.split(',')[0]+'</span></div></div></a></li>');
    	            			}else{
    	            				$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');
    	            			}
    	            		}else{
    	            			$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');
    	            		}*/
    	            		if(!isEmpty(freemanlist[i].services)){
    	            			if(freemanlist[i].services.split(',').length > 0){
    	            				/*$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substring(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>'+freemanlist[i].services.split(',')[0]+'</span></div></div></a></li>');*/
    	            				$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt="三点一刻智能协同营销平台" /></div><div class="freemanlist-content"><h3>'+freemanlist[i].freemanName+'</h3><div>服务标签<span>'+freemanlist[i].services.split(',')[0]+'</span></div><p>'+freemanlist[i].experience +'</p><p style="float:right">完成单数：<span style="color:#f00">'+ freemanlist[i].orderCount +'单</span></p><i class="clear"></i></div></a></li>');
    	            			}else{
    	            				/*$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substring(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');*/
    	            				$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt="三点一刻智能协同营销平台" /></div><div class="freemanlist-content"><h3>'+freemanlist[i].freemanName+'</h3><div>服务标签<span>完善中</span></div><p style="float:right">完成单数：<span style="color:#f00">'+ freemanlist[i].orderCount +'单</span></p><i class="clear"></i></div></a></li>');
    	            			}
    	            		}else{
    	            			/*$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substring(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');*/
    	            			$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt="三点一刻智能协同营销平台" /></div><div class="freemanlist-content"><h3>'+freemanlist[i].freemanName+'</h3><div>服务标签<span>完善中</span></div><p style="float:right">完成单数：<span style="color:#f00">'+ freemanlist[i].orderCount +'单</span></p><i class="clear"></i></div></a></li>');
    	            		}
    	            	}
                	}else{
                		/*$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>&nbsp;&nbsp;<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');*/
                		$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt="三点一刻智能协同营销平台" /></div><div class="freemanlist-content"><h3>&nbsp;&nbsp;</h3><div>服务标签<span>完善中</span></div><p style="float:right">完成单数：<span style="color:#f00">'+ freemanlist[i].orderCount +'单</span></p><i class="clear"></i></div></a></li>');
                	}
                	//$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substring(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');
//                   if(freemanlist[i].freemanName.length< 8){
//    					if(!isEmpty(freemanlist[i].services && freemanlist[i].services.split(',').length > 1)){
//    						$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>'+ freemanlist[i].services.split(',')[0] +'</span></div></div></a></li>');
//    							
//    					}else if(!isEmpty(freemanlist[i].services)  && freemanlist[i].services.split(',').length == 1){
//    						$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>'+ freemanlist[i].services +'</span><span>&nbsp;</span></div></div></a></li>');
//    					}else{
//    						$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');
//    					}
//    					//$('.freemanlist ul li:nth-of-type(4n)').css('marginRight','0');
//    				}else{
//    					
//    					if(!isEmpty(freemanlist[i].services && freemanlist[i].services.split(',').length > 1)){
//    						$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substr(0,8)+'...'+'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>'+ freemanlist[i].services.split(',')[0] +'</span></div></div></a></li>');
//    							
//    					}else if(!isEmpty(freemanlist[i].services)  && freemanlist[i].services.split(',').length == 1){
//    						$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substr(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>'+ freemanlist[i].services +'</span><span>&nbsp;</span></div></div></a></li>');
//    					}else{
//    						$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substr(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');
//    					}
//    					
//    					//$('.freemanlist ul li:nth-of-type(4n)').css('marginRight','0');
//    					
//    				}
                }
            }
           /* $('.freemanlist li img').height($('.freemanlist li img').width());
           */ var aLi = $('.freemanlist li');
            for(var i=0;i<aLi.length;i++){
                if(i%3 == 2){
                    aLi[i].style.marginRight = '0';
                }
            }

            if(data.data.totalCount%12 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/12)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12));
                $('#page-box .num').text(parseInt(data.data.totalCount/12));
            }

            $('#page-box .total').text(data.data.totalCount);


            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    freemanList(page)
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
        }
    });
}

/* ============= 导航------特惠营销列表 ============== */

function packageList(pageNum){

//    filter_fun(packagelist);
    packagelist(pageNum);
    // freemanlist(pageNum);
}
function packagelist(pageNum){
    $.ajax({
        url : url + '/package/list.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'pageNo' : pageNum,
            'pageSize' : 9,
        },
        success : function (data) {
            // var dataset = $.parseJSON(data);
            var packagelist = data.data.list;

            $('.demandlist ul').empty();

            for(var i=0;i<packagelist.length;i++){
	            
	            if(isEmpty(packagelist[i].channel)){
		            packagelist[i].channel = '保密';
	            }
 
	            $('.demandlist ul').append('<li class="addPreferentialList"><a href="'+url+'/package/'+ packagelist[i].id +'.shtml"><div class="img"><img class="img" src="'+admin_url+packagelist[i].image+'" alt=""/></div><div class="content"><div class="title">'+ packagelist[i].title +'</div><div class="content1">'+ packagelist[i].brief+'</div> <div class="seekType"><em style="color:#ff5454">'+ packagelist[i].visitCount +'</em>人咨询</div><div class="priceText" >参考价<em style="color:#ff5454;font-size:18px;">'+ packagelist[i].prePrice +'</em></div></div></a></li>'); 
            }
            var aLi = $('.demandlist li');
            for(var i=0;i<aLi.length;i++){
                if(i%3 == 2){
                    aLi[i].style.marginRight = '0';
                }
            }

            if(data.data.totalCount%9 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/9)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/9)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/9));
                $('#page-box .num').text(parseInt(data.data.totalCount/9));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();
                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    packageList(page);
                }
            });
        }
    });
}

/* ============= 导航------新闻报道列表 ============== */

function newsReportList(){
	newsReportList(pageNum);
}

function newsReportList(pageNum){

	
	//毫秒转换日期
	Date.prototype.format = function (format) { 
	    var o = { 
	    "M+": this.getMonth() + 1, 
	    "d+": this.getDate(), 
	    "H+": this.getHours(), 
	    "m+": this.getMinutes(), 
	    "s+": this.getSeconds(), 
	    "q+": Math.floor((this.getMonth() + 3) / 3), 
	    "S": this.getMilliseconds() 
	    } 
	    if (/(y+)/.test(format)) { 
	    format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length)); 
	    } 
	    for (var k in o) { 
	        if (new RegExp("(" + k + ")").test(format)) { 
	            format = format.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k] : ("00" + o[k]).substr(("" + o[k]).length)); 
	        } 
	    } 
	    return format; 
	}
	var title = $('input[name="search"]').val();
//	alert(title);
    $.ajax({
        url : url + '/report/list.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'pageNo' : pageNum,
            'pageSize' : 9,
            'title' : title
        },
        success : function (data) {
            var reportlist = data.data.list;


            $('.demandlist ul').empty();

            for(var i=0;i<reportlist.length;i++){
            	if(reportlist[i].id>=36){
    				reportlist[i].link="/report/"+reportlist[i].id+".shtml"
    			}
            	var temp = new Date(parseInt(reportlist[i].createTime)); 
                //格式化时间
                var myDate = temp.format('yyyy-MM-dd');
                if(reportlist[i].id>36){
					link="/report/"+reportlist[i].id+".shtml"
				}else{
					link=reportlist[i].link
				}
            	$('.demandlist ul').append('<li class="addPreferentialList"><a href="'+link+'"><div class="img"><img class="img" src="'+admin_url+reportlist[i].image+'" alt=""/></div><div class="content"><div class="title">'+ reportlist[i].title +'</div><div class="priceText" ><em font-size:10px;">来自:'+ reportlist[i].source +'</em></div><div class="priceText" style="text-align:right;"><em font-size:10px;">'+myDate+'</em></div></div></a></li>'); 
                }
            var aLi = $('.demandlist li');
            for(var i=0;i<aLi.length;i++){
                if(i%3 == 2){
                    aLi[i].style.marginRight = '0';
                }
            }

            if(data.data.totalCount%9 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/9)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/9)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/9));
                $('#page-box .num').text(parseInt(data.data.totalCount/9));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();
                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    newsReportList(page);
                }
            });
        }
    });
}

/* ============= 导航------媒介列表 ============== */

function smart(pageNum){
    // filter_fun(smart_Load);
    
    $('.more').unbind('click').click(function(event){
	    if($(this).hasClass('on')){
		    $(this).removeClass('on').parents('dl').css('height','28px');
	    }else{
		    $(this).addClass('on').parents('dl').css('height','auto'); 
	    }
    });
    
    $('#fans_submit').click(function(){
	    smart_Load(pageNum);
    });
    $('#price_submit').click(function(){
	    smart_Load(pageNum);
    });
    $('.search-form1 button').click(function(){
	    $('.channel dd').each(function(){
		    $(this).removeClass("active");
	    });
	    $('.range dd').each(function(){
		    $(this).removeClass("active");
	    });
	    $('.type dd').each(function(){
		    $(this).removeClass("active");
	    });
	    var fcount_s = '';
		var fcount_e = '';
		var price_s = '';
		var price_e = '';
		var fsort = '';
		var psort = '';
		
	    smart_Load(pageNum);
    });
    
    $('.style_change').unbind('click').click(function(){
	    if($(this).hasClass('on')){
		    $(this).removeClass('on');
	    }else{
		    $(this).addClass('on');
	    }
	    smart_Load(pageNum);
    });
    $('.sort_sel').unbind('click').click(function(){
	    if($(this).find('ul').hasClass('curr')){
		    $(this).find('ul').removeClass('curr');
	    }else{
		    $(this).find('ul').addClass('curr');
	    }
    });
    $('.sort_sel li').click(function(){
	    $(this).parent('ul').prev('span').html($(this).html()).attr('title',$(this).attr('title'));
	    smart_Load(pageNum);
    });
    
    $(".search_block_click dd").click(function() {
	    $(this).addClass("active").siblings().removeClass("active");
	    smart_Load(pageNum);
    });
    
    smart_Load(pageNum);
}

function smart_Load(pageNum){
	var classify = '';
	
	$('#classify dd').each(function(){
		if($(this).hasClass('active')){
		    classify = $(this).attr('data');
	    }
	});
    
    $('.smart ul').empty();
    
    switch(parseInt(classify)){
	    case 1 : 
		    microblogList(pageNum);
		    break;
		case 2 :
			wechatList(pageNum);
			break;
		case 3 :
			newsList(pageNum);
			break;
		case 4 :
			paperkList(pageNum);
			break;
		case 5 :
			networkList(pageNum);
			break;
		case 6 :
			vedioList(pageNum);
			break;
		case 7 :
			kolList(pageNum);
			break;
		case 8 :
			communityList(pageNum);
			break;
		case 9 :
			bbsList(pageNum);
			break;
		case 10 :
			cpadvertList(pageNum);
			break;
		default : 
			microblogList(pageNum);
    }

}


/* ============= 媒体：微信分类 ======== */
function wechatList(pageNum){
	
	var channelId = '';
	$('#channel dd').each(function(){
		if($(this).hasClass('active')){
		    channelId = $(this).attr('data');
	    }
	});
	
	var code = '';
	$('#range dd').each(function(){
		if($(this).hasClass('active')){
		    code = $(this).attr('data');
	    }
	});
	
	
	var acountType = '';
	$('#type dd').each(function(){
		if($(this).hasClass('active')){
		    acountType = $(this).attr('data');
	    }
	});
	
	
	var fcount_s = $('#fans_start').val();
	var fcount_e = $('#fans_end').val();
	var price_s = $('#price_start').val();
	var price_e = $('#price_end').val();
	var fsort = $('.sort_fans span').attr('title');
	var psort = $('.sort_price span').attr('title');
	var query = $('input[name="search"]').val();
	
	if(isEmpty(fsort)){
		fsort = '';
	}
	if(isEmpty(psort)){
		psort = '';
	}
	
	
	$.ajax({
        url : url + '/smart/wechat_list.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 12,
            'channelId' : channelId,
            'code' : code,
            'acountType' : acountType,
            'fcount_s' : fcount_s,
            'fcount_e' : fcount_e,
            'price_s' : price_s,
            'price_e' : price_e,
            'fsort' : fsort,
            'psort' : psort,
            'query' : query
        },
        success : function (data) {
            var wx = data.data.rows;
            
            if($('.style_change').hasClass('on')){
	            
	            for(var i=0;i<wx.length;i++){
		            
		            var fans = Math.round(wx[i].fansCount/10000).toFixed(2);
		            var read = Math.round(wx[i].readCount/10000).toFixed(2);
                
	                $('.smart ul.wx').append('<li class="grid"><span class="grid_img"><img src="'+ wx[i].logo +'" alt="" /></span><span class="grid_name">'+ wx[i].name +'</span><span class="grid_channel">'+ wx[i].channel +'</span><span class="grid_id">ID.'+ wx[i].account +'</span><span class="grid_area">'+ wx[i].area +'</span><div><span class="grid_fans"><img src="'+ url_img +'fans.png"/>'+ fans +'万</span><span class="grid_read"><img src="'+ url_img +'read.png"/>'+ read +'万</span></div></li>');
	                $('.smart ul.wx li:nth-of-type(4n)').css('marginRight','0');
	            }
	            
            }else{
	            $('.smart ul.wx').append('<li class="smart_tit"><span>LOGO</span><span>名称</span><span>ID号</span><span>行业</span><span>地区</span><span>粉丝数</span><span>阅读量</span></li>');
	            for(var i=0;i<wx.length;i++){
	                
	                $('.smart ul.wx').append('<li><span class="smart_img"><img src="'+ wx[i].logo +'" alt="" /></span><span>'+ wx[i].name +'</span><span>'+ wx[i].account +'</span><span>'+ wx[i].channel +'</span><span>'+ wx[i].area +'</span><span>'+ wx[i].fansCount +'</span><span>'+ wx[i].readCount +'</span></li>');
	                
	            }

            }

            if(data.data.totalCount%12 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/12)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12));
                $('#page-box .num').text(parseInt(data.data.totalCount/12));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    smart(page);
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
        }
    });
}

/* ============= 媒体：微博分类 ======== */
function microblogList(pageNum){
	
	var channelId = '';
	$('#channel dd').each(function(){
		if($(this).hasClass('active')){
		    channelId = $(this).attr('data');
	    }
	});
	
	var code = '';
	$('#range dd').each(function(){
		if($(this).hasClass('active')){
		    code = $(this).attr('data');
	    }
	});
	
	
	var acountType = '';
	$('#type dd').each(function(){
		if($(this).hasClass('active')){
		    acountType = $(this).attr('data');
	    }
	});
	
	
	var fcount_s = $('#fans_start').val();
	var fcount_e = $('#fans_end').val();
	var price_s = $('#price_start').val();
	var price_e = $('#price_end').val();
	var fsort = $('.sort_fans span').attr('title');
	var psort = $('.sort_price span').attr('title');
	var query = $('input[name="search"]').val();
	
	if(isEmpty(fsort)){
		fsort = '';
	}
	if(isEmpty(psort)){
		psort = '';
	}
	
	
	$.ajax({
        url : url + '/smart/microblog_list.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 12,
            'channelId' : channelId,
            'code' : code,
            'acountType' : acountType,
            'fcount_s' : fcount_s,
            'fcount_e' : fcount_e,
            'price_s' : price_s,
            'price_e' : price_e,
            'fsort' : fsort,
            'psort' : psort,
            'query' : query
        },
        success : function (data) {
            var wx = data.data.rows;
            
            if($('.style_change').hasClass('on')){
	            
	            for(var i=0;i<wx.length;i++){
		            
		            var fans = Math.round(wx[i].fansCount/10000).toFixed(2);
                
	                $('.smart ul.wb').append('<li class="grid"><span class="grid_img"><img src="'+ wx[i].logo +'" alt="" /></span><span class="grid_name">'+ wx[i].name +'</span><span class="grid_channel">'+ wx[i].channel +'</span><span class="grid_area">'+ wx[i].area +'</span><div><span class="grid_fans"><img src="'+ url_img +'fans.png"/>'+ fans +'万</span><span class="grid_read"><img src="'+ url_img +'ralay.png"/>'+ wx[i].praiseCount +'</span></div></li>');
	                $('.smart ul.wb li:nth-of-type(4n)').css('marginRight','0');
	            }
	            
            }else{
	            $('.smart ul.wb').append('<li class="smart_tit"><span>LOGO</span><span>名称</span><span>行业</span><span>地区</span><span>粉丝数</span><span>转发量</span></li>');
	            for(var i=0;i<wx.length;i++){
	                
	                $('.smart ul.wb').append('<li><span class="smart_img"><img src="'+ wx[i].logo +'" alt="" /></span><span>'+ wx[i].name +'</span><span>'+ wx[i].channel +'</span><span>'+ wx[i].area +'</span><span>'+ wx[i].fansCount +'</span><span>'+ wx[i].praiseCount +'</span></li>');
	                
	            }

            }

            if(data.data.totalCount%12 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/12)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12));
                $('#page-box .num').text(parseInt(data.data.totalCount/12));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    smart(page);
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
        }
    });
}

/* ============= 媒体：新闻客户端分类 ======== */
function newsList(pageNum){
	
	var channelId = '';
	$('#channel dd').each(function(){
		if($(this).hasClass('active')){
		    channelId = $(this).attr('data');
	    }
	});
	
	var code = '';
	$('#range dd').each(function(){
		if($(this).hasClass('active')){
		    code = $(this).attr('data');
	    }
	});
	
	
	var acountType = '';
	$('#type dd').each(function(){
		if($(this).hasClass('active')){
		    acountType = $(this).attr('data');
	    }
	});
	
	
	var fcount_s = $('#fans_start').val();
	var fcount_e = $('#fans_end').val();
	var price_s = $('#price_start').val();
	var price_e = $('#price_end').val();
	var fsort = $('.sort_fans span').attr('title');
	var psort = $('.sort_price span').attr('title');
	var query = $('input[name="search"]').val();
	
	if(isEmpty(fsort)){
		fsort = '';
	}
	if(isEmpty(psort)){
		psort = '';
	}
	
	
	$.ajax({
        url : url + '/smart/news_list.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 12,
            'channelId' : channelId,
            'code' : code,
            'acountType' : acountType,
            'fcount_s' : fcount_s,
            'fcount_e' : fcount_e,
            'price_s' : price_s,
            'price_e' : price_e,
            'fsort' : fsort,
            'psort' : psort,
            'query' : query
        },
        success : function (data) {
            var wx = data.data.rows;
            
            if($('.style_change').hasClass('on')){
	            
	            for(var i=0;i<wx.length;i++){
		            
		            var fans = Math.round(wx[i].fansCount/10000).toFixed(2);
                
	                $('.smart ul.news').append('<li class="grid"><span class="grid_img"><img src="'+ wx[i].logo +'" alt="" /></span><span class="grid_name">'+ wx[i].name +'</span><span class="grid_channel">'+ wx[i].channel +'</span><span class="grid_id">'+ wx[i].platformType +'</span><span class="grid_area">'+ wx[i].area +'</span><div><span class="grid_fans"><img src="'+ url_img +'fans.png"/>'+ fans +'万</span><span class="grid_read">类型：'+ wx[i].type +'</span></div></li>');
	                $('.smart ul.news li:nth-of-type(4n)').css('marginRight','0');
	            }
	            
            }else{
	            $('.smart ul.news').append('<li class="smart_tit"><span>LOGO</span><span>名称</span><span>行业</span><span>地区</span><span>发布平台</span><span>粉丝数</span><span>账号类型</span></li>');
	            for(var i=0;i<wx.length;i++){
	                
	                $('.smart ul.news').append('<li><span class="smart_img"><img src="'+ wx[i].logo +'" alt="" /></span><span>'+ wx[i].name +'</span><span>'+ wx[i].channel +'</span><span>'+ wx[i].area +'</span><span>'+ wx[i].platformType +'</span><span>'+ wx[i].fansCount +'</span><span>'+ wx[i].type +'</span></li>');
	                
	            }

            }

            if(data.data.totalCount%12 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/12)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12));
                $('#page-box .num').text(parseInt(data.data.totalCount/12));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    smart(page);
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
        }
    });
}

/* ============= 媒体：纸质分类 ======== */
function paperkList(pageNum){

    var channelId = '';
    $('#channel dd').each(function(){
        if($(this).hasClass('active')){
            channelId = $(this).attr('data');
        }
    });

    var code = '';
    $('#range dd').each(function(){
        if($(this).hasClass('active')){
            code = $(this).attr('data');
        }
    });


    var acountType = '';
    $('#type dd').each(function(){
        if($(this).hasClass('active')){
            acountType = $(this).attr('data');
        }
    });


    var fcount_s = $('#fans_start').val();
    var fcount_e = $('#fans_end').val();
    var price_s = $('#price_start').val();
    var price_e = $('#price_end').val();
    var fsort = $('.sort_fans span').attr('title');
    var psort = $('.sort_price span').attr('title');
    var query = $('input[name="search"]').val();

    if(isEmpty(fsort)){
        fsort = '';
    }
    if(isEmpty(psort)){
        psort = '';
    }


    $.ajax({
        url : url + '/smart/paper_list.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 12,
            'channelId' : channelId,
            'code' : code,
            'acountType' : acountType,
            'fcount_s' : fcount_s,
            'fcount_e' : fcount_e,
            'price_s' : price_s,
            'price_e' : price_e,
            'fsort' : fsort,
            'psort' : psort,
            'query' : query
        },
        success : function (data) {
            var wx = data.data.rows;

            if($('.style_change').hasClass('on')){

                for(var i=0;i<wx.length;i++){

                    var fans = Math.round(wx[i].fansCount/10000).toFixed(2);

                    $('.smart ul.paperk').append('<li class="grid"><span class="grid_img"><img src="'+ wx[i].logo +'" alt="" /></span><span class="grid_name">'+ wx[i].name +'</span><span class="grid_channel">'+ wx[i].channel +'</span><span class="grid_area">'+ wx[i].area +'</span><div><span class="grid_fans">'+ wx[i].audiences +'</span><span class="grid_read">'+ wx[i].type +'</span></div></li>');
                    $('.smart ul.paperk li:nth-of-type(4n)').css('marginRight','0');
                }

            }else{
                $('.smart ul.paperk').append('<li class="smart_tit"><span>LOGO</span><span>名称</span><span>行业</span><span>地区</span><span>受众群体</span><span>账号类型</span></li>');
                for(var i=0;i<wx.length;i++){

                    $('.smart ul.paperk').append('<li><span class="smart_img"><img src="'+ wx[i].logo +'" alt="" /></span><span>'+ wx[i].name +'</span><span>'+ wx[i].channel +'</span><span>'+ wx[i].area +'</span><span>'+ wx[i].audiences +'</span><span>'+ wx[i].type +'</span></li>');

                }

            }

            if(data.data.totalCount%12 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/12)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12));
                $('#page-box .num').text(parseInt(data.data.totalCount/12));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    smart(page);
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
        }
    });
}

/* ============= 媒体：网络分类 ======== */
function networkList(pageNum){

    var channelId = '';
    $('#channel dd').each(function(){
        if($(this).hasClass('active')){
            channelId = $(this).attr('data');
        }
    });

    var code = '';
    $('#range dd').each(function(){
        if($(this).hasClass('active')){
            code = $(this).attr('data');
        }
    });


    var acountType = '';
    $('#type dd').each(function(){
        if($(this).hasClass('active')){
            acountType = $(this).attr('data');
        }
    });


    var fcount_s = $('#fans_start').val();
    var fcount_e = $('#fans_end').val();
    var price_s = $('#price_start').val();
    var price_e = $('#price_end').val();
    var fsort = $('.sort_fans span').attr('title');
    var psort = $('.sort_price span').attr('title');
    var query = $('input[name="search"]').val();

    if(isEmpty(fsort)){
        fsort = '';
    }
    if(isEmpty(psort)){
        psort = '';
    }


    $.ajax({
        url : url + '/smart/network_list.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 12,
            'channelId' : channelId,
            'code' : code,
            'acountType' : acountType,
            'fcount_s' : fcount_s,
            'fcount_e' : fcount_e,
            'price_s' : price_s,
            'price_e' : price_e,
            'fsort' : fsort,
            'psort' : psort,
            'query' : query
        },
        success : function (data) {
            var wx = data.data.rows;

            if($('.style_change').hasClass('on')){

                for(var i=0;i<wx.length;i++){

                    var fans = Math.round(wx[i].fansCount/10000).toFixed(2);

                    $('.smart ul.network').append('<li class="grid"><span class="grid_img"><img src="'+ wx[i].logo +'" alt="" /></span><span class="grid_name">'+ wx[i].name +'</span><span class="grid_channel">'+ wx[i].channel +'</span><span class="grid_area">'+ wx[i].area +'</span><div><span class="grid_fans">'+ wx[i].publishChannel +'</span><span class="grid_read">'+ wx[i].type +'</span></div></li>');
                    $('.smart ul.network li:nth-of-type(4n)').css('marginRight','0');
                }

            }else{
                $('.smart ul.network').append('<li class="smart_tit"><span>LOGO</span><span>名称</span><span>行业</span><span>地区</span><span>发布频道</span><span>媒体类型</span></li>');
                for(var i=0;i<wx.length;i++){

                    $('.smart ul.network').append('<li><span class="smart_img"><img src="'+ wx[i].logo +'" alt="" /></span><span>'+ wx[i].name +'</span><span>'+ wx[i].channel +'</span><span>'+ wx[i].area +'</span><span>'+ wx[i].publishChannel +'</span><span>'+ wx[i].type +'</span></li>');

                }

            }

            if(data.data.totalCount%12 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/12)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12));
                $('#page-box .num').text(parseInt(data.data.totalCount/12));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    smart(page);
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
        }
    });
}

/* ============= 媒体：视频分类 ======== */
function vedioList(pageNum){

    var channelId = '';
    $('#channel dd').each(function(){
        if($(this).hasClass('active')){
            channelId = $(this).attr('data');
        }
    });

    var code = '';
    $('#range dd').each(function(){
        if($(this).hasClass('active')){
            code = $(this).attr('data');
        }
    });


    var acountType = '';
    $('#type dd').each(function(){
        if($(this).hasClass('active')){
            acountType = $(this).attr('data');
        }
    });


    var fcount_s = $('#fans_start').val();
    var fcount_e = $('#fans_end').val();
    var price_s = $('#price_start').val();
    var price_e = $('#price_end').val();
    var fsort = $('.sort_fans span').attr('title');
    var psort = $('.sort_price span').attr('title');
    var query = $('input[name="search"]').val();

    if(isEmpty(fsort)){
        fsort = '';
    }
    if(isEmpty(psort)){
        psort = '';
    }


    $.ajax({
        url : url + '/smart/vedio_list.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 12,
            'channelId' : channelId,
            'code' : code,
            'acountType' : acountType,
            'fcount_s' : fcount_s,
            'fcount_e' : fcount_e,
            'price_s' : price_s,
            'price_e' : price_e,
            'fsort' : fsort,
            'psort' : psort,
            'query' : query
        },
        success : function (data) {
            var wx = data.data.rows;

            if($('.style_change').hasClass('on')){

                for(var i=0;i<wx.length;i++){

                    var fans = Math.round(wx[i].fansCount/10000).toFixed(2);

                    $('.smart ul.video').append('<li class="grid"><span class="grid_img"><img src="'+ wx[i].logo +'" alt="" /></span><span class="grid_name">'+ wx[i].name +'</span><span class="grid_channel">'+ wx[i].channel +'</span><span class="grid_id">'+ wx[i].platformType +'</span><span class="grid_area">'+ wx[i].area +'</span><div><span class="grid_fans"><img src="'+ url_img +'fans.png"/>'+ fans +'</span><span class="grid_read"><img src="'+ url_img +'play.png"/>'+ wx[i].readCount +'</span></div></li>');
                    $('.smart ul.video li:nth-of-type(4n)').css('marginRight','0');
                }

            }else{
                $('.smart ul.video').append('<li class="smart_tit"><span>LOGO</span><span>名称</span><span>行业</span><span>地区</span><span>所属平台</span><span>粉丝量</span><span>平均播放量</span></li>');
                for(var i=0;i<wx.length;i++){

                    $('.smart ul.video').append('<li><span class="smart_img"><img src="'+ wx[i].logo +'" alt="" /></span><span>'+ wx[i].name +'</span><span>'+ wx[i].channel +'</span><span>'+ wx[i].area +'</span><span>'+ wx[i].platformType +'</span><span>'+ wx[i].fansCount +'</span><span>'+ wx[i].readCount +'</span></li>');

                }

            }

            if(data.data.totalCount%12 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/12)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12));
                $('#page-box .num').text(parseInt(data.data.totalCount/12));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    smart(page);
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
        }
    });
}

/* ============= 媒体：KOL朋友圈分类 ======== */
function kolList(pageNum){

    var channelId = '';
    $('#channel dd').each(function(){
        if($(this).hasClass('active')){
            channelId = $(this).attr('data');
        }
    });

    var code = '';
    $('#range dd').each(function(){
        if($(this).hasClass('active')){
            code = $(this).attr('data');
        }
    });


    var acountType = '';
    $('#type dd').each(function(){
        if($(this).hasClass('active')){
            acountType = $(this).attr('data');
        }
    });


    var fcount_s = $('#fans_start').val();
    var fcount_e = $('#fans_end').val();
    var price_s = $('#price_start').val();
    var price_e = $('#price_end').val();
    var fsort = $('.sort_fans span').attr('title');
    var psort = $('.sort_price span').attr('title');
    var query = $('input[name="search"]').val();

    if(isEmpty(fsort)){
        fsort = '';
    }
    if(isEmpty(psort)){
        psort = '';
    }


    $.ajax({
        url : url + '/smart/kol_list.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 12,
            'channelId' : channelId,
            'code' : code,
            'acountType' : acountType,
            'fcount_s' : fcount_s,
            'fcount_e' : fcount_e,
            'price_s' : price_s,
            'price_e' : price_e,
            'fsort' : fsort,
            'psort' : psort,
            'query' : query
        },
        success : function (data) {
            var wx = data.data.rows;

            if($('.style_change').hasClass('on')){

                for(var i=0;i<wx.length;i++){
	                
	                if(isEmpty(wx[i].praiseCount)){
		                wx[i].praiseCount = 0;
	                }

                    $('.smart ul.kol').append('<li class="grid"><span class="grid_img"><img src="'+ url_img +'wx1.png" alt="" /></span><span class="grid_name">'+ wx[i].kolName +'</span><span class="grid_channel">'+ wx[i].channel +'</span><span class="grid_price">'+ wx[i].price +'</span><span class="grid_area">'+ wx[i].area +'</span><div><span class="grid_fans"><img src="'+ url_img +'fans.png"/>'+ wx[i].fansCount +'</span><span class="grid_read"><img src="'+ url_img +'ralay.png"/>'+ wx[i].praiseCount +'</span></div></li>');
                    $('.smart ul.kol li:nth-of-type(4n)').css('marginRight','0');
                }

            }else{
                $('.smart ul.kol').append('<li class="smart_tit"><span>LOGO</span><span>名称</span><span>行业</span><span>地区</span><span>价格</span><span>粉丝量</span><span>转发量</span></li>');
                for(var i=0;i<wx.length;i++){

                    $('.smart ul.kol').append('<li><span class="smart_img"><img src="'+ url_img +'wx1.png" alt="" /></span><span>'+ wx[i].kolName +'</span><span>'+ wx[i].channel +'</span><span>'+ wx[i].area +'</span><span>'+ wx[i].price +'</span><span>'+ wx[i].fansCount +'</span><span>'+ wx[i].praiseCount +'</span></li>');

                }

            }

            if(data.data.totalCount%12 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/12)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12));
                $('#page-box .num').text(parseInt(data.data.totalCount/12));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    smart(page);
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
        }
    });
}

/* ============= 媒体：KOL朋友圈分类 ======== */
function communityList(pageNum){

    var channelId = '';
    $('#channel dd').each(function(){
        if($(this).hasClass('active')){
            channelId = $(this).attr('data');
        }
    });

    var code = '';
    $('#range dd').each(function(){
        if($(this).hasClass('active')){
            code = $(this).attr('data');
        }
    });


    var acountType = '';
    $('#type dd').each(function(){
        if($(this).hasClass('active')){
            acountType = $(this).attr('data');
        }
    });


    var fcount_s = $('#fans_start').val();
    var fcount_e = $('#fans_end').val();
    var price_s = $('#price_start').val();
    var price_e = $('#price_end').val();
    var fsort = $('.sort_fans span').attr('title');
    var psort = $('.sort_price span').attr('title');
    var query = $('input[name="search"]').val();

    if(isEmpty(fsort)){
        fsort = '';
    }
    if(isEmpty(psort)){
        psort = '';
    }


    $.ajax({
        url : url + '/smart/community_list.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 12,
            'channelId' : channelId,
            'code' : code,
            'acountType' : acountType,
            'fcount_s' : fcount_s,
            'fcount_e' : fcount_e,
            'price_s' : price_s,
            'price_e' : price_e,
            'fsort' : fsort,
            'psort' : psort,
            'query' : query
        },
        success : function (data) {
            var wx = data.data.rows;

            if($('.style_change').hasClass('on')){

                for(var i=0;i<wx.length;i++){

                    $('.smart ul.community').append('<li class="grid"><span class="grid_img"><img src="'+ url_img +'community.png" alt="" /></span><span class="grid_name">'+ wx[i].name +'</span><span class="grid_channel">'+ wx[i].type +'</span><span class="grid_intro">'+ wx[i].describes +'</span><span class="grid_area">'+ wx[i].area +'</span><div><span class="grid_fans"><img src="'+ url_img +'fans.png"/>'+ wx[i].popleCount +'</span></div></li>');
                    $('.smart ul.community li:nth-of-type(4n)').css('marginRight','0');
                }

            }else{
                $('.smart ul.community').append('<li class="smart_tit"><span>LOGO</span><span>名称</span><span>地区</span><span>简介</span><span>人数量</span><span>类型</span></li>');
                for(var i=0;i<wx.length;i++){

                    $('.smart ul.community').append('<li><span class="smart_img"><img src="'+ url_img +'community.png" alt="" /></span><span>'+ wx[i].name +'</span><span>'+ wx[i].area +'</span><span class="list_intro">'+ wx[i].describes +'</span><span>'+ wx[i].popleCount +'</span><span>'+ wx[i].type +'</span></li>');

                }

            }

            if(data.data.totalCount%12 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/12)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12));
                $('#page-box .num').text(parseInt(data.data.totalCount/12));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    smart(page);
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
        }
    });
}

/* ============= 媒体：论坛贴吧分类 ======== */
function bbsList(pageNum){

    var channelId = '';
    $('#channel dd').each(function(){
        if($(this).hasClass('active')){
            channelId = $(this).attr('data');
        }
    });

    var code = '';
    $('#range dd').each(function(){
        if($(this).hasClass('active')){
            code = $(this).attr('data');
        }
    });


    var acountType = '';
    $('#type dd').each(function(){
        if($(this).hasClass('active')){
            acountType = $(this).attr('data');
        }
    });


    var fcount_s = $('#fans_start').val();
    var fcount_e = $('#fans_end').val();
    var price_s = $('#price_start').val();
    var price_e = $('#price_end').val();
    var fsort = $('.sort_fans span').attr('title');
    var psort = $('.sort_price span').attr('title');
    var query = $('input[name="search"]').val();

    if(isEmpty(fsort)){
        fsort = '';
    }
    if(isEmpty(psort)){
        psort = '';
    }


    $.ajax({
        url : url + '/smart/bbs_list.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 12,
            'channelId' : channelId,
            'code' : code,
            'acountType' : acountType,
            'fcount_s' : fcount_s,
            'fcount_e' : fcount_e,
            'price_s' : price_s,
            'price_e' : price_e,
            'fsort' : fsort,
            'psort' : psort,
            'query' : query
        },
        success : function (data) {
            var wx = data.data.rows;

            if($('.style_change').hasClass('on')){

                for(var i=0;i<wx.length;i++){

                    $('.smart ul.bbs').append('<li class="grid"><span class="grid_img"><img src="'+ wx[i].logo +'" alt="" /></span><span class="grid_name">'+ wx[i].name +'</span><span class="grid_channel">'+ wx[i].channel +'</span><span class="grid_area">'+ wx[i].area +'</span><div><span class="grid_fans"><img src="'+ url_img +'fans.png"/>'+ wx[i].fansCount +'</span><span class="grid_read">'+ wx[i].platformType +'</span></div></li>');
                    $('.smart ul.bbs li:nth-of-type(4n)').css('marginRight','0');
                }

            }else{
                $('.smart ul.bbs').append('<li class="smart_tit"><span>LOGO</span><span>名称</span><span>行业</span><span>地区</span><span>粉丝量</span><span>发布平台</span></li>');
                for(var i=0;i<wx.length;i++){

                    $('.smart ul.bbs').append('<li><span class="smart_img"><img src="'+ wx[i].logo +'" alt="" /></span><span>'+ wx[i].name +'</span><span>'+ wx[i].channel +'</span><span>'+ wx[i].area +'</span><span>'+ wx[i].fansCount +'</span><span>'+ wx[i].platformType +'</span></li>');

                }

            }

            if(data.data.totalCount%12 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/12)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12));
                $('#page-box .num').text(parseInt(data.data.totalCount/12));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    smart(page);
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
        }
    });
}

/* ============= 媒体：论坛贴吧分类 ======== */
function cpadvertList(pageNum){

    var channelId = '';
    $('#channel dd').each(function(){
        if($(this).hasClass('active')){
            channelId = $(this).attr('data');
        }
    });

    var code = '';
    $('#range dd').each(function(){
        if($(this).hasClass('active')){
            code = $(this).attr('data');
        }
    });


    var acountType = '';
    $('#type dd').each(function(){
        if($(this).hasClass('active')){
            acountType = $(this).attr('data');
        }
    });


    var fcount_s = $('#fans_start').val();
    var fcount_e = $('#fans_end').val();
    var price_s = $('#price_start').val();
    var price_e = $('#price_end').val();
    var fsort = $('.sort_fans span').attr('title');
    var psort = $('.sort_price span').attr('title');
    var query = $('input[name="search"]').val();

    if(isEmpty(fsort)){
        fsort = '';
    }
    if(isEmpty(psort)){
        psort = '';
    }


    $.ajax({
        url : url + '/smart/cp_advert_list.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 12,
            'channelId' : channelId,
            'code' : code,
            'acountType' : acountType,
            'fcount_s' : fcount_s,
            'fcount_e' : fcount_e,
            'price_s' : price_s,
            'price_e' : price_e,
            'fsort' : fsort,
            'psort' : psort,
            'query' : query
        },
        success : function (data) {
            var wx = data.data.rows;

            if($('.style_change').hasClass('on')){

                for(var i=0;i<wx.length;i++){

                    var fans = Math.round(wx[i].fansCount/10000).toFixed(2);
                    var read = Math.round(wx[i].readCount/10000).toFixed(2);

                    $('.smart ul.cp').append('<li class="grid"><span class="grid_img"><img src="'+ wx[i].logo +'" alt="" /></span><span class="grid_name">'+ wx[i].name +'</span><span class="grid_channel">'+ wx[i].platformType +'</span><span class="grid_id">'+ wx[i].putSeat +'</span><div style="text-align: center;">'+ wx[i].advertForm +'</div></li>');
                    $('.smart ul.cp li:nth-of-type(4n)').css('marginRight','0');
                }

            }else{
                $('.smart ul.cp').append('<li class="smart_tit"><span>LOGO</span><span>名称</span><span>投放位置</span><span>广告形式</span><span>发布类型</span></li>');
                for(var i=0;i<wx.length;i++){

                    $('.smart ul.cp').append('<li><span class="smart_img"><img src="'+ wx[i].logo +'" alt="" /></span><span>'+ wx[i].name +'</span><span>'+ wx[i].putSeat +'</span><span>'+ wx[i].advertForm +'</span><span>'+ wx[i].platformType +'</span></li>');

                }

            }

            if(data.data.totalCount%12 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/12)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12));
                $('#page-box .num').text(parseInt(data.data.totalCount/12));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    smart(page);
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
        }
    });
}

/* ============= 需求列表状态标签 ======== */
function getDemandStatusList(s){
    var name = "";
    // 招募中
    if(s == 0){
        name = '<div class="demandlist-t">招募中</div>';
	
    // 执行中
    }else if(s == 1){
        name = '<div class="demandlist-t" style="background:none;border:solid 1px #ccc;color:#000;">执行中</div>';
    // 已完成
    }else if(s == 2){
        name = '<div class="demandlist-t" style="background:none;border:solid 1px #ccc;color:#000;">已完成</div>';
    // 已评价
    } else if(s == 3){
        name = '<div class="demandlist-t" style="background:none;border:solid 1px #ccc;color:#000;">已关闭</div>';
    }//对接
    
     else if(s == 4){
    	
        name = '<div class="demandlist-t" style="background:none;border:solid 1px #ccc;color:#000;">对接中</div>';
    }
    return name;
}

/* ============= 我的发布需求状态标签 ======== */

function getDemandStatusLabelImg(s){
	var name = "";
	// 0审核中
	if(s == 0){
		name = "s_1_shz.png";
	// 1审核失败
	}else if(s == 1){
		name = "s_3_shsb.png";
     // 2匹配中
	}else if(s == 2){
		name = "s_5_zmz.png";
	// 3、执行中
	}else if(s == 3){
		name = "s_6_zxz.png";
	// 4、已完成
	}else if(s == 4){
		name = "s_7_ywc.png";
	// 5、已评价
	}else if(s == 5){
		name = "s_9_ypj.png";
	// 6、已关闭
	}else if(s == 6){
		name = "s_8_ygb.png";
	}	//对接
	else if(s == 7){
		name = "s_11_djz.png";
	}
	return name;
	
}

// /*============= 根据状态获取任务标签 ========*/
// function fetProjectStatueImg(s){
// var name = '';
// if(s == 0){
// name = 's_1-_wsq.png';
// }else if(s == 1){
// name = 's_1_shz.png';
// }else if(s == 2){
// name = 's_'
// }
// }

/* ============= 根据状态获取任务标签 ======== */

function getTaskStatusLabelImg(s){
	var name = "";
	// 未申请
	if(s == "0"){
        name = "s_10_wsq.png";
	// 审核中
	}else if(s == "1"){
        name = "s_1_shz.png";
     // 审核成功
    }else if(s == "2"){
		name = "s_6_zxz.png";
	// 审核失败
	}else if(s == "3"){
		name = "s_3_shsb.png";
	// 抢活失败（已选他人）
	}else if(s == "4"){
		name = "s_4_qhsb.png";
	}// 已完成
	else if(s == "5"){
		name = "s_7_ywc.png";
	}// 抢活失败（关闭）
	else if(s == "6"){
		name = "s_8_ygb.png";
	}
	//对接
	else if(s == "7"){
		name = "s_11_djz.png";
	}
	return name;

}

function getTaskStatusLabelImg1(s){
	var name = "";
	// 未申请
	if(s == "0"){
        name = "s_10_wsq.png";
	// 审核中
	}else if(s == "1"){
        name = "s_1_shz.png";
     // 审核成功
    }else if(s == "2"){
		name = "s_6_zxz.png";
	// 审核失败
	}else if(s == "3"){
		name = "s_3_shsb.png";
	// 抢活失败（已选他人）
	}else if(s == "4"){
		name = "s_4_qhsb.png";
	}// 已完成
	else if(s == "5"){
		name = "s_7_ywc.png";
	}// 抢活失败（关闭）
	else if(s == "6"){
		name = "s_8_ygb.png";
	}	//对接
	else if(s == "7"){
		name = "s_11_djz.png";
	}
	return name;
}
function server_icon(s){
	var name = "";
	// 文案撰写
	if(s == "1"){
        name = "server_icon1";
	// 发稿
	}else if(s == "9"){
        name = "server_icon9";
     // 咨询或培训
    }else if(s == "10"){
		name = "server_icon10";
	// 策划
	}else if(s == "4"){
		name = "server_icon4";
	// 设计
	}else if(s == "5"){
		name = "server_icon5";
	// 视频
	}else if(s == "6"){
		name = "server_icon6";
	// 会议/活动
	}else if(s == "7"){
		name = "server_icon7";
	// 微信
	}else if(s == "8"){
		name = "server_icon8";
	// 危机公关
	}else{
		name = "sercer_icon49";
	}
	return name;

}
/* ============= 是否为空 ============== */
function isEmpty(strVal){
    if(strVal == ''|| strVal == undefined || strVal == 'undefind'|| strVal == null || strVal == 'null' ){
        return true;
    }else{
        return false;
    }
}


/* ============= 上传文件upload_file ============== */
function upload_file(id){
    var tit = $('#attachForm3_tit').val();
    var fileUrl = $('#attachForm3 input[type="hidden"]').val();
    //alert(fileUrl);
    if(isEmpty(tit)){
        alert('请完善内容！');
        return false;
    }

    $.ajax({
        url : url + '/demand/upload_plan.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'id' : id,
            'title' : tit,
            'fileUrl' : fileUrl
        },
        success : function (data) {
            if(data.code == '0'){
                alert("上传成功！");
                location.reload();
            }else{
                alert(data.message);
            }
        }
    });
}
function upload_file_all(id){
    var tit = $('#attachForm4_tit').val();
    var fileUrl = $('#attachForm4 input[type="hidden"]').val();

    if(isEmpty(tit)){
        alert('请完善内容！');
        return false;
    }

    $.ajax({
        url : url + '/demand/upload_plan.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'title' : tit,
            'fileUrl' : fileUrl,
            'id' : id
        },
        success : function (data) {
            if(data.code == '0'){
                alert("上传成功！");
                location.reload();
            }else{
                alert(data.message);
            }
        }
    });
}
/* ============= 弹出框alert ============== */
function show_alert(str){
    if(!document.getElementById('show_alert_bg')){
        // 不存在，则添加
        $('<div id="show_alert_bg" onclick="returnGo();" style="padding-top:10%;z-index:1000;"><div id="show_alert"><div>'+ str +'</div>我们会尽快与您取得联系，请保持手机畅通<div class="showAlertJudge" onclick="">确定</div></div></div>').appendTo('body');
    }else{
        $('#show_alert_bg').show();
        $('#show_alert').show();
    }
}

/* ============= applyFreeman ============== */
function applyFreeman(){
    $.ajax({
        url : url + '/freeman/apply.shtml',
        type : "post",
        data : 'v=2.0&source=2',
        success : function (data) {
            if(data.code == '0'){
                document.location.href = '/user/user_center.shtml';
            }else{
                alert(data.message);
            }
        }
    });
}

/* ============= applyFreeman ============== */
function show_tag(){
    if(!document.getElementById('show_alert_bg')){
        // 不存在，则添加
    	$('<div id="show_alert_bg" style="padding-top:10%;z-index:1000;"><div id="show_alert">请您先前往，成功注册后我们会尽快为您开通工作台<div><a href="javascript:returnGo();">返回</a><a href="'+url+'/user/reg.shtml">前往注册</a></div></div></div>').appendTo('body');
    }else{
        $('#show_alert_bg').show();
        $('#show_alert').show();
    }
}

function returnGo(){
    $('#show_alert_bg').hide();
    $('#show_alert').hide();
}
// 营销套餐购买
// * @param packageId ： 套餐Id
     // * @param num：购买数量
     // * @param source：下单方式
     // * @param remark：订单备注
function orderSave(){
	console.log($('.packageId').html());
	var packageId = $('.packageId').html();
	var customerId = $('body').attr('data-val');
	$.ajax({
        url : url +'/order/save.shtml',
        type : "post",
		data : {
            'packageId' : packageId,
            'customerId' : customerId
        },
        success : function (data) {
		  console.log(data);
		   //追加
          $(".sb").append(data.data.result);
        }
    });
}



/* ============= task-ln-start ============== */
//工作台
function work_info(appid,status,id){
	$.ajax({
		url:url+"/task/task_info-2.0-"+appid+"-2.shtml",
		type:'post',
		data:{id:appid},
		success:function(data){
			if(data.code==0){
				Date.prototype.format = function (format) { 
				    var o = { 
				    "M+": this.getMonth() + 1, 
				    "d+": this.getDate(), 
				    "H+": this.getHours(), 
				    "m+": this.getMinutes(), 
				    "s+": this.getSeconds(), 
				    "q+": Math.floor((this.getMonth() + 3) / 3), 
				    "S": this.getMilliseconds() 
				    } 
				    if (/(y+)/.test(format)) { 
				    format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length)); 
				    } 
				    for (var k in o) { 
				        if (new RegExp("(" + k + ")").test(format)) { 
				            format = format.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k] : ("00" + o[k]).substr(("" + o[k]).length)); 
				        } 
				    } 
				    return format; 
				}
				var temp = new Date(parseInt(data.data.endTime)); 
                //格式化时间
                var myDate = temp.format('yyyy-MM-dd');
                $("#work-pos").css('display','none');
			    $("#work-parent").css('display','none');
				$("#work-myself").css('display','block');
				$('.work-pos-center-left:eq(2) h3').html(data.data.title)
				$('.work-pos-center-left:eq(2) p:eq(0) span:eq(1)').html(data.data.channel)
				$('.work-pos-center-left:eq(2) .red').html('￥'+data.data.budget)
//				alert($('.work-pos-center-left p:eq(3) span:eq(1)').html())
				$('.work-pos-center-left:eq(2) .endTime').html(myDate)
				$('.work-pos-center-left:eq(2) .text').html(data.data.des)
				$('.work-pos-center-left:eq(2) .close').click(function(){
					$("#work-myself").css('display','none');
				})
				//$('.work-pos-center-left:eq(2) .file-name-btn').click(function(){
					//window.location.href=window.location.href;
//					$.ajax({
//						url:url+'',
//						type:'post',
//						data:{},
//						success:function(e){
//							if(e.code==0){
//								window.location.href=window.location.href;
//							}else{
//								alert(e.message)
//							}
//						}
//					})
				//})
				$('.work-pos-center-left:eq(2) p:last').html('&nbsp;');
				if(status!=5){
					$('.work-pos-center-left button').css('display','block'); 
					$('.work-pos-center-left:eq(2) .file-name-btn').attr('onclick','work_info_sumbit('+id+','+appid+')');
					$('.work-pos-center-left:eq(2) .file-name-btn').html("提交");
				}else{
					$('.work-pos-center-left button').css('display','none'); 
					$('.work-pos-center-left:eq(2) .file-name-btn').css('display','block'); 
					$('.work-pos-center-left:eq(2) .file-name-btn').attr('onclick','');
					$('.work-pos-center-left:eq(2) .file-name-btn').html("已完成");
				}
				var fileimgname=data.data.filepath.substring(data.data.filepath.lastIndexOf('/') + 1);
				$('.work-pos-center-left:eq(2) p:last').html('');
				if(fileimgname!="" && fileimgname !=null){
					$('.work-pos-center-left:eq(2) p:last').html('<span class="file-name">'+fileimgname+'</span><a class="down-a" style="  text-decoration:none; color:#276ae2;" href="'+data.data.filepath+'" download="'+data.data.filepath+'" ><img src="'+url+'/resources/bootstrap/resetImg/ico55.png">下载 </a>');
				}
                $('.work-pos-center-left:eq(2) p:last').append('<input id="work_id_status" type="hidden" value="'+status+'" ');
            }else{
				alert(data.message)
			}
			
		}
	})
}

//我参与的项目
function work_participate_info(appid,status,id){
	$.ajax({
		url:url+"/task/task_info-2.0-"+appid+"-2.shtml",
		type:'post',
		data:{id:appid},
		success:function(data){
			if(data.code==0){
				Date.prototype.format = function (format) { 
				    var o = { 
				    "M+": this.getMonth() + 1, 
				    "d+": this.getDate(), 
				    "H+": this.getHours(), 
				    "m+": this.getMinutes(), 
				    "s+": this.getSeconds(), 
				    "q+": Math.floor((this.getMonth() + 3) / 3), 
				    "S": this.getMilliseconds() 
				    } 
				    if (/(y+)/.test(format)) { 
				    format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length)); 
				    } 
				    for (var k in o) { 
				        if (new RegExp("(" + k + ")").test(format)) { 
				            format = format.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k] : ("00" + o[k]).substr(("" + o[k]).length)); 
				        } 
				    } 
				    return format; 
				}
				talkmessagelist(data.data.parent_id);
				var temp = new Date(parseInt(data.data.endTime)); 
                //格式化时间
                var myDate = temp.format('yyyy-MM-dd');
	            $("#work-myself").css('display','none');
			    $("#work-parent").css('display','none');
				$("#work-pos").css('display','block');
				$('.work-pos-center-left:eq(0) .work-parent').html(data.data.demandTitle+'<a onclick="work_parent_info('+data.data.parent_id+')" >查看详情</a>');
				$('.work-pos-center-left:eq(0) h3').html(data.data.title)
				$('.work-pos-center-left:eq(0) p:eq(1) span:eq(1)').html(data.data.channel)
				$('.work-pos-center-left:eq(0) .red').html('￥'+data.data.budget)
				$('.work-pos-center-left:eq(0) .endTime').html(myDate)
				$('.work-pos-center-left:eq(0) .text').html(data.data.des)
				$('.work-pos-center-left:eq(0) .close').click(function(){
					$("#work-myself").css('display','none');
				})
				$('.work-pos-center-left:eq(0) p:last').html('&nbsp;');
				if(status!=5){
					$('.work-pos-center-left button').css('display','block'); 
					$('.work-pos-center-left:eq(0) .file-name-btn').attr('onclick','work_info_sumbit('+id+','+appid+')');
					$('.work-pos-center-left:eq(0) .file-name-btn').html("提交");
				}else{
					$('.work-pos-center-left button').css('display','none'); 
					$('.work-pos-center-left:eq(0) .file-name-btn').css('display','block'); 
					$('.work-pos-center-left:eq(0) .file-name-btn').html('已完成');
				}
				var fileimgname=data.data.filepath.substring(data.data.filepath.lastIndexOf('/') + 1);
				$('.work-pos-center-left:eq(0) p:last').html('');
				if(fileimgname!="" && fileimgname !=null){
                    $('.work-pos-center-left:eq(0) p:last').html('<span class="file-name">'+fileimgname+'</span><a class="down-a" style="  text-decoration:none; color:#276ae2;" href="'+data.data.filepath+'" download="'+data.data.filepath+'" ><img src="'+url+'/resources/bootstrap/resetImg/ico55.png">下载 </a>');
				}
                $('.work-pos-center-left:eq(0) p:last').append('<input id="work_id_status" type="hidden" value="'+status+'" ');
				$(".work-pos-center-right:eq(0) #language-textarea").attr("name",""+data.data.parent_id+"");
			}else{
				alert(data.message)
			}
			
		}
	})
}

//我的任务 查看父级项目
function work_parent_info(parent_id){
	$.ajax({
		url:url+"/task/parent_task_info-2.0-"+parent_id+"-2.shtml",
		type:'post',
		data:{parent_id:parent_id},
		success:function(data){
			if(data.code== '0'){
				Date.prototype.format = function (format) { 
				    var o = { 
				    "M+": this.getMonth() + 1, 
				    "d+": this.getDate(), 
				    "H+": this.getHours(), 
				    "m+": this.getMinutes(), 
				    "s+": this.getSeconds(), 
				    "q+": Math.floor((this.getMonth() + 3) / 3), 
				    "S": this.getMilliseconds() 
				    } 
				    if (/(y+)/.test(format)) { 
				    format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length)); 
				    } 
				    for (var k in o) { 
				        if (new RegExp("(" + k + ")").test(format)) { 
				            format = format.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k] : ("00" + o[k]).substr(("" + o[k]).length)); 
				        } 
				    } 
				    return format; 
				}
				var temp = new Date(parseInt(data.data.task.parent_endtime)); 
				talkmessagelist(data.data.task.parent_id);
                //格式化时间
                var myDate = temp.format('yyyy-MM-dd');
                $("#work-pos").css('display','none');
                $("#work-myself").css('display','none');
				$("#work-parent").css('display','block');
				$('.work-pos-center-left:eq(1) h3').html(data.data.task.parent_title)
				$('.work-pos-center-left:eq(1) p:eq(0) span:eq(1)').html(data.data.task.parent_channel)
				$('.work-pos-center-left:eq(1) .red').html('￥'+data.data.task.parent_budget);
				$('.work-pos-center-left:eq(1) .endTime').html(myDate)
				$('.work-pos-center-left:eq(1) p:eq(2) span:eq(1)').html(myDate)
				$('.work-pos-center-left:eq(1) .text').html(data.data.task.parent_des)
				$('.work-pos-center-left:eq(1) p:eq(3) span:eq(1)').html(data.data.task.cust_name)
				$('.work-pos-center-left:eq(1) .close').click(function(){
					$("#work-myself").css('display','none');
				})
				$('.work-pos-center-left:eq(1) .file-name-btn').click(function(){
					window.location.href=window.location.href;
				})
				$('.work-pos-center-left:eq(1) p:last').html('&nbsp;');
				$('.work-pos-center-left button').css('display','none'); 
				var fileimgname=data.data.task.parent_filepath.substring(data.data.task.parent_filepath.lastIndexOf('/') + 1);
				$('.work-pos-center-left:eq(1) p:last').html('');
				if(fileimgname!="" && fileimgname !=null){
                    $('.work-pos-center-left:eq(1) p:last').html('<span class="file-name">'+fileimgname+'</span><a class="down-a" style=" text-decoration:none; color:#276ae2;" href="'+data.data.task.filepath+'" download="'+data.data.task.filepath+'" ><img src="'+url+'/resources/bootstrap/resetImg/ico55.png">下载 </a>');
				}
                $('.work-pos-center-left:eq(1) p:last').append('<input id="work_id_status" type="hidden" value="'+status+'" ');
				$(".work-pos-center-right:eq(1) #language-textarea2").attr("name",""+data.data.task.parent_id+"");
			}else{
				alert(data.message)
			}
			
		}
	})
}

//我的任务  上传附件
$(function(){
    $(document).on('change','#attachFile8',function(){
        var file_name = $(this).val();
        var attachUrl = "";
        // $("#attachForm").submit();
        var option = {
            url : url+"/file/img.shtml",
            data : {
                'v' : '2.0',
                'source' : 2
            },
            type: "post",
            success : function(result){
                if(result.code == '0'){
                	attachUrl = result.data.url;
                	var file_nameurl=file_name;
                	file_name=file_name.substring(file_name.lastIndexOf('\\') + 1);
                	$('#attachForm8 input[type="hidden"]').val(attachUrl);
                	if(file_name!=null && file_name !=''){
                		$('.work-pos-center-left:eq(2) p:last').html('<span class="file-name">'+file_name+'</span><a class="down-a" style="  text-decoration:none; color:#276ae2;" href="'+admin_url+attachUrl+'" download="'+admin_url+attachUrl+'" ><img src="'+url+'/resources/bootstrap/resetImg/ico55.png">下载 </a>');
                	}
                 }else{
                    alert(result.message)
                }
            }
        };
        var filesize = document.getElementById("attachFile8").files[0].size;//10485760
        //alert(filesize);
        if(filesize>10485760){
        	alert("请上传10MB以内的文件");
        }else{
        	$("#attachForm8").ajaxSubmit(option);
        }
        
    });
    $(document).on('change','#attachFile9',function(){
        var file_name = $(this).val();
        var attachUrl = "";
        // $("#attachForm").submit();
        var option = {
            url : url+"/file/img.shtml",
            data : {
                'v' : '2.0',
                'source' : 2
            },
            type: "post",
            success : function(result){
                if(result.code == '0'){
                	attachUrl = result.data.url;
                	var file_nameurl=file_name;
                	file_name=file_name.substring(file_name.lastIndexOf('\\') + 1);
                	$('#attachForm9 input[type="hidden"]').val(attachUrl);
                	if(file_name !=null && file_name !='' ){
                		$('.work-pos-center-left:eq(1) p:last').html('<span class="file-name">'+file_name+'</span><a class="down-a" style="  text-decoration:none; color:#276ae2;" href="'+admin_url+attachUrl+'" download="'+admin_url+attachUrl+'" ><img src="'+url+'/resources/bootstrap/resetImg/ico55.png">下载 </a>');
                	}
                	
                }else{
                    alert(result.message)
                }
            }
        };
        var filesize = document.getElementById("attachFile9").files[0].size;//10485760
        //alert(filesize);
        if(filesize>10485760){
        	alert("请上传10MB以内的文件");
        }else{
        	$("#attachForm9").ajaxSubmit(option);
        }
    });
    $(document).on('change','#attachFile10',function(){
        var file_name = $(this).val();
        var attachUrl = "";
        // $("#attachForm").submit();
        var option = {
            url : url+"/file/img.shtml",
            data : {
                'v' : '2.0',
                'source' : 2
            },
            type: "post",
            success : function(result){
                if(result.code == '0'){
                	attachUrl = result.data.url;
                	var file_nameurl=file_name;
                	file_name=file_name.substring(file_name.lastIndexOf('\\') + 1);
                	$('#attachForm10 input[type="hidden"]').val(attachUrl);
                	if(file_name!=null && file_name!=''){
                		$('.work-pos-center-left:eq(0) p:last').html('<span class="file-name">'+file_name+'</span><a class="down-a" style="  text-decoration:none; color:#276ae2;" href="'+admin_url+attachUrl+'" download="'+admin_url+attachUrl+'" ><img src="'+url+'/resources/bootstrap/resetImg/ico55.png">下载 </a>');
                	}
                	
                }else{
                    alert(result.message)
                }
            }
        };
        var filesize = document.getElementById("attachFile10").files[0].size;//10485760
        //alert(filesize);
        if(filesize>10485760){
        	alert("请上传10MB以内的文件");
        }else{
        	$("#attachForm10").ajaxSubmit(option);
        }
        
    });
});

//我的任务  正在做的任务和已延期的任务提交
function work_info_sumbit(id,applyId){
	var attachUrl=null;
	var attachUrl8= $('#attachForm8 input[type="hidden"]').val();
	var attachUrl9= $('#attachForm9 input[type="hidden"]').val();
	var attachUrl10= $('#attachForm10 input[type="hidden"]').val();
	if(attachUrl8 !="" && attachUrl8!=null){
		attachUrl=attachUrl8;
	}
	if(attachUrl9 !="" && attachUrl9!=null){
		attachUrl=attachUrl9;
	}
	if(attachUrl10 !="" && attachUrl10!=null){
		attachUrl=attachUrl10;
	}
	$.ajax({
	       type:"post",
	       url: url + "/task/complete.shtml",
	       data: {
	           "id":id,
	           "applyId":applyId,
	           "filepath":attachUrl
	       },success:function (data) {
	        if( data.code == '0' ){
	        	alert(data.message);
	        	window.location.href=window.location.href;
	        }
	      }
	  });
};


//任务助手 详情
function detailbyid(appid,fdid,applystatus){
	$.ajax({
		url:url+"/task/task_info-2.0-"+appid+"-2.shtml",
		type:'post',
		data:{id:appid},
		success:function(data){
			if(data.code==0){
				Date.prototype.format = function (format) { 
				    var o = { 
				    "M+": this.getMonth() + 1, 
				    "d+": this.getDate(), 
				    "H+": this.getHours(), 
				    "m+": this.getMinutes(), 
				    "s+": this.getSeconds(), 
				    "q+": Math.floor((this.getMonth() + 3) / 3), 
				    "S": this.getMilliseconds() 
				    } 
				    if (/(y+)/.test(format)) { 
				    format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length)); 
				    } 
				    for (var k in o) { 
				        if (new RegExp("(" + k + ")").test(format)) { 
				            format = format.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k] : ("00" + o[k]).substr(("" + o[k]).length)); 
				        } 
				    } 
				    return format; 
				}
				var tempstart = new Date(parseInt(data.data.startTime)); 
				var tempend = new Date(parseInt(data.data.endTime)); 
                //格式化时间
                var myDateStart = tempstart.format('yyyy-MM-dd');
                var myDateEnd = tempend.format('yyyy-MM-dd');
				$("#body-pos").css('display','block');
			    $("#body-pos-yes").css('display','none');
				$("#body-pos-no").css('display','none');
				$('#body-pos .close').click(function(){
					window.location.href=window.location.href;
				});
				$('#body-pos .body-pos-content .content-left img:eq(0)').attr('src',data.data.hedderpic);
				$('#body-pos .content-right p:eq(2)').html(data.data.cust_name);
				$('#body-pos .content-right .content-right-bg p:eq(0) span:eq(0)').html(myDateStart);
				$('#body-pos .content-right .content-right-bg p:eq(0) span:eq(1)').html(myDateEnd);
				$('#body-pos .content-right .content-right-bg p:eq(1) span:eq(0)').html(data.data.title);
				$('#body-pos .content-right .content-right-bg div:eq(0)').html(data.data.des);//demandTitle父项目题目
				//获取任务图片名称
				var fileimgname=data.data.filepath.substring(data.data.filepath.lastIndexOf('/') + 1);
				if(fileimgname==''||fileimgname == null ){
					$('#body-pos .content-right .center-right-p:eq(0) a').css('display','none');
					$('#body-pos .content-right .center-right-p:eq(0) span:eq(1)').html('');
				}else{
					$('#body-pos .content-right .center-right-p:eq(0) a').css('display','block');
					$('#body-pos .content-right .center-right-p:eq(0) a').attr('href',data.data.filepath);
					$('#body-pos .content-right .center-right-p:eq(0) a').attr('download',data.data.filepath);
					$('#body-pos .content-right .center-right-p:eq(0) span:eq(1)').html(fileimgname);
				}
				$('#body-pos .content-right .center-right-p:eq(1) a').html(data.data.demandTitle);
				$('#body-pos .content-right .center-right-p:eq(1) a').attr('onclick','parentdetail("'+data.data.parent_id+'","'+fdid+'","'+applystatus+'","'+data.data.cust_name+'");');
				if(applystatus!='0'){
					$('#body-pos .body-pos-content .center-right-btn').css('display','none');
				}else{
					$('#body-pos .body-pos-content .center-right-btn').css('display','block');
					$('#body-pos .body-pos-content .center-right-btn div button:eq(0)').attr('onclick','turnInvite("'+fdid+'","'+data.data.cust_name+'");');
					$('#body-pos .body-pos-content .center-right-btn div button:eq(1)').attr('onclick','acceptInvite("'+fdid+'","'+data.data.cust_name+'");');
				}
			}else{
				alert(data.message)
			}
			
		}
	})
}

//任务助手 父任务详情
function parentdetail(parentid,fdid,sublevelstatus,otherinfo){
	$.ajax({
		url:url+"/task/parent_task_info-2.0-"+parentid+"-2.shtml",
		type:'post',
		data:{parent_id:parentid},
		success:function(data){
			if(data.code==0){
				Date.prototype.format = function (format) { 
				    var o = { 
				    "M+": this.getMonth() + 1, 
				    "d+": this.getDate(), 
				    "H+": this.getHours(), 
				    "m+": this.getMinutes(), 
				    "s+": this.getSeconds(), 
				    "q+": Math.floor((this.getMonth() + 3) / 3), 
				    "S": this.getMilliseconds() 
				    } 
				    if (/(y+)/.test(format)) { 
				    format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length)); 
				    } 
				    for (var k in o) { 
				        if (new RegExp("(" + k + ")").test(format)) { 
				            format = format.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k] : ("00" + o[k]).substr(("" + o[k]).length)); 
				        } 
				    } 
				    return format; 
				}
				var tempstart = new Date(parseInt(data.data.task.parent_starttime)); 
				var tempend = new Date(parseInt(data.data.task.parent_endtime)); 
                //格式化时间
                var myDateStart = tempstart.format('yyyy-MM-dd');
                var myDateEnd = tempend.format('yyyy-MM-dd');
				$("#body-pos").css('display','block');
			    $("#body-pos-yes").css('display','none');
				$("#body-pos-no").css('display','none');
				$('#body-pos .close').click(function(){
					window.location.href=window.location.href;
				});
				$('#body-pos .body-pos-content .content-left img:eq(0)').attr('src',data.data.task.cust_image);
				$('#body-pos .content-right p:eq(2)').html(data.data.task.cust_name);
				$('#body-pos .content-right .content-right-bg p:eq(0) span:eq(0)').html(myDateStart);
				$('#body-pos .content-right .content-right-bg p:eq(0) span:eq(1)').html(myDateEnd);
				$('#body-pos .content-right .content-right-bg p:eq(1) span:eq(0)').html(data.data.task.parent_title);
				$('#body-pos .content-right .content-right-bg div:eq(0)').html(data.data.task.parent_des);//demandTitle父项目题目
				//获取任务图片名称
				var fileimgname=data.data.task.parent_filepath.substring(data.data.task.parent_filepath.lastIndexOf('/') + 1);
				if(fileimgname==''||fileimgname == null ){
					$('#body-pos .content-right .center-right-p:eq(0) a').css('display','none');
					$('#body-pos .content-right .center-right-p:eq(0) span:eq(1)').html("");
				}else{
					$('#body-pos .content-right .center-right-p:eq(0) a').css('display','block');
					$('#body-pos .content-right .center-right-p:eq(0) a').attr('href',data.data.task.parent_filepath);
					$('#body-pos .content-right .center-right-p:eq(0) a').attr('download',data.data.task.parent_filepath);
					$('#body-pos .content-right .center-right-p:eq(0) span:eq(1)').html(fileimgname);
				}
				$('#body-pos .content-right .center-right-p:eq(1)').html('<span>行业名称：</span>');
				var parent_channel=data.data.task.parent_channel;
				if(parent_channel !=''&& parent_channel != null ){
					$('#body-pos .content-right .center-right-p:eq(1)').html('<span>行业名称：</span><span>'+parent_channel+'</span>');
				}
				if(sublevelstatus !='0'){
					$('#body-pos .body-pos-content .center-right-btn').css('display','none');
				}else{
					$('#body-pos .body-pos-content .center-right-btn').css('display','block');
					$('#body-pos .body-pos-content .center-right-btn div button:eq(0)').attr('onclick','turnInvite("'+fdid+'","'+otherinfo+'");');
					$('#body-pos .body-pos-content .center-right-btn div button:eq(1)').attr('onclick','acceptInvite("'+fdid+'","'+otherinfo+'");');
				}
            }else{
				alert(data.message);
			}
			
		}
	})
}



//任务助手 接受邀请
function acceptInvite(fdid,otherinfo){
	$.ajax({
		url:url+"/task/apply.shtml",
		type:'post',
		data:{id:fdid},
		success:function(data){
			if(data.code==0){
				$("#body-pos").css('display','none');
			    $("#body-pos-yes").css('display','block');
				$("#body-pos-no").css('display','none');
				$('#body-pos-yes .close').click(function(){
					window.location.href=window.location.href;
				});
				$('#body-pos-yes div:eq(1) p:eq(0)').html('您已接受'+otherinfo+'的邀请');
          }else{
				alert(data.message);
				window.location.href=window.location.href;
			}
		}
	})
}

//任务助手 拒绝邀请
function turnInvite(fdid,otherinfo){
	$.ajax({
		url:url+"/task/cancenlapply.shtml ",
		type:'post',
		data:{id:fdid},
		success:function(data){
			if(data.code==0){
				$("#body-pos").css('display','none');
			    $("#body-pos-yes").css('display','none');
				$("#body-pos-no").css('display','block');
				$('#body-pos-no .close').click(function(){
					window.location.href=window.location.href;
				});
				$('#body-pos-no div:eq(1) p:eq(0)').html('您已拒绝'+otherinfo+'的邀请');
			}else{
				alert(data.message);
			}
		}
	})
}

//我的项目   “查看更多”==》查看项目详情
function projectDetail(appid){
	$.ajax({
		url:url+"/task/task_info-2.0-"+appid+"-2.shtml",
		type:'post',
		data:{id:appid},
		success:function(data){
			if(data.code==0){
				Date.prototype.format = function (format) { 
				    var o = { 
				    "M+": this.getMonth() + 1, 
				    "d+": this.getDate(), 
				    "H+": this.getHours(), 
				    "m+": this.getMinutes(), 
				    "s+": this.getSeconds(), 
				    "q+": Math.floor((this.getMonth() + 3) / 3), 
				    "S": this.getMilliseconds() 
				    } 
				    if (/(y+)/.test(format)) { 
				    format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length)); 
				    } 
				    for (var k in o) { 
				        if (new RegExp("(" + k + ")").test(format)) { 
				            format = format.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k] : ("00" + o[k]).substr(("" + o[k]).length)); 
				        } 
				    } 
				    return format; 
				}
				var temp = new Date(parseInt(data.data.endTime)); 
				talkmessagelist(data.data.demandId);
                //格式化时间
                var myDate = temp.format('yyyy-MM-dd');
			    $('#work-parent').css('display','block');
				$('.work-pos-center-left:eq(0) h3').html(data.data.title)
				$('.work-pos-center-left:eq(0) p:eq(0) span:eq(1)').html(data.data.channel)
				$('.work-pos-center-left:eq(0) .red').html('￥'+data.data.budget)
				$('.work-pos-center-left:eq(0) p:eq(2) span:eq(1)').html(myDate)
				$('.work-pos-center-left:eq(0) p:eq(3) span:eq(1)').html(data.data.demandName)
				$('.work-pos-center-left:eq(0) .text').html(data.data.des)
				$('.work-pos-center-left:eq(0) .close').click(function(){
					$("#work-myself").css('display','none');
				})
				$('.work-pos-center-left button').css('display','none'); 
				var fileimgname=data.data.filepath.substring(data.data.filepath.lastIndexOf('/') + 1);
				$('.work-pos-center-left:eq(0) p:last').html('');
				if(fileimgname!="" && fileimgname !=null){
                    $('.work-pos-center-left:eq(0) p:last').html('<span class="file-name">'+fileimgname+'</span><a class="down-a" style="  text-decoration:none; color:#276ae2;" href="'+data.data.filepath+'" download="'+data.data.filepath+'" ><img src="'+url+'/resources/bootstrap/resetImg/ico55.png">下载 </a>');
				}
                $('.work-pos-center-left:eq(0) p:last').append('<input id="work_id_status" type="hidden" value="'+status+'" ');
				$("#language-textarea").attr("name",""+data.data.demandId+"");
			}else{
				alert(data.message);
			}
			
		}
	})
}

//我的项目  列表  “查看全部”==》查看项目详情
function projectlistDetailbytaskid(taskid){
	$.ajax({
		url:url+"/task/project-task-info-2.0-"+taskid+"-2.shtml",
		type:'post',
		data:{taskId:taskid},
		success:function(data){
			if(data.code==0){
				Date.prototype.format = function (format) { 
				    var o = { 
				    "M+": this.getMonth() + 1, 
				    "d+": this.getDate(), 
				    "H+": this.getHours(), 
				    "m+": this.getMinutes(), 
				    "s+": this.getSeconds(), 
				    "q+": Math.floor((this.getMonth() + 3) / 3), 
				    "S": this.getMilliseconds() 
				    } 
				    if (/(y+)/.test(format)) { 
				    format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length)); 
				    } 
				    for (var k in o) { 
				        if (new RegExp("(" + k + ")").test(format)) { 
				            format = format.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k] : ("00" + o[k]).substr(("" + o[k]).length)); 
				        } 
				    } 
				    return format; 
				}
				var temp = new Date(parseInt(data.data.task.endTime)); 
				talkmessagelist(data.data.task.parent_id);
                //格式化时间
                var myDate = temp.format('yyyy-MM-dd');
			    $('#work-parent').css('display','block');
				$('.work-pos-center-left:eq(0) h3').html(data.data.task.title)
				$('.work-pos-center-left:eq(0) p:eq(0) span:eq(1)').html(data.data.task.channel)
				$('.work-pos-center-left:eq(0) .red').html('￥'+data.data.task.budget)
				$('.work-pos-center-left:eq(0) p:eq(2) span:eq(1)').html(myDate)
				$('.work-pos-center-left:eq(0) p:eq(3) span:eq(1)').html(data.data.task.demandName)
				$('.work-pos-center-left:eq(0) .text').html(data.data.task.des)
				$('.work-pos-center-left:eq(0) .close').click(function(){
					$("#work-myself").css('display','none');
				})
				$('.work-pos-center-left button').css('display','none'); 
				var fileimgname=data.data.task.filepath.substring(data.data.task.filepath.lastIndexOf('/') + 1);
				$('.work-pos-center-left:eq(0) p:last').html('');
				if(fileimgname!="" && fileimgname !=null){
                    $('.work-pos-center-left:eq(0) p:last').html('<span class="file-name">'+fileimgname+'</span><a class="down-a" style="  text-decoration:none; color:#276ae2;" href="'+data.data.task.filepath+'" download="'+data.data.task.filepath+'" ><img src="'+url+'/resources/bootstrap/resetImg/ico55.png">下载 </a>');
				}
                $('.work-pos-center-left:eq(0) p:last').append('<input id="work_id_status" type="hidden" value="'+status+'" ');
				$("#language-textarea").attr("name",""+data.data.task.parent_id+"");
			}else{
				alert(data.message);
			}
			
		}
	})
}

//留言板  留言
function createMessagealert(uid,uname,parent_id,content){
	$.ajax({
		url:url+"/task/create-message-board.shtml",
		type:'post',
		data:{
			  talkId:parent_id,
			  talkName:uname,
			  talkclusterId:uid,
			  talkContent:content
		},
		success:function(data){
			if(data.code==0){
				$("#language-textarea").val("");
				talkmessagelist(parent_id);
			}else{
				alert(data.message);
			}
		}
	});
}
function createMessagealert2(uid,uname,parent_id,content){
	$.ajax({
		url:url+"/task/create-message-board.shtml",
		type:'post',
		data:{
			  talkId:parent_id,
			  talkName:uname,
			  talkclusterId:uid,
			  talkContent:content
		},
		success:function(data){
			if(data.code==0){
				$("#language-textarea2").val("");
				talkmessagelist(parent_id);
			}else{
				alert(data.message);
			}
		}
	});
}

//留言板  留言列表
function talkmessagelist(parent_id){
	$.ajax({
		url:url+"/task/talk-list.shtml",
		type:'post',
		data:{
			  id:parent_id
		},
		success:function(data){
			if(data.code==0 || data.code==1 ){
				if(data.code==1){
					$("#language-textarea").val("");
					$("#language-textarea2").val("");
					$(".work-pos-center-right .work-language .work-pos-language").html("");
				}else{
					$("#language-textarea").val("");
					$("#language-textarea2").val("");
					$(".work-pos-center-right .work-language .work-pos-language").html("");
					var talklistinfo="";
					for(var key in data.data) { 
						talklistinfo=talklistinfo+'<div class="language"><div class="language-left"><img src="'+data.data[key].cust_headerpic+'"></div><div class="language-right"><h4>'+data.data[key].cust_name+'</h4><p>'+data.data[key].content+'</p></div><div class="clear"></div></div>';
	                }
		            $(".work-pos-center-right .work-language .work-pos-language").html(talklistinfo);
				}
			}else{
				alert(data.message);
			}
		}
	});
}


//跳转  我的任务->我的项目
function projectSelectByid(appid){
	 window.location.href=url+'/project/project-del-2.0-'+appid+'-2.shtml';
}
//我的项目  下拉列表
function projectSelect(){
    $.ajax({
        url:url+"/project/projectListByMap.shtml",
        type:'post',
        data:{},
        success:function(data){
        	$(".select_block").html("");
        	if(data.code==0){
        		  var lujing="'"+url+"/task/tasks.shtml'";
        		  var selectblockspan='<span onclick="javascript:window.location.href='+lujing+'"   >我的任务</span>';
	        	if(data.data.projectlist.length>0){
                    for(var key in data.data.projectlist) { 
                    	selectblockspan=selectblockspan+'<span onclick="projectSelectByid('+data.data.projectlist[key].applyId+')"  >'+data.data.projectlist[key].title+'</span>';
                    }
                    $(".select_block").html(""+selectblockspan+"");
                }
            }else{
                alert(data.message);
            }
        }
    });
}


/* ============= task-ln-end ============== */
/*                project  addwork 上传                */
$(function(){
    $(document).on('change','#attachFile9',function(){
        var file_name = $(this).val();
        var attachUrl = "";
        // $("#attachForm").submit();
        var option = {
            url : url+"/file/img.shtml",
            data : {
                'v' : '2.0',
                'source' : 2
            },
            type: "post",
            success : function(result){
                if(result.code == '0'){
                	console.log(1)
                    attachUrl = result.data.url;
                    $('#attachForm9 input[type="hidden"]').val(attachUrl);
                    $('.right-body-left-row:eq(6) span:eq(1) p').html(file_name);
                }else{
                    alert(result.message)
                }
            }
        };
        $("#attachForm9").ajaxSubmit(option);
    });
});
function invitation(freemanIdList,taskId,count,event){
	var ev =event?event:window.event;
	var obj = ev.srcElement ? ev.srcElement:ev.target
	if(suc_arr_size.length>=6){
		alert("您已邀约6人，不可继续邀约他人")
		return false;
	}
	var pecount=count+freemanIdList.length;
	if(pecount<11){
		for(var i=0;i<freemanIdList.length;i++){
			if(suc_arr_size.toString().indexOf(freemanIdList[i])<0){
				continue;
			}else{
				alert('您邀请的人当中已经有人被邀请过了');
				return false;
			}
		}
		$.ajax({
	        url : url + '/project/invite.shtml',
	        type : "post",
	        data : {
	            'id' :taskId,
	            freemanIdList:freemanIdList.join(','),
	        },
	        success : function (data) {
	        	if(data.code == '0'){
	        		for(var i=0;i<freemanIdList.length;i++){
	        			suc_arr_size.push(freemanIdList[i])
	        		}
	        		$('.content-right span:eq(0) i').html(suc_arr_size.length);
	        		if($(obj).attr('class')=='textblue'){
	        			$(obj).attr('onclick','').attr('class','');
	            		$(obj).css('color',"#ccc")
	        		}
	        		alert('邀请成功！');
	        		window.location.reload();
	            }else{
	                alert(data.message);
	            }
	        }
	    });
	}else{
		if(freemanIdList.length==0){
			alert("您还未选择邀约人")
		}else{
			alert("您已邀约"+freemanIdList.length+"人，总邀约人不能超过6人")
		}
		return false;
	}
}

//完成邀约发送短信
function work_send_msg(mobile,title,sendid){
	$.ajax({
		url:url+"/project/sendMsg.shtml",
		type:"post",
		data:{
			mobile:mobile,
			content:'三点一刻提醒您参与此次的任务，内容为'+title+''
		},
        success : function (data) {
        	if(data.code ==0){
				$('#body-pos-send').css('display','block');
				$('#'+sendid+'').attr('onclick','');
				$('#'+sendid+'').css('background','#000000');
				$('#'+sendid+'').css('color','#ffffff');
				$('.body-pos-send-button').click(function(){
            		$('#body-pos-send').css('display','none');
    			});
            }else{
            	$('#body-pos-send-no').css('display','block');
            	$('.body-pos-send-button').click(function(){
            		$('#body-pos-send-no').css('display','none');
    			})
            }
        	
		}
	});
}



function project_pass(appDemandId,applyId){
	$.ajax({
		url:url+'/task/complete-pass-'+applyId+'.shtml',
		type:"post",
		success:function(e){
			if(e.code==0){
				window.location.href=url+'/project/project-del-2.0-'+appDemandId+"-2.shtml";
			}else{
				alert(e.message)
			}
		}
	})
}
function project_cancenl(applyId){
	$.ajax({
		url:url+'/task/cancenlapply-demand-'+applyId+'.shtml',
		type:"post",
		success:function(e){
			if(e.code==0){
				window.location.href=window.location.href;
			}else{
				alert(e.message)
			}
		}
	})
}
/*              完善资料       头像                          */
$(function(){
    $(document).on('change','#attachFile11',function(){
        var file_name = $(this).val();
        var attachUrl = "";
        // $("#attachForm").submit();
        var option = {
            url : url+"/file/img.shtml",
            data : {
                'v' : '2.0',
                'source' : 2
            },
            type: "post",
            success : function(result){
                if(result.code == '0'){
                	attachUrl = result.data.url;
                    $('#attachForm11 input[type="hidden"]').val(attachUrl);
                    console.log(file_name)
                    $('#imgHead').attr('src',admin_url + attachUrl)
                }else{
                    alert(result.message)
                }
            }
        };
        $("#attachForm11").ajaxSubmit(option);
    });
});
//      完善资料      上传作品   
$(function(){
    $(document).on('change','#attachFile12',function(){
        var file_name = $(this).val();
        var attachUrl = "";
        // $("#attachForm").submit();
        var option = {
            url : url+"/file/img.shtml",
            data : {
                'v' : '2.0',
                'source' : 2
            },
            type: "post",
            success : function(result){
                if(result.code == '0'){
                	attachUrl = result.data.url;
                    $('#attachForm12 input[type="hidden"]').val(attachUrl);
                }else{
                    alert(result.message)
                }
            }
        };
        $("#attachForm12").ajaxSubmit(option);
    });
});
function userInfo_next1(){
	var userName=$(".div1-info:eq(1) input").val();  //用户名
	var sex=$('.div1-info:eq(2) select').val();         //性别
	var	workLife=$('.div1-info:eq(3) select').val();     //工作年限
	var initTime=$('#time-init').val();                //出生日期
	var city1=$(".div1-info:eq(5) input:eq(0)").val();                //所在地区   省
	var city2=$(".div1-info:eq(5) input:eq(1)").val();                //所在地区   市
	var city3=$(".div1-info:eq(5) input:eq(2)").val();                //所在地区   县
	var wechat=$(".div1-info:eq(6) input").val();                //微信号
	var email=$(".div1-info:eq(7) input").val();                //邮箱
	var phone=$(".div1-info:eq(8) input").val();                //电话
	var des=$(".div1-info:eq(9) textarea").val();                //一句话介绍
	if(city1==""){
    	alert("所在地区不可为空")
    	return false;
    }else if(city1!="" &&city2==""){
    	var workCity=city1
    }else if(city1!="" && city2!="" && city3==""){
    	var workCity=city1+"/"+city2 //工作地点
    }else{
    	var workCity=city1+"/"+city2+"/"+city3;  //工作地点
    }
	if(isEmpty(userName)){
      alert('请输入您的姓名！');
      return false
	}
	if(isEmpty(workCity)){
      alert('请选择您的所在地址！');
      return false
	}
	if(isEmpty(initTime)){
	      alert('请选择您的出生年月日！');
	      return false
		}
	if(isEmpty(wechat)){
	      alert('请输入您的微信号！');
	      return false
		}
	if(isEmpty(email)){
	      alert('请输入您的邮箱！');
	      return false
		}
	if(isEmpty(phone)){
	      alert('请输入您的联系电话！');
	      return false
		}
	if(isEmpty(des)){
	      alert('请输入您的个人介绍！');
	      return false
	}
	if(!phone.match(/^1[3|5|7|8]\d{9}$/gi)){
		alert("您输入的电话格式不正确，请重新输入")
		return false
	}
	if(!email.match(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/)){
		alert("您输入的邮箱格式不正确，请重新输入")
		return false
	}
	if($(".basic-skill span").length<1){
		alert("您没有选择您的技能")
		return false;
	}
	$(".center1").css("display","none")
	$(".center2").css("display","block")
	$('.demand-block-head span:eq(1)').addClass("active")
	$('body').scrollTop(0)
}
function info_complete(){
	var userName=$(".div1-info:eq(1) input").val();  //用户名
	var sex=$('.div1-info:eq(2) select').val();         //性别
	var	workLife=$('.div1-info:eq(3) select').val();     //工作年限
	var initTime=$('#time-init').val();                //出生日期
	var city1=$(".div1-info:eq(5) input:eq(0)").val();                //所在地区   省
	var city2=$(".div1-info:eq(5) input:eq(1)").val();                //所在地区   市
	var city3=$(".div1-info:eq(5) input:eq(2)").val();                //所在地区   县
	var wechat=$(".div1-info:eq(6) input").val();                //微信号
	var email=$(".div1-info:eq(7) input").val();                //邮箱
	var phone=$(".div1-info:eq(8) input").val();                //电话
	var des=$(".div1-info:eq(9) textarea").val();                //一句话介绍
	var head_pic=$("#attachForm11 input[type=hidden]").val();    // 上传头像
	if(head_pic.indexOf("http://file.315pr.com")>-1){
		head_pic="/upload"+head_pic.split('/upload')[1];
	}
	var workName=$(".div3-info:eq(0) input").val();             //作品名字
	var workLink=$(".div3-info:eq(1) input").val();             //作品链接
	var workDes=$(".div3-info:eq(2) textarea").val();             //作品简介
	var workFj= $('#attachForm12 input[type="hidden"]').val();             //附件路径
	
	//      follow_arr        关注领域  
	if(city1==""){
    	alert("所在地区不可为空")
    	return false;
    }else if(city1!="" &&city2==""){
    	var workCity=city1
    }else if(city1!="" && city2!="" && city3==""){
    	var workCity=city1+"/"+city2 //工作地点
    }else{
    	var workCity=city1+"/"+city2+"/"+city3;  //工作地点
    }
	$.ajax({
		url:url+"/user/modifyinfo.shtml",
		type:"post",
		data:{
			channelIds:follow_content.join(','),
            name:userName,
            gender:sex,
            workingLife:workLife,
            birthday:initTime,
            cityArea:workCity,
            wxNum:wechat,
            des:des,
            email:email,
            headerpic:head_pic,
            channels:follow_arr.join(','),
            title:workName,
            link:workLink,
            add_des:workDes,
            img:workFj,
            source:2
		},
		success:function(e){
			if(e.code==0){
				window.location.href=url+"/user/user_info_suc.shtml";
			}else{
				alert(e.message)
			}
		}
	})
}

function resetFreemanList(pageNum){
	var servicetag1 = $('.choice_kind').eq(0).find('span:eq(0)').attr('data');
    var status = $('.choice_kind').eq(1).find('span:eq(0)').attr('data');
    if(servicetag1 == ''){
        servicetag1 = '';
    };
    if(status == ''){
        status = '';
    }

    $('.freemanlist ul').empty();

    $.ajax({
        url : url + '/freeman/freemans.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 12,
            'channel' : status,
            'serviceTag1' : servicetag1
        },
        success : function (data) {
            var freemanlist = data.data.freemans;
            if(!isEmpty(freemanlist)){
            	for(var i=0;i<freemanlist.length;i++){
            		if(!isEmpty(freemanlist[i].freemanName)){
    	            	if(freemanlist[i].freemanName.length>8){
    	            		if(!isEmpty(freemanlist[i].services)){
    	            			if(freemanlist[i].services.split(',').length > 0){
    	            				/*$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substring(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>'+freemanlist[i].services.split(',')[0]+'</span></div></div></a></li>');*/
    	            				$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt="三点一刻智能协同营销平台" /></div><div class="freemanlist-content"><h3>'+freemanlist[i].freemanName.substring(0,8)+'...'+'</h3><div>服务标签<span>'+freemanlist[i].services.split(',')[0]+'</span></div><p>'+freemanlist[i].experience +'</p><p style="float:right">完成单数：<span style="color:#f00">'+ freemanlist[i].orderCount +'单</span></p><i class="clear"></i></div></a></li>');
    	            			}else{
    	            				/*$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substring(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');*/
    	            				$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt="三点一刻智能协同营销平台" /></div><div class="freemanlist-content"><h3>'+freemanlist[i].freemanName.substring(0,8)+'...'+'</h3><div>服务标签<span>完善中</span></div><p style="float:right">完成单数：<span style="color:#f00">'+ freemanlist[i].orderCount +'单</span></p><i class="clear"></i></div></a></li>');
    	            			}
    	            		}else{
    	            			/*$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substring(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');*/
    	            			$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt="三点一刻智能协同营销平台" /></div><div class="freemanlist-content"><h3>'+freemanlist[i].freemanName.substring(0,8)+'...'+'</h3><div>服务标签<span>完善中</span></div><p style="float:right">完成单数：<span style="color:#f00">'+ freemanlist[i].orderCount +'单</span></p><i class="clear"></i></div></a></li>');
    	            		}
    	            	}else{
/*    	            		if(!isEmpty(freemanlist[i].services)){
    	            			if(freemanlist[i].services.split(',').length > 0){
    	            				$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>'+freemanlist[i].services.split(',')[0]+'</span></div></div></a></li>');
    	            			}else{
    	            				$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');
    	            			}
    	            		}else{
    	            			$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');
    	            		}*/
    	            		if(!isEmpty(freemanlist[i].services)){
    	            			if(freemanlist[i].services.split(',').length > 0){
    	            				/*$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substring(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>'+freemanlist[i].services.split(',')[0]+'</span></div></div></a></li>');*/
    	            				$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt="三点一刻智能协同营销平台" /></div><div class="freemanlist-content"><h3>'+freemanlist[i].freemanName+'</h3><div>服务标签<span>'+freemanlist[i].services.split(',')[0]+'</span></div><p>'+freemanlist[i].experience +'+</p><p style="float:right">完成单数：<span style="color:#f00">'+ freemanlist[i].orderCount +'单</span></p><i class="clear"></i></div></a></li>');
    	            			}else{
    	            				/*$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substring(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');*/
    	            				$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt="三点一刻智能协同营销平台" /></div><div class="freemanlist-content"><h3>'+freemanlist[i].freemanName+'</h3><div>服务标签<span>完善中</span></div><p style="float:right">完成单数：<span style="color:#f00">'+ freemanlist[i].orderCount +'单</span></p><i class="clear"></i></div></a></li>');
    	            			}
    	            		}else{
    	            			/*$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substring(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');*/
    	            			$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt="三点一刻智能协同营销平台" /></div><div class="freemanlist-content"><h3>'+freemanlist[i].freemanName+'</h3><div>服务标签<span>完善中</span></div><p style="float:right">完成单数：<span style="color:#f00">'+ freemanlist[i].orderCount +'单</span></p><i class="clear"></i></div></a></li>');
    	            		}
    	            	}
                	}else{
                		/*$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>&nbsp;&nbsp;<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');*/
                		$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt="三点一刻智能协同营销平台" /></div><div class="freemanlist-content"><h3>&nbsp;&nbsp;</h3><div>服务标签<span>完善中</span></div><p style="float:right">完成单数：<span style="color:#f00">'+ freemanlist[i].orderCount +'单</span></p><i class="clear"></i></div></a></li>');
                	}
                	//$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substring(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');
//                   if(freemanlist[i].freemanName.length< 8){
//    					if(!isEmpty(freemanlist[i].services && freemanlist[i].services.split(',').length > 1)){
//    						$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>'+ freemanlist[i].services.split(',')[0] +'</span></div></div></a></li>');
//    							
//    					}else if(!isEmpty(freemanlist[i].services)  && freemanlist[i].services.split(',').length == 1){
//    						$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>'+ freemanlist[i].services +'</span><span>&nbsp;</span></div></div></a></li>');
//    					}else{
//    						$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');
//    					}
//    					//$('.freemanlist ul li:nth-of-type(4n)').css('marginRight','0');
//    				}else{
//    					
//    					if(!isEmpty(freemanlist[i].services && freemanlist[i].services.split(',').length > 1)){
//    						$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substr(0,8)+'...'+'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>'+ freemanlist[i].services.split(',')[0] +'</span></div></div></a></li>');
//    							
//    					}else if(!isEmpty(freemanlist[i].services)  && freemanlist[i].services.split(',').length == 1){
//    						$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substr(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>'+ freemanlist[i].services +'</span><span>&nbsp;</span></div></div></a></li>');
//    					}else{
//    						$('.freemanlist ul').append('<li><a href="'+url+'/freeman/freeman_del-2.0-'+ freemanlist[i].freemanId +'-2.shtml"><div class="freemanlist-img"><img src="' + freemanlist[i].headerPic +'" alt=""/></div><div class="freemanlist-content"><h3><span>'+ freemanlist[i].freemanName.substr(0,8)+'...' +'<em>'+ freemanlist[i].orderCount +'单</em></span></h3><div>服务标签：<span>完善中</span></div></div></a></li>');
//    					}
//    					
//    					//$('.freemanlist ul li:nth-of-type(4n)').css('marginRight','0');
//    					
//    				}
                }
            }
            /*$('.freemanlist li img').height($('.freemanlist li img').width());*/
            var aLi = $('.freemanlist li');
            for(var i=0;i<aLi.length;i++){
                if(i%3==2){
                	console.log(i)
                    aLi[i].style.marginRight = '0';
                }
            }

            if(data.data.totalCount%12 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/12)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/12));
                $('#page-box .num').text(parseInt(data.data.totalCount/12));
            }

            $('#page-box .total').text(data.data.totalCount);


            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();

                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    //freemanList(page)
                    resetFreemanList(page)
                }
            });
            $('#page-box .now').text($('#page-box .active').text());
        }
    });
}
function resetDemandList(pageNum){
	var servicetag1 = $('.choice_kind').eq(0).find('span:eq(0)').attr('data');
    var status = $('.choice_kind').eq(1).find('span:eq(0)').attr('data');
    if(servicetag1 == ''){
        servicetag1 = '';
    };
    if(status == ''){
        status = '';
    }

    $.ajax({
        url : url + '/demand/demands.shtml',
        type : "post",
        data : {
            'v' : '2.0',
            'source' : 2,
            'page' : pageNum,
            'limit' : 9,
            'status' : status,
            'serviceTag1' : servicetag1
        },
        success : function (data) {
            // var dataset = $.parseJSON(data);
            var demandlist = data.data.list;

            $('.demandlist ul').empty();
            var servicezifu=0;
            for(var i=0;i<demandlist.length;i++){
            	if(!isEmpty(demandlist[i].serviceTag1) ){
                	var strlength=demandlist[i].serviceTag1 +'-'+ demandlist[i].serviceTag2 +'' +demandlist[i].channel;
    	            if(!isEmpty(strlength)){
    	            	servicezifu=strlength.replace(/[^\x00-\xFF]/g,'**').length;
    	            }
                }
	            if(isEmpty(demandlist[i].channel)){
		            demandlist[i].channel = '保密';
	            }
	            if(demandlist[i].status==0){
	            	var img_bg="img_pos_f00"
	            }else if(demandlist[i].status==1){
	            	var img_bg="img_pos_000"
	            }else if(demandlist[i].status==2){
	            	var img_bg="img_pos_ccc"
	            }else if(demandlist[i].status==4){
	            	var img_bg="img_pos_green"
	            }
	            if(servicezifu<28){
	            	$('.demandlist ul').append('<li><a href="'+url+'/demand/info-2.0-'+ demandlist[i].id +'-2.shtml"><div class="content"><div class="img_pos '+img_bg+'">'+demand_status(demandlist[i].status)+'</div><h3>'+demandlist[i].title+'</h3><p class="end_time">发布时间：</p><div class="demandlist-date">'+ timeTransformation(demandlist[i].createTime) +'</div><div class="demandlist-d"><span>'+ (demandlist[i].serviceTag1 +'-'+ demandlist[i].serviceTag2) +'</span><span>'+ (demandlist[i].channel) +'</span></div><div class="demandlist-p">￥'+demandlist[i].budget+'</div><div class="demandlist-c"><span>已申请<i>'+ demandlist[i].applyCount +'</i>人</span><span>已浏览<i>'+demandlist[i].seeCount+'</i>人</span></div></div></a></li>');
}else{
	$('.demandlist ul').append('<li><a href="'+url+'/demand/info-2.0-'+ demandlist[i].id +'-2.shtml"><div class="content"><div class="img_pos '+img_bg+'">'+demand_status(demandlist[i].status)+'</div><h3>'+demandlist[i].title+'</h3><p class="end_time">发布时间：</p><div class="demandlist-date">'+ timeTransformation(demandlist[i].createTime) +'</div><div class="demandlist-d"><span>'+ (demandlist[i].serviceTag1 +'-'+ demandlist[i].serviceTag2.slice(0,8)) +'</span><span>'+ (demandlist[i].channel.slice(0,6)) +'</span></div><div class="demandlist-p">￥'+demandlist[i].budget+'</div><div class="demandlist-c"><span>已申请<i>'+ demandlist[i].applyCount +'</i>人</span><span>已浏览<i>'+demandlist[i].seeCount+'</i>人</span></div></div></a></li>');
}
	            servicezifu=0;
            }
            
            var aLi = $('.demandlist li');
            for(var i=0;i<aLi.length;i++){
                if(i%3 == 2){
                    aLi[i].style.marginRight = '0';
                }
            }

            if(data.data.totalCount%9 >0){
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/9)+1);
                $('#page-box .num').text(parseInt(data.data.totalCount/9)+1);
            }else{
                $('input[type="hidden"]').val(parseInt(data.data.totalCount/9));
                $('#page-box .num').text(parseInt(data.data.totalCount/9));
            }

            $('#page-box .total').text(data.data.totalCount);

            $('.page').pagination({
                coping:true,
                count:2,
                homePage:'首页',
                endPage:'末页',
                prevContent:'上页',
                nextContent:'下页',
                current: pageNum,
                callback:function(options){
                    var page = options.getCurrent();
                    $('.now').text(page);
                    // 这里写ajax请求。传递到后端的参数里一定要有当前页的页码哟。
                    //demandList(page);
                    resetDemandList(page)
                }
            });
        }
    });
}

//时间转换成  年月日 
function timeTransformation(timestr){
	 Date.prototype.format = function (format) { 
		    var o = { 
		    "M+": this.getMonth() + 1, 
		    "d+": this.getDate(), 
		    "H+": this.getHours(), 
		    "m+": this.getMinutes(), 
		    "s+": this.getSeconds(), 
		    "q+": Math.floor((this.getMonth() + 3) / 3), 
		    "S": this.getMilliseconds() 
		    } 
		    if (/(y+)/.test(format)) { 
		    format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length)); 
		    } 
		    for (var k in o) { 
		        if (new RegExp("(" + k + ")").test(format)) { 
		            format = format.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k] : ("00" + o[k]).substr(("" + o[k]).length)); 
		        } 
		    } 
		    return format; 
		}
		var temp = new Date(parseInt(timestr)); 
		var year = temp.getFullYear();
	    var month = temp.getMonth()+1;    //js从0开始取 
	    var date1 = temp.getDate(); 
	    var hour = temp.getHours(); 
	    var minutes = temp.getMinutes(); 
	    var second = temp.getSeconds();
	    var rTime=""+year+"年"+month+"月"+date1+"日";
		return rTime;
}
