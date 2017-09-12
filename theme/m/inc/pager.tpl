<meta http-equiv="Content-Type" content="text/html; charset={$site.dou_charset}" />

<div id="page-box">
    <input name="pageInput" value="" type="hidden">
    <div class="page">
        <a href="{$pager.first}">{$lang.pager_first}</a> 
        <!--{if $pager.page gt 1}-->
        <a href="{$pager.previous}">{$lang.pager_previous}</a>
        <!--{else}-->{$lang.pager_previous}<!--{/if}-->

        {$pager.pagep}
        {$pager.current}
        {$pager.pagen}

        <!--{if $pager.page lt $pager.page_count}-->
        <a href="{$pager.next}">{$lang.pager_next}</a>
        <!--{else}-->{$lang.pager_next}<!--{/if}-->
        <a href="{$pager.last}">{$lang.pager_last}</a>
    </div>
    <em>
        <span class="now">{$pager.page}</span>/<span class="num">{$pager.page_count}</span>页
        共<span class="total">{$pager.record_count}</span>条
    </em>
</div>