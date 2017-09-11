<div class="footer_bg">
    <div class="footer_auto">
        <div class="contactUs">
            <img src="{$site.theme_s}resetImg/logo_fff.png">
            <div class="clear"></div>
            <span>商务热线：{$site.fax}</span>
            <span>服务热线：{$site.tel}</span>
            <span>联系地址：{$site.site_address}</span>
            <span>{$lang.copyright} {$lang.powered_by} {$site.icp}</span>
        </div>

        <div class="listText">
            {section name=bottom loop=$nav_bottom_list start=0 max=2}
            <a href="{$nav_bottom_list[bottom].url}">{$nav_bottom_list[bottom].nav_name}</a>
            {/section}
        </div>
        <div class="listText">
            {section name=bottom loop=$nav_bottom_list start=2 max=10}
            <a href="{$nav_bottom_list[bottom].url}">{$nav_bottom_list[bottom].nav_name}</a>
            {/section}
        </div>
        <div class="codeBox">
            <div class="codeText">
                <img src="{$site.theme_s}resetImg/ico23.jpg">
                <span>微信公众号</span>
            </div>
            <div class="codeText">
                <img src="{$site.theme_s}resetImg/ico24.jpg">
                <span>APP 三点一刻</span>
            </div>
            <i class="clear"></i>
        </div>
        <i class="clear"></i>
    </div>
</div>

<!--{if $site.code}-->
<div style="display:none">{$site.code}</div>
<!--{/if}-->