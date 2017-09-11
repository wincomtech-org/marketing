<?php
define('IN_LOTHAR', true);
require (dirname(__FILE__) . '/include/init.php');
require ROOT_PATH .'public.php';

// 验证并获取合法的ID，如果不合法将其设定为-1
$cat_id = $firewall->get_legal_id('medium_category', $_REQUEST['id'], $_REQUEST['unique_id']);

$jumpext = $jumpurl = $order = '';

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
if ($_REQUEST['id']) {
    $jumpext .= '&id='.$_REQUEST['id'];
}

// 选定字段
$fields = $dou->get_one('SELECT fields from '.$dou->table('medium_category').' where cat_id='.$cat_id);
$dkey = 'indusid,proid,account_type,fans,moneys,trans,id_number,reads,issue_plat,groups,channel,genre,belong_plat,average_plays,nnt,type,put_site,ad_type,pub_type,brief';
$dkey = explode(',', $dkey);
$dexplain = '所属行业,所属省份,账号类型,粉丝量,报价,转发量,ID号,阅读量,发布平台,受众群体,发布频道,媒体类型,所属平台,平均播放量,人数量,类型,投放位置,广告形式,发布类型,简介';
$dexplain = explode(',', $dexplain);
foreach ($dkey as $key => $value) {
    $designate[$value] = $dexplain[$key];
}
$fieldsarr = explode(',', $fields);
$smarty->assign('cat_id', $cat_id);
$smarty->assign('designate', $designate);
$smarty->assign('fieldsarr', $fieldsarr);



/*筛选条件*/
$a = isset($_GET['a'])?$_GET['a']:'';
$b = isset($_GET['b'])?$_GET['b']:'';
$c = isset($_GET['c'])?$_GET['c']:'';
$d = isset($_GET['d'])?$_GET['d']:'';
$d2 = isset($_GET['d2'])?$_GET['d2']:'';
$e = isset($_GET['e'])?$_GET['e']:'';
$e2 = isset($_GET['e2'])?$_GET['e2']:'';
$f = isset($_GET['f'])?$_GET['f']:'';
$g = isset($_GET['g'])?$_GET['g']:'';
$srcval = isset($_GET['srcval'])?$_GET['srcval']:'';

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
    $where = ' WHERE'. preg_replace('/AND/', '', $where, 1);
}
if ($jumpext) {
    $jumpext = preg_replace('/&/', '?', $jumpext, 1); //只替换一次;
    $jumpurl = $_URL['medium'] . $jumpext . '&';
} else {
    $jumpurl = $_URL['medium'] . '?';
}
// 分页问题如何解决？

// $dou->debug($where);
// $dou->debug($jumpext);

$smarty->assign('id',$_REQUEST['id']);
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
$page = $check->is_number($_REQUEST['page']) ? trim($_REQUEST['page']) : 1;
$where2 = str_replace('a.','',$where);
$limit = $dou->pager('medium', ($_DISPLAY['medium'] ? $_DISPLAY['medium'] : 10), $page, $dou->rewrite_url('medium_category', $cat_id), $where2, $jumpext);

/* 获取下载列表 */
$fields = $dou->create_fields_quote('id,defined,add_time,title,image,click,description'.($fields?','.$fields:''),'a');
$sql = sprintf("SELECT %s,b.cat_name,c.title as indusid,d.cat_name as proid from %s a left join %s b on a.cat_id=b.cat_id left join %s c on a.indusid=c.id left join %s d on a.proid=d.cat_id %s ORDER BY %s %s", $fields,$dou->table('medium'),$dou->table('medium_category'),$dou->table('diy'),$dou->table('district'),$where,$order.'a.add_time DESC',$limit);
// $dou->debug($sql,1);
$query = $dou->query($sql);
while ($row = $dou->fetch_assoc($query)) {
    if ($row['image']) {
        $image = explode('.', $row['image']);
        $row['image'] = ROOT_URL . $image[0] . "_thumb." . $image[1];
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

// 所有行业
$industrys = $dou->fetchAll(sprintf('SELECT id,title from %s where cat_id=1 order by sort',$dou->table('diy')));
$smarty->assign('industrys', $industrys);
// 所有省份
$provinces = $dou->fetchAll(sprintf('SELECT cat_id,cat_name from %s order by sort',$dou->table('district')));
$smarty->assign('provinces', $provinces);
// 所有账号类型
$account_types = $dou->fetchAll(sprintf('SELECT id,title from %s where cat_id=2',$dou->table('diy')));
$smarty->assign('account_types', $account_types);



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