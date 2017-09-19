<?php
define('IN_LOTHAR', true);
require (dirname(__FILE__) . '/include/init.php');
require ROOT_PATH .'public.php';

// 记住上次状态
$jumpform = isset($_GET['jumpform'])?$_GET['jumpform']:'';
if ($jumpform) {
    // $jumpform = strstr($jumpform,'?');
    // $jumpform = preg_replace('/?/', '', $jumpform, 1);
    $jumpform = explode('?', $jumpform)[1];
    parse_str($jumpform);
}

/*验证并获取合法的ID，如果不合法将其设定为-1*/
$cat_id = $id ? intval($id) : $firewall->get_legal_id('medium_category', $_REQUEST['id'], $_REQUEST['unique_id']);
if ($cat_id == -1) {
    $dou->dou_msg($GLOBALS['_LANG']['page_wrong'], ROOT_URL);
} else {
    $cat_id = $cat_id ? $cat_id : 1;
    $cat_ids = $cat_id . $dou->dou_child_id('medium_category', $cat_id);
    if (strpos($cat_ids,',')) {
        $where = ' WHERE a.cat_id IN ('. $cat_ids .')';
    } else {
        $where = ' WHERE a.cat_id='.$cat_id;
    }
}

// 选定字段 和 筛子
$fields = $dou->get_medium_fields($cat_id);
$dou->get_medium_series();


/*
* 筛选条件
* $_GET['jumpform']
* $jumpext?strrev(substr(strrev($jumpext),0,strlen($jumpext)-1)
*/
$jumpext = $jumpurl = $order = '';

$page = $check->is_number($_REQUEST['page']) ? trim($_REQUEST['page']) : ($page?$page:1);
$a = isset($_GET['a'])?$_GET['a']:($a?$a:'');
$b = isset($_GET['b'])?$_GET['b']:($b?$b:'');
$c = isset($_GET['c'])?$_GET['c']:($c?$c:'');
$d = isset($_GET['d'])?$_GET['d']:($d?$d:'');
$d2 = isset($_GET['d2'])?$_GET['d2']:($d2?$d2:'');
$e = isset($_GET['e'])?$_GET['e']:($e?$e:'');
$e2 = isset($_GET['e2'])?$_GET['e2']:($e2?$e2:'');
$f = isset($_GET['f'])?$_GET['f']:($f?$f:'');
$g = isset($_GET['g'])?$_GET['g']:($g?$g:'');
$srcval = isset($_GET['srcval'])?$_GET['srcval']:($srcval?$srcval:'');

$jumpext .= '&id='.$cat_id.'&page='. $page;
// 行业
if ($a) {
    $where .= ' AND a.indusid='.intval($a);
    $jumpext .= '&a='.$a;
}
// 地区
if ($b) {
    $where .= ' AND a.proid='.intval($b);
    $jumpext .= '&b='.$b;
}
// 账号类型
if ($c) {
    $where .= ' AND a.account_type='.intval($c);
    $jumpext .= '&c='.$c;
}
// 粉丝量
if ($d && $d2) {
    $where .= ' AND (a.fans between '.intval($d).' and '.intval($d2) .')';
    $jumpext .= '&d='.$d.'&d2='.$d2;
} elseif (($d and !$d2)) {
    $where .= ' AND a.fans > '.intval($d);
    $jumpext .= '&d='.$d;
} elseif ((!$d and $d2)) {
    $where .= ' AND a.fans <= '.intval($d);
    $jumpext .= '&d2='.$d2;
}
// 报价
if ($e && $e2) {
    $where .= ' AND (a.moneys between '.intval($e).' and '.intval($e2) .')';
    $jumpext .= '&e='.$e.'&e2='.$e2;
} elseif (($e and !$e2)) {
    $where .= ' AND a.moneys > '.intval($e);
    $jumpext .= '&e='.$e;
} elseif ((!$e and $e2)) {
    $where .= ' AND a.moneys <= '.intval($e);
    $jumpext .= '&e2='.$e2;
}
// 粉丝排序
if ($f) {
    if ($f == 1) {
        $order .= 'a.fans ASC,';
    } else {
        $order .= 'a.fans DESC,';
    }
    $jumpext .= '&f='.$f;
}
// 价格排序
if ($g) {
    if ($g == 1) {
        $order .= 'a.moneys ASC,';
    } else {
        $order .= 'a.moneys DESC,';
    }
    $jumpext .= '&g='.$g;
}
// 关键字搜索
if ($srcval) {
    $where .= ' AND a.title like \'%'. $srcval .'%\'';
    $jumpext .= '&srcval='.$srcval;
}

