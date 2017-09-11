<div class="head">
    <div class="logo">
        <a href="{$site.root_url}"><img src="sys/{$site.site_logo}" alt="{$site.site_name}"></a>
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
        <!-- 登录后 -->
        <!--{if $user}-->
        <div class="right-btn1">
            {$site.theme_s}
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