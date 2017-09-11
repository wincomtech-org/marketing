<div class="fixedTop" style="position:relative"></div>
<div class="head">
        <div class="logo">
            <a href="index.html"><img src="../resources/bootstrap/img/logo_top1.png"></a>
        </div>
        <div class="menu">
            <div class="menu_icon">
                <a class="menu_icon_a">
                    <span></span>
                </a>
            </div>
            <ul class="nav" style="display:none">
                <li><a href="../index.html">首页</a></li>
                <li><a href="../case/page.shtml.html">案例</a></li>
                <li><a href="../smart/list.shtml.html">媒介</a></li>
                <li><a href="../package/page.shtml.html">营销套餐</a></li>
                <li><a href="../report/page.shtml.html">资讯</a></li>
            </ul>
        </div>
        
        <div class="getInto">
            </div>
        <div style="clear:both"></div>
    </div>
    <script >
        $(document).delegate('.menu_icon','click',function(){
         $(this).siblings('.nav').toggle();
         })
    </script>
    <hr style="margin:0;padding:0;">
<Script>
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
</Script>