// 最终处理
if (strpos($where,'AND')==1) {
    $where = ' WHERE'. preg_replace('/AND/', '', $where, 1); //只替换一次;
}
if ($jumpext) 
    $jumpext = preg_replace('/&/', '?', $jumpext, 1);
if ($jumpext) {
    $jumpurl = $_URL['medium'] . $jumpext . '&';
} else {
    $jumpurl = $_URL['medium'] . '?';
}
// $dou->debug($where);
// $dou->debug($jumpext);
// $dou->debug($jumpurl);

/*赋值*/
$smarty->assign('id',$cat_id);
$smarty->assign('a',$a);
$smarty->assign('b',$b);
$smarty->assign('c',$c);
$smarty->assign('d',$d);
$smarty->assign('d2',$d2);
$smarty->assign('e',$e);
$smarty->assign('e2',$e2);
$smarty->assign('f',$f);
$smarty->assign('g',$g);
$smarty->assign('srcval',$srcval);
$smarty->assign('jumpurl',$jumpurl);

/*数据查询*/
// 获取分页信息
$pagesize = $_DISPLAY['medium'] ? $_DISPLAY['medium'] : 10;
// 解决分页问题如何解决？ 禁止开启伪静态
// $page_url = $dou->rewrite_url('medium_category', $cat_id);
// $jumpext .= (strpos($page_url, '?id=')) ? '' : '&id='.$cat_id;
$page_url = 'medium_category.php';
$where2 = str_replace('a.','',$where);
$limit = $dou->pager('medium', $pagesize, $page, $page_url, $where2, $jumpext, '', true);

// 获取下载列表 
$fields = $dou->create_fields_quote('id,defined,add_time,title,image,click,description'.($fields?','.$fields:''),'a');
$sql = sprintf("SELECT %s,b.cat_name,c.title as indusid,d.cat_name as proid from %s a left join %s b on a.cat_id=b.cat_id left join %s c on a.indusid=c.id left join %s d on a.proid=d.cat_id %s ORDER BY %s %s", $fields,$dou->table('medium'),$dou->table('medium_category'),$dou->table('diy'),$dou->table('district'),$where,$order.'a.add_time DESC',$limit);
// $dou->debug($sql,1);
$query = $dou->query($sql);
while ($row = $dou->fetch_assoc($query)) {
    if ($row['image']) {
        $image = explode('.', $row['image']);
        $row['image'] = ROOT_URL . $image[0] . "_thumb." . $image[1];
    } else {
        $row['image'] = ROOT_URL .'images/medium_thumb_default.jpg';
    }
    $row['moneys'] = $row['moneys'] ? $dou->price_format($row['moneys']) : '';
    
    $medium_list[] = $row;
}
    // $row['url'] = $dou->rewrite_url('medium', $row['id']);
    // $row['add_time'] = date("Y-m-d", $row['add_time']);
    // $row['add_time_short'] = date("m-d", $row['add_time']);
    // $row['image'] = $row['image'] ? ROOT_URL . $row['image'] : '';
    // 格式化自定义参数
    // $diy2 = array();
    // foreach (explode(',', $row['defined']) as $diy) {
    //     $diy = explode('：', str_replace(":", "：", $diy));
    //     if ($diy['1']) {
    //         if (!$defined) {
    //             $defined[] = $diy['0'];
    //         }
    //         $diy2[] = $diy['1'];
    //     }
    // }
    // $row['defined'] = $diy2;
// $dou->debug($medium_list,1);

// 获取分类信息
$sql = "SELECT cat_id,parent_id,cat_name,keywords,description FROM " . $dou->table('medium_category') . " WHERE cat_id='$cat_id'";
$query = $dou->query($sql);
$cate_info = $dou->fetch_assoc($query);



// 赋值给模板-meta和title信息
$smarty->assign('page_title', $dou->page_title('medium_category', $cat_id));
$smarty->assign('keywords', $cate_info['keywords']);
$smarty->assign('description', $cate_info['description']);

// 赋值给模板-导航栏
// $smarty->assign('nav_top_list', $dou->get_nav('top'));
$smarty->assign('nav_middle_list', $dou->get_nav('middle', '0', 'medium_category', $cat_id, $cate_info['parent_id']));
$smarty->assign('nav_bottom_list', $dou->get_nav('bottom'));

// 赋值给模板-数据
// $smarty->assign('ur_here', $dou->ur_here('medium_category', $cat_id));
$smarty->assign('cate_info', $cate_info);
$smarty->assign('medium_category', $dou->get_category('medium_category', 0, $cat_id));
$smarty->assign('medium_list', $medium_list);

$smarty->display('smart/list.html');
?>