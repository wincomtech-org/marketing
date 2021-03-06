<?php
define('IN_LOTHAR', true);
$sub = 'cart|checkout|update|del|success|second_success';
$subbox = array(
        "module" => 'order',
        "sub" => $sub
);
require (dirname(__FILE__) . '/include/init.php');
require ROOT_PATH .'public.php';

// 验证是否登录
if (IS_M) {
    if (!is_array($_USER)) {
        $dou->dou_header($_URL['login']);
    }
} else {
    if (!is_array($_USER)) 
        $dou->dou_msg('请登录后再购买',ROOT_URL);
}

// 引入和实例化订单功能
include_once (ROOT_PATH . 'include/order.class.php');
$dou_order = new Order();

// rec操作项的初始化
$rec = $check->is_rec($_REQUEST['rec']) ? $_REQUEST['rec'] : 'cart';

// 赋值给模板-meta和title信息
$smarty->assign('keywords', $_CFG['site_keywords']);
$smarty->assign('description', $_CFG['site_description']);

// 赋值给模板-导航栏
// $smarty->assign('nav_top_list', $dou->get_nav('top'));
$smarty->assign('nav_middle_list', $dou->get_nav('middle', 0, 'order', 0));
$smarty->assign('nav_bottom_list', $dou->get_nav('bottom'));

// 赋值给模板-数据
$smarty->assign('rec', $rec);



/**
 * +----------------------------------------------------------
 * 购物车商品列表
 * +----------------------------------------------------------
 */
if ($rec == 'cart') {
    // 赋值给模板-数据
    $pagesize = isset($_REQUEST['p'])?intval($_REQUEST['p']):0;
    // 是否做缓存？？
    $products = $dou_order->get_cart($_SESSION[DOU_ID]['cart'],'','medium','id,title,cat_id,image,indusid,proid,fans,moneys,click,add_time,sort');

    $pagend = $pagesize+20;
    foreach ($products['list'] as $key => $value) {
        if ($pagesize<=$key && $key<$pagend) {
            $temp_c[] = $value;
        }
    }
    $procount = count($products['list']);

    // AJAX 调用更多
    if ($_REQUEST['ajax']) {
        if ($procount<=$pagesize) {
            echo json_encode(array('nore'=>true));exit();
        }
        $probox = '';
        foreach ($temp_c as $k => $v) {
            $district = $v['district']?$v['district']:'全国';
            $probox .= <<<PPP
            <tr class="order-item tabl-tr">
                <td class="td td-chk tabl">
                    <input class="slectBox" type="checkbox" name="idbox[]" value="{$v[id]}">
                </td>
                <td class="td td-logo tabl">   
                    <span class="img"><img src="{$v[image]}"></span> 
                </td>
                <td class="td td-name tabl">{$v[title]}</td> 
                <td class="td td-indust tabl">{$v[industry]}</td> 
                <td class="td td-area tabl">{$district}</td> 
                <td class="td td-fans tabl">{$v[fans]}</td> 
                <td class="td td-price tabl">{$v[price_normal]}</td> 
                <td class="td td-nums tabl">{$v[number]}</td> 
                <td class="td td-total tabl">￥<span class="price-sum">{$v[subtotal_normal]}.00</span>元</td> 
                <td class="td td-delete tabl">
                    <a class="delete" href="{$_URL[del]}&id={$v[id]}">{$_LANG[del]}</a>
                </td>
            </tr>
PPP;
        }
        echo json_encode(array('box'=>$probox,'end'=>$pagend));
        exit;
    }

    $products['list'] = $temp_c;

    $smarty->assign('carts', $products);
    $smarty->assign('pagend', $pagend);
    $smarty->assign('procount', $procount);
    $smarty->assign('page_title', $dou->page_title('order_cart'));

    $smarty->display('user/shopcart.html');
}

/**
 * +----------------------------------------------------------
 * 商品加入购物车
 * +----------------------------------------------------------
 */
