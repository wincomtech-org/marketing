<div class="usercenter_tag">
    <ul>
        <li {if $rec eq 'default'} class="active"{/if}><a href="{$url.user}"><em></em>基本信息</a></li>
        <li {if $rec eq 'order_list'} class="active"{/if}><a href="{$url.order}"><em></em>我的订单</a></li>
        <li {if $rec eq 'cart'} class="active"{/if}><a href="{$url.cart}"><em></em>购物车</a></li>
        <li {if $rec eq 'logout'} class="active"{/if}><a href="{$url.logout}"><em></em>退出登录</a></li>
    </ul>
</div>