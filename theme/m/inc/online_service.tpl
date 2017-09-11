<div class="fixedBox">
  <style>
    {literal}
    .fixed-frame .text{font-size:16px;color:#000;} 
    .frame-box{ text-align: center;clear: both; }
    .box{float:left;width:100%;position: relative;margin-bottom: 10px;}
    .fixed-frame .tel {float:left;display:block;width:100%;padding-bottom:10px;color:#c8003c;font-size:14px;font-weight: bold; } 
    .fixed-frame .btn { display: block; width: 110px; height: 35px; line-height: 35px; border-radius: 7px; border:1px #B2B0B0 solid; background: #fff; color: #000; text-align: center; margin: 10px auto; }
    .fixed-frame img{display:block;margin:2px auto;}
    .fixed-frame div,.fixed-frame a{text-align:center;}
    {/literal}
  </style>
  <div id="fixed" class="fixed-frame fixed">
    <div class="box">
      <div class="text">联系电话</div>
    </div>
    <a href="tel:4008-315-002" class="tel">{$site.tel}</a>
    <div class="text">营销咨询</div>
    <img src="{$site.theme}picture/icocode1.png" alt="客服"/>
    <div class="text">智库咨询</div>
    <img src="{$site.theme}picture/icocode2.png" alt="客服"/>
  </div>
</div>