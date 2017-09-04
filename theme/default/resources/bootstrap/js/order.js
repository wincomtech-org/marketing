   

  $(document).ready(function(){
      // 手机正则
      function isPoneAvailable(str) {

          var myreg=/^[1][3,4,5,7,8][0-9]{9}$/;  
          if (!myreg.test(str)) { 
             $('.order_item_tip').css('display','none');
             $('.order_item_tip.error').css('display','block');
              return false; 
          } else {  
              return true;  
          }  
      }  

      $('input[name="phone"]').blur(function(){
          var phone_val= $('input[name="phone"]').val();
          var myreg=/^[1][3,4,5,7,8][0-9]{9}$/;  
          if (!myreg.test(phone_val)) { 
              $(this).parent().siblings('.order_item_tip').hide();
              $(this).parent().siblings('.order_item_tip.error').show();
              return false; 
          } else { 
               $(this).parent().siblings('.order_item_tip').show();
               $(this).parent().siblings('.order_item_tip.error').hide();
              return true;  
          }  


        })
      $('input[name="name"]').blur(function(){
          var name_val= $('input[name="name"]').val();
          if(name_val==""){
              $(this).parent().siblings('.order_item_tip').hide();
              $(this).parent().siblings('.order_item_tip.error').show();
              return false; 
          }else{
              $(this).parent().siblings('.order_item_tip').show();
               $(this).parent().siblings('.order_item_tip.error').hide();
                return true;  
          }
      })
      $('input[name="address"]').blur(function(){
          var address_val=  $('input[name="address"]').val();
          if(address_val==""){
              $(this).parent().siblings('.order_item_tip').hide();
              $(this).parent().siblings('.order_item_tip.error').show();
              return false; 
          }else{
              $(this).parent().siblings('.order_item_tip').show();
               $(this).parent().siblings('.order_item_tip.error').hide();
                return true;  
          }
      })


  })
   function check(form) {

          if(form.name.value=='') {
                alert("请输入用户帐号!");
                form.name.focus();
                return false;
           }else  if(form.userProvinceId.value==""){
                alert('请填写地区')
                return false;
           }else if(form.address.value==''){
                alert("请输入详细信息!");
                form.address.focus();
                return false;
          }else if(form.phone.value==''){
                alert("请填写手机号");
                form.phone.focus();
                return false;
          }
           return true;
} 






/***提交订单信息**/
$('.order_amount button').on('click',function(){
   /***收货人信息**/
   var consignee=$('.completed_address_list_item.active .completed_address_detail_list');
 
})

/*支付页面*/
 // 支付方式切换
 $(function(){
    window.onload=function(){
      var $pay_li=$('.pay_tab_list_item');
      var $pay_con=$('.pay_tab_con_list_item');
      $pay_li.click(function(){
          var $this=$(this);
          var $index=$this.index();
          $pay_li.siblings('.pay_tab_list_item').hide();
          $pay_li.removeClass('active');
          $pay_li.show();
          $this.addClass('active')
          $pay_con.css('display','none');
          $pay_con.eq($index).css('display','block');
      })

    }

    /***银行支付**/
    $(".pay_bank ").delegate('label',"click",function(){
          var that=$(this);
          var input_val=$(this).siblings('input').val();
          that.parent().siblings('li').find('label').removeClass('select');
          that.addClass('select');
    })

 })

/**订单页*/


$('.goods_lists_item').each(function(){
 
    if($(this).children().children().hasClass('not_pay')){
       console.log($(this))
      $(this).find('.order_pay').remove();
    }
})


$(document).delegate('.order_del','click',function(){
    $(this).parent().parent().remove()
})







$(function(){

    /*购物车*/
    total();
    $(document).delegate('#selectAll','click',function(){
         $('input[name="subbox"]').prop('checked',this.checked);
         if($(this).is(":checked")){
           $('input[name="subbox"]').parent().parent().addClass('slectedbox');
         }else{
           $('input[name="subbox"]').parent().parent().removeClass('slectedbox');
         }
         total();
       })

     var $sub=$('input[name="subbox"]')
       $(document).delegate('.slectBox','click',function(){
            $('#selectAll').prop('checked', $sub.length == $('input[name="subbox"]:checked').length ? true : false);
           $(this).parent().parent().removeClass('slectedbox')
     
           if($(this).is(":checked")){
            $(this).parent().parent().addClass('slectedbox')
           }
           total()

       })

      function total(){
        var priceTotal=0;
        var nu=0;
        $('.slectedbox').each(function(){
          var price=$(this).find('.td-price').text();
          var num=$(this).find('.td-amount').text();
          nu+=parseInt(num);
          priceTotal+=parseFloat(price);
        })

        $('#totalAmount').html(nu);
        $('#priceTotal').html(priceTotal);

        /**本地存储**/
        var tablemes=document.getElementById('cart-table');
        sessionStorage.setItem('data',tablemes.innerHTML)
        var t=sessionStorage.getItem('data');
        
        var t=sessionStorage.getItem('data');
   
      }

      /**删除*/
      $(document).delegate('.delete','click',function(){
        $(this).parent().parent().remove();
         total();
      })
      $(document).delegate('#delAll','click',function(){
        $(this).parent().parent().parent().siblings('.cart-order').find(".order-item").remove();
         total();
      })

      
})




   
 
    
    