elseif ($rec == 'insert') {
    $product_id = $check->is_number($_REQUEST['product_id']) ? $_REQUEST['product_id'] : '';
    $number = $check->is_number($_REQUEST['number']) ? $_REQUEST['number'] : 1;

    // 是否第一次使用购物车
    if(!isset($_SESSION[DOU_ID]['cart'])){
        $_SESSION[DOU_ID]['cart'] = array();
    }
    
    if ($product_id) {
        // 如果商品已存在则增加其数量
        if (isset($_SESSION[DOU_ID]['cart'][$product_id])) {
            $_SESSION[DOU_ID]['cart'][$product_id] = $number + $_SESSION[DOU_ID]['cart'][$product_id];
        } else {
            $_SESSION[DOU_ID]['cart'][$product_id] = $number;
        }

        // 取数
        $pros = $dou_order->get_cart($_SESSION[DOU_ID]['cart'],'','medium','id,title,moneys');
        $pros['title'] = $dou->get_one("SELECT title from ".$dou->table('medium')." where id=".$product_id);
        // $pros = $dou->fetchRow("SELECT title,moneys from ".$dou->table('medium')." where id=".$product_id);
        // $total = $amount = 0;
        // foreach ($_SESSION[DOU_ID]['cart'] as $num) {
        //     $total += $num;
        //     $amount += $num*$pros['moneys'];
        // }
        $dou->popup('已成功加入购物车',2,3,array('name'=>$pros['title'],'total'=>$pros['total'],'amount'=>$pros['product_amount']));
    }
    $dou->popup('向购物车中添加失败！',2);
    // $dou->dou_header($_URL['cart']);
}

/**
 * +----------------------------------------------------------
 * 更新购物车商品数量
 * +----------------------------------------------------------
 */
elseif ($rec == 'update') {
    $product_id = $check->is_number($_REQUEST['product_id']) ? $_REQUEST['product_id'] : '';

    $_SESSION[DOU_ID]['cart'][$product_id] = $_POST['number'];
    
    $cart = $dou_order->get_cart($_SESSION[DOU_ID]['cart']);
    $product_price = $dou->get_one("SELECT price FROM " . $GLOBALS['dou']->table('product') . " WHERE id = '$product_id'");
    $subtotal = $product_price > 0 ? $dou->price_format($product_price * $_POST['number']) : $_LANG['price_discuss'];
    
    $order = array(
        "subtotal" => $subtotal,
        "total" => $cart['total'],
        "product_amount" => $dou->price_format($cart['product_amount'])
    );

    echo json_encode($order);exit;
}

/**
 * +----------------------------------------------------------
 * 删除商品
 * +----------------------------------------------------------
 */
elseif ($rec == 'del') {
    $product_id = $check->is_number($_REQUEST['id']) ? $_REQUEST['id'] : '';

    // 删除对应商品
    unset($_SESSION[DOU_ID]['cart'][$product_id]);

    $dou->dou_header($_URL['cart']);
}

/**
 * +----------------------------------------------------------
 * 结算页面
 * +----------------------------------------------------------
 */
elseif ($rec == 'checkout') {
    // CSRF防御令牌生成
    $smarty->assign('token', $firewall->set_token('order_checkout'));
    
    // 获取购物车信息
    foreach ($_SESSION[DOU_ID]['cart'] as $key => $val) {
        if (in_array($key,$_POST['idbox'])) {
            $session_cart[$key] = $val;
        }
    }

    $cart = $dou_order->get_cart($session_cart,'','medium','id,title,cat_id,image,indusid,proid,fans,moneys,click,add_time,sort');
    
    // 获取订单信息
    $order = $dou_user->get_user_info($_USER['user_id']);
    $order['order_amount_format'] = $dou->price_format($cart['product_amount']);

    // 赋值给模板-数据
    $smarty->assign('page_title', $dou->page_title('order_checkout'));
    $smarty->assign('cart', $cart);
    // $smarty->assign('shipping_list', $dou_order->get_shipping_list());
    $smarty->assign('payment_list', $dou_order->get_payment_list());
    $smarty->assign('order', $order);
    $smarty->display('user/order_det.html');
}

/**
 * +----------------------------------------------------------
 * 套餐结算页面
 * +----------------------------------------------------------
 */
elseif ($rec == 'checkout_virtual') {
    $proid = $_GET['id'] ? intval($_GET['id']) : $dou->dou_msg('ID非法！');
    
    // 获取订单信息
    // $uinfo = $dou_user->get_user_info($_USER['user_id']);
    $order = $dou->fetchRow("SELECT id,name,price,image from ". $dou->table('product') ." where id={$proid}");
    $order = array_merge($order,$gUinfos);
    // $order['order_amount_format'] = $dou->price_format($order['product']['price']);

    // CSRF防御令牌生成
    $smarty->assign('token', $firewall->set_token('checkout_virtual'));

    // 赋值给模板-数据
    $smarty->assign('page_title', $dou->page_title('checkout_virtual'));
    // $smarty->assign('shipping_list', $dou_order->get_shipping_list());
    $smarty->assign('payment_list', $dou_order->get_payment_list());
    $smarty->assign('order', $order);
    $smarty->display('user/pay_virtual.html');
}

