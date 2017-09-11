<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{$site.dou_charset}">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <title>{$page_title}</title>
    <meta name="keywords" content="{$keywords}">
    <meta name="description" content="{$description}">
    <link rel="stylesheet" type="text/css" href="{$site.theme}css/index.css">
    <link rel="stylesheet" href="{$site.theme_s}css/style.css"/>
    <script type="text/javascript">
    {literal}
        (function(doc, win) {
            var scaleNum = 1 / window.devicePixelRatio;
            var temp = '<meta name="viewport" content="initial-scale=' + scaleNum + ',minimum-scale=' + scaleNum + ',maximum-scale=' + scaleNum + ',user-scalable=no" />';
            var oHead = document.getElementsByTagName('head')[0];
            oHead.innerHTML += temp;
            var docEl = doc.documentElement,
            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
            recalc = function() {
                var clientWidth = docEl.clientWidth;
                if (!clientWidth) return;
                docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
            };
            recalc();
            if (!doc.addEventListener) return;
            win.addEventListener(resizeEvt, recalc, false);
            doc.addEventListener('DOMContentLoaded', recalc, false);
            document.addEventListener('touchstart',function (event) { 
                if(event.touches.length>1){ 
                    event.preventDefault(); 
                } 
            }) 
            var lastTouchEnd=0; 
            document.addEventListener('touchend',function (event) { 
                var now=(new Date()).getTime(); 
                if(now-lastTouchEnd<=300){ 
                    event.preventDefault(); 
                } 
                lastTouchEnd=now; 
            },false) 
        })(document, window);
    {/literal}
    </script>
</head>