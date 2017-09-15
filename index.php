<?php
define('IN_LOTHAR', true);

// 强制在移动端中显示PC版
if (isset($_REQUEST['mobile'])) {
    setcookie('client', 'pc');
    if ($_COOKIE['client'] != 'pc') $_COOKIE['client'] = 'pc';
}

require (dirname(__FILE__) . '/include/init.php');
require ROOT_PATH .'public.php';

// 如果存在搜索词则转入搜索页面
if ($_REQUEST['s']) {
    if ($check->is_search_keyword($keyword = trim($_REQUEST['s']))) {
        require (ROOT_PATH . 'include/search.inc.php');
    } else {
        $dou->dou_msg($_LANG['search_keyword_wrong']);
    }
}
if (!$gUid) {
    // CSRF防御令牌生成
    $smarty->assign('token', $firewall->set_token('user_register'));
    $smarty->assign('token2', $firewall->set_token('user_login'));
}

// 获取关于我们信息
$sql = "SELECT page_name,content,image,description FROM ". $dou->table('page') ." WHERE id=1";
$about = $dou->fetchRow($sql);
// 获取法律条文
$law = $dou->fetchAll("SELECT id,title,content FROM ".$dou->table('diy')." WHERE cat_id=3 ORDER BY id");

// 写入到index数组
$index['about_name'] = $about['page_name'];
$index['about_content'] = $about['description'] ? $about['description'] : $dou->dou_substr($about['content'], 300, false); // 这里的300数值不能设置得过大，否则会造成程序卡死
$index['about_link'] = $dou->rewrite_url('page', '1');
$index['cur'] = true;

// 赋值给模板-meta和title信息
$smarty->assign('page_title', $dou->page_title());
$smarty->assign('keywords', $_CFG['site_keywords']);
$smarty->assign('description', $_CFG['site_description']);

// 赋值给模板-导航栏
// $smarty->assign('nav_top_list', $dou->get_nav('top'));
// $dou->debug($dou->get_nav('middle'),1);
$smarty->assign('nav_middle_list', $dou->get_nav('middle'));
$smarty->assign('nav_bottom_list', $dou->get_nav('bottom'));

// 赋值给模板-数据
$smarty->assign('show_list', $dou->get_show_list());
$smarty->assign('link', $dou->get_link_list());
$smarty->assign('index', $index);
$smarty->assign('recommend_case', $dou->get_list('case', 'ALL', $_DISPLAY['home_case'], 'sort DESC'));
$smarty->assign('recommend_product', $dou->get_list('product', 'ALL', $_DISPLAY['home_product'], 'sort DESC'));
$smarty->assign('recommend_article', $dou->get_list('article', 'ALL', $_DISPLAY['home_article'], 'sort DESC'));
$smarty->assign('law',$law);


$smarty->display('index.dwt');
?>