/**
 * +----------------------------------------------------------
 * 更改运费和订单总额
 * +----------------------------------------------------------
 */
elseif ($rec == 'change_shipping') {
    // 获取默认配送方式信息
    $shipping = $dou->get_one("SELECT config FROM " . $GLOBALS['dou']->table('plugin') . " WHERE unique_id = '$_REQUEST[unique_id]'");
    $shipping = unserialize($shipping);
    
    // 获取购物车信息
    $cart = $dou_order->get_cart($_SESSION[DOU_ID]['cart']);
    
    // 免费额度
    if ($shipping['free'] && $cart['product_amount'] >= $shipping['free']) $shipping['fee'] = 0;

    $order = array(
            "shipping_fee" => $dou->price_format($shipping['fee']),
            "order_amount" => $dou->price_format($cart['product_amount'] + $shipping['fee'])
    );
    
    echo json_encode($order);
}

/**
 * +----------------------------------------------------------
 * 完成虚拟订单操作，提交到数据库
 * +----------------------------------------------------------
*/
elseif ($rec == 'success_virtual') {
    $proid = $_POST['id'] ? intval($_POST['id']) : $dou->dou_msg('ID非法！');

    // 安全处理用户输入信息
    $_POST = $firewall->dou_foreground($_POST);

    // CSRF防御令牌验证
    $firewall->check_token($_POST['token'], 'checkout_virtual');

    // 获取产品信息
    $product = $dou->fetchRow(sprintf('SELECT id,name,price from %s where id=%d',$dou->table('product'),$proid));
    if (empty($product['price'])) {
        $dou->dou_msg('价格为 0，无需购买');
    }
    // 生成订单号等
    $order_sn = $dou_order->create_order_sn();
    $pay_id = $_POST['pay_id'];// 支付方式，必填

    // 订单信息插入
    $data = array(
            'order_sn'      => $order_sn,
            'user_id'       => $_USER['user_id'],
            'telephone'     => $gUinfos['telephone'],
            'contact'       => $gUinfos['contact'],
            'address'       => $gUinfos['address'],
            'postcode'      => $gUinfos['postcode'],
            'pay_id'        => $pay_id,
            'product_amount'=> $product['price'],
            'order_amount'  => $product['price'],
            'add_time'      => time()
        );
    $order_id = $dou->insert('order',$data);
    if (empty($order_id)) {
        $dou->dou_msg('操作失败！',$_URL['cart']);
    }
    // 订单商品插入
    $sql = "INSERT INTO ".$dou->table('order_product')." (order_id,product_id,name,price,product_number) VALUES ($order_id, '$product[id]', '$product[name]', '$product[price]', 1)";
    $dou->query($sql);
    
    // 显示订单信息
    $order['order_sn'] = $order_sn;
    $order['order_amount'] = $product['price'];
    $order['order_amount_format'] = $dou->price_format($product['price']);

    // 订单成功且选择了付款方式则显示付款按钮
    if ($GLOBALS['dou']->value_exist('order', 'order_sn', $order_sn) && $pay_id) {
        // $pay_id = 'alipay';
        include_once (ROOT_PATH . 'include/plugin/' . $pay_id . '/work.plugin.php');
        $plugin = new Plugin($order_sn, $product['price']);
        
        // 生成支付按钮
        $smarty->assign('payment', $plugin->work());
    }
    
    $smarty->assign('page_title', $dou->page_title('order_success'));
    $smarty->assign('order', $order);
    $smarty->assign('order_id', $order_id);
    $smarty->assign('pay_id', $pay_id);
    
    $smarty->display('user/pay.html');

}

elseif ($rec == 'second_success') {
    $order_id = $_POST['order_id'];
    $order_sn = $_POST['order_sn'];
    $price = $_POST['price'];
    $pay_id = $_POST['pay_id'];// 支付方式，必填
    
    // 显示订单信息
    $order['order_sn'] = $order_sn;
    $order['order_amount'] = $price;
    $order['order_amount_format'] = $dou->price_format($price);

    // 订单成功且选择了付款方式则显示付款按钮
    if ($GLOBALS['dou']->value_exist('order', 'order_sn', $order_sn) && $pay_id) {
        include_once (ROOT_PATH . 'include/plugin/' . $pay_id . '/work.plugin.php');
        $plugin = new Plugin($order_sn, $price);
        
        // 生成支付按钮
        $smarty->assign('payment', $plugin->work());
    }

    $smarty->assign('page_title', $dou->page_title('order_success'));
    $smarty->assign('order', $order);
    $smarty->assign('order_id', $order_id);
    $smarty->assign('pay_id', $pay_id);
    
    $smarty->display('user/pay.html');
}

