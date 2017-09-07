<?php
if (!defined('IN_LOTHAR')) die('Hacking attempt');

/* 插件唯一ID
----------------------------------------------------------------------------- */
$plugin['unique_id'] = 'wxpayjs';

/* 插件名称
----------------------------------------------------------------------------- */
$plugin['name'] = $plugin_mysql['name'] ? $plugin_mysql['name'] : '微信在线支付';

/* 插件描述
----------------------------------------------------------------------------- */
$plugin['description'] = $plugin_mysql['description'] ? $plugin_mysql['description'] : '网上交易时，买家的交易资金直接打入卖家微信账户，快速回笼交易资金。申请前必须拥有服务号的微信账号。';

/* 插件版本
----------------------------------------------------------------------------- */
$plugin['ver'] = '1.0';

/* 所属组
----------------------------------------------------------------------------- */
$plugin['plugin_group'] = 'payment';

/* 插件参数提交表单
 * type默认为'text'及文本框，可选"text,select,textarea"
 * option默认为空，select默认选项，如array("选项一" => 0,"选项二" => 1)
----------------------------------------------------------------------------- */
// 收款微信账号
$plugin['config'][] = array(
        "field" => 'seller_email',
        "name" => '微信帐户',
        "value" => $plugin_mysql['config']['seller_email']
);

// 安全检验码，以数字和字母组成的32位字符
$plugin['config'][] = array(
        "field" => 'key',
        "name" => '安全校验码(Key)',
        "desc" => '安全检验码，以数字和字母组成的32位字符',
        "value" => $plugin_mysql['config']['key']
);

// 合作身份者id，以2088开头的16位纯数字
$plugin['config'][] = array(
        "field" => 'partner',
        "name" => '合作者身份(Pid)',
        "desc" => '合作身份者id，以2088开头的16位纯数字',
        "value" => $plugin_mysql['config']['partner']
);
?>