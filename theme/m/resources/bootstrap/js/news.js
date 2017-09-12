
function code_keyup(){
    var status = $("#status").val();
    var pic_yz = $("#code").val();
    var mobile = $("#mobile").val();
    if($("#code").val().length==4){
        if(!(/^1(3|4|5|7|8)\d{9}$/.test(mobile))){
            $('#msg_tag').css('color','#F00').addClass('msg_tag').html('手机号码不正确！');
            return false; 
        }
        $.ajax({
            // url:url,
            url: 'captcha.php',
            type: 'post',
            dataType: 'json',
            data:{
                status:status,
                imgCode:pic_yz,
                mobile:mobile
            },
            success:function(e) {
                // console.log(e);
                if(e.code==1) {
                    $("#code").val('')
                    $('.getCode').attr('onclick','');
                    $("#code").attr("onkeyup",'').attr('placeholder',"请填写短信验证码");
                    settime(60);
                    $('#msg_tag').css('color', '#61CE3C').addClass('msg_tag').html(e.msg);
                } else {
                    $('.getCode').html('<img src="captcha.php" id="vcode">');
                    refreshimage();
                    $("#code").attr({
                        placeholder: '请输入验证码',
                        onkeyup: "code_keyup()"
                    }).val('');
                    $('#msg_tag').css('color', '#F00').addClass('msg_tag').html(e.msg);
                }
            }
        })
    }
}

function settime(countdown){
    if (countdown == 0) {
        $('.getCode').html('<img src="captcha.php" id="vcode">');
        refreshimage();
        $("#code").attr({
            placeholder: '重新操作',
            onkeyup: "code_keyup()"
        });
        return false;
    }else{
        $('.getCode').html(countdown+'s 后可重新操作');
        countdown--;
    }
    setTimeout(function() {
        settime(countdown);
    },1000)
}

// 换验证码，不用这个
function ajax_picYZ(){
    $.ajax({
        url:"/user/img.shtml",
        type:"post",
        success:function(e){
            var data=new Date();
            $('#popup-sublimt').attr('src',url+"/user/img.shtml?"+data.getTime())
        }
    })
}