/**
 * +----------------------------------------------------------
 * 完成订单操作，提交到数据库
 * +----------------------------------------------------------
 */
elseif ($rec == 'success') {
    // 验证手机
    if (!$check->is_telephone($_POST['telephone']))
        $wrong['telephone'] = $_LANG['user_telephone_cue'];

    // AJAX验证表单
    if ($_REQUEST['do'] == 'callback') {
        if ($wrong) {
            foreach ($_POST as $key => $value) {
                $wrong_json[$key] = $wrong[$key];
            }
            echo json_encode($wrong_json);
        }
        exit;
    }
    if ($wrong) {
        foreach ($wrong as $key => $value) {
            $wrong_format[$key] = '<p class="cue">' . $value . '</p>';
        }
        $dou->dou_msg($wrong_format, $_URL['edit']);
    }

    // CSRF防御令牌验证
    $firewall->check_token($_POST['token'], 'order_checkout');
    
    // 检查购物车是否有商品
    if (!is_array($_SESSION[DOU_ID]['cart'])) {
        $dou->dou_msg($_LANG['order_cart_empty'], ROOT_URL);
    }

    // 获取购物车信息
    foreach ($_SESSION[DOU_ID]['cart'] as $key => $val) {
        if (in_array($key,$_POST['idbox'])) {
            $session_cart[$key] = $val;
        }
    }
    $cart = $dou_order->get_cart($session_cart,'','medium','id,title,cat_id,image,indusid,proid,fans,moneys,click,add_time,sort');
    $order_sn = $dou_order->create_order_sn();

    // 计算运费和订单总额
    $order_amount = $cart['product_amount'];
    
    // 安全处理用户输入信息
    $_POST = $firewall->dou_foreground($_POST);

    // 订单信息插入
    $data = array(
            'order_type'    => 2,
            'order_sn'      => $order_sn,
            'user_id'       => $_USER['user_id'],
            'telephone'     => $_POST['telephone'],
            'pay_id'        => $_POST['pay_id'],
            'product_amount'=> $cart['product_amount'],
            'order_amount'  => $order_amount,
            'add_time'      => time()
        );
    $order_id = $dou->insert('order',$data);
    if (empty($order_id)) {
        $dou->dou_msg('操作失败！',$_URL['cart']);
    }
    $_SESSION['order_sn'] = $order_sn;

    // 订单商品插入
    $sql = sprintf('INSERT INTO %s (order_id,product_id,name,price,product_number,defined) VALUES ',$dou->table('order_product'));
    foreach ($cart['list'] as $product) {
        $sql .= "($order_id, '$product[id]', '$product[title]', '$product[price_normal]', '$product[number]', '$product[defined]'),";
    }
    $sql = substr($sql,0,-1);
    $dou->query($sql);

    // if ($_POST['telephone']) {
    //     $dou->query("UPDATE " . $dou->table('user') . " SET telephone='$_POST[telephone]' WHERE user_id='$_USER[user_id]'");
    // }
    
    // 显示订单信息
    $order['order_sn'] = $order_sn;
    $order['order_amount'] = $order_amount;
    $order['order_amount_format'] = $dou->price_format($order_amount);

    // 订单完成，清空购物车
    unset($_SESSION[DOU_ID]['cart']);

    // 订单成功且选择了付款方式则显示付款按钮
    if ($GLOBALS['dou']->value_exist('order', 'order_sn', $order_sn) && $_POST['pay_id']) {
        // $_POST['pay_id'] = 'alipay';
        include_once (ROOT_PATH . 'include/plugin/' . $_POST['pay_id'] . '/work.plugin.php');
        $plugin = new Plugin($order_sn, $order_amount);
        
        // 生成支付按钮
        $smarty->assign('payment', $plugin->work());
    }
    
    $smarty->assign('page_title', $dou->page_title('order_success'));
    $smarty->assign('order', $order);
    $smarty->assign('order_id', $order_id);
    $smarty->assign('pay_id', $_POST['pay_id']);
    
    $smarty->display('user/pay.html');
}

/**
 * +----------------------------------------------------------
 * 微信扫码 验单
 * +----------------------------------------------------------
 */
elseif ($rec == 'wxpay_check') {
    // 验单
    $status = $dou_order->order_check($_POST['pay_id'],$_SESSION['order_sn'],$_POST['order_id']);
    if ($status) {
        echo true;exit;
    } else {
        echo false;exit;
    }
}
?>