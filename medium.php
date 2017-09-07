<?php
define('IN_LOTHAR', true);
require (dirname(__FILE__) . '/include/init.php');
require ROOT_PATH .'public.php';

// 验证并获取合法的ID，如果不合法将其设定为-1
$id = $firewall->get_legal_id('medium', $_REQUEST['id'], $_REQUEST['unique_id']);
if ($id == -1)
    $dou->dou_msg($GLOBALS['_LANG']['page_wrong'], ROOT_URL);
$cat_id = $dou->get_one("SELECT cat_id FROM " . $dou->table('medium') . " WHERE id = '$id'");
$parent_id = $dou->get_one("SELECT parent_id FROM " . $dou->table('medium_category') . " WHERE cat_id = '" . $cat_id . '\'');
    
/* 获取详细信息 */
$query = $dou->select($dou->table('medium'), '*', '`id`=\''. $id . '\'');
$medium = $dou->fetch_array($query);

// 格式化数据
$medium['add_time'] = date("Y-m-d", $medium['add_time']);
$medium['image'] = $medium['image'] ? ROOT_URL . $medium['image'] : '';

// 格式化自定义参数
foreach (explode(',', $medium['defined']) as $row) {
    $row = explode('：', str_replace(":", "：", $row));
    
    if ($row['1']) {
        $defined[] = array(
                "arr" => $row['0'],
                "value" => $row['1'] 
        );
    }
}

// 访问统计
$click = $medium['click'] + 1;
$dou->query("update " . $dou->table('medium') . " SET click = '$click' WHERE id = '$id'");

// 赋值给模板-meta和title信息
$smarty->assign('page_title', $dou->page_title('medium_category', $cat_id, $medium['title']));
$smarty->assign('keywords', $medium['keywords']);
$smarty->assign('description', $medium['description']);

// 赋值给模板-导航栏
$smarty->assign('nav_top_list', $dou->get_nav('top'));
$smarty->assign('nav_middle_list', $dou->get_nav('middle', '0', 'medium_category', $cat_id, $parent_id));
$smarty->assign('nav_bottom_list', $dou->get_nav('bottom'));

// 赋值给模板-数据
$smarty->assign('ur_here', $dou->ur_here('medium_category', $cat_id, $medium['title']));
$smarty->assign('medium_category', $dou->get_category('medium_category', 0, $cat_id));
$smarty->assign('lift', $dou->lift('medium', $id, $cat_id));
$smarty->assign('medium', $medium);
$smarty->assign('defined', $defined);

$smarty->display('medium.dwt');
?>