
<div class="fixedTop" style="position:relative"></div>

<div class="head">
    <div class="logo">
        <a href="{$site.root_url}"><img src="sys/{$site.site_logo}" alt="{$site.site_name}" title="{$site.site_name}"></a>
    </div>
    <ul class="nav">
        <li{if $index.cur} class="cur"{/if}><a href="{$site.root_url}">{$lang.home}</a></li>
        <!--{foreach $nav_middle_list $nav}-->
        <li{if $nav.cur} class="cur hover"{/if}><a href="{$nav.url}">{$nav.nav_name}</a></li>
        <!--{/foreach}-->
    </ul>
        <!--{if $open.user}-->
        <!-- 登录后 -->
        <!--{if $user}-->
        <div class="getInto">
            <div class="right-btn1">
                <a href="{$url.user}"><img alt="{$user.user_name}" src="{$user.thumb}"></a>
                <a href="{$url.user}"><span>{$user.user_name}</span></a>
                <div class="user_list">
                    <span><img src="{$site.theme_s}resetImg/list_up.png"></span>
                    <ul>
                        <li><a href="{$url.user}"><em class="list1"></em>个人中心</a><div style="clear:both"></div></li>
                        <li><a href="{$url.logout}"><em class="list3"></em>{$lang.user_logout}</a><div style="clear:both"></div></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--{else}-->
        <div class="getInto2">
            <div class="right-btn1">
                <a href="{$site.root_url}"><span>{$lang.user_login_nav}</span> / <span>{$lang.user_register_nav}</span></a>
            </div>
        </div>
        <!--{/if}-->
        <!--{/if}-->
    <div style="clear:both"></div>
</div>

<hr style="margin:0;padding:0;">

<script>
    {literal}
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
    {/literal}
</script>