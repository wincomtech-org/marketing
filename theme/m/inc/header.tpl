<div class="head">
    <div class="logo">
        <a href="{$site.root_url}"><img src="sys/{$site.site_logo}"></a>
    </div>
    <div class="menu">
        <div class="menu_icon">
            <a class="menu_icon_a"><span></span></a>
        </div>

        <ul class="nav" style="display:none">
            <li{if $index.cur} class="cur"{/if}><a href="{$site.root_url}">{$lang.home}</a></li>
            <!--{foreach $nav_middle_list $nav}-->
            <li{if $nav.cur} class="cur hover"{/if}><a href="{$nav.url}">{$nav.nav_name}</a></li>
            <!--{/foreach}-->
        </ul>
    </div>

    <div class="getInto">
        <!--{if $open.user}-->
        <!--{if $user}-->
        <div class="right-btn1">
            <a href="{$url.user}"><img alt="" src="{$site.theme_s}images/ico21.png"></a>
            <a href="{$url.user}"><span>{$user.user_name}</span></a>
            <div class="user_list">
                <span><img src="{$site.theme_s}resetImg/list_up.png" alt=""></span>
                <ul>
                    <li><a href="{$url.user}"><em class="list1"></em>个人中心</a><div style="clear:both"></div></li>
                    <li><a href="{$url.order_list}"><em></em>我的订单</a><div style="clear:both"></div></li> 
                    <li><a href="{$url.cart}"><em></em>购物车</a><div style="clear:both"></div></li> 
                    <li><a href="{$url.logout}"><em></em>退出登录</a><div style="clear:both"></div></li>
                </ul>
            </div>
        </div>
        <!-- {else} -->
        <div class="right-btn">
            <a href="{$url.login}">登录</a><span>|</span>
            <a href="{$url.register}">注册</a>
        </div>
        <!--{/if}-->
        <!--{/if}-->
    </div>
    <div style="clear:both"></div>
</div>
<hr style="margin:0;padding:0;">