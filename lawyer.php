<?php
/*
法律
《服务条款》 《保密协议》 《法律公告及免责声明》 《隐私条款》
*/
define('IN_LOTHAR', true);
require dirname(__FILE__) . '/include/init.php';

$id = $_GET['id'] ? intval($_GET['id']) : $dou->dou_msg('打开失败');

$law = $dou->fetchRow("SELECT title,content,keywords,description FROM ".$dou->table('diy')." WHERE id={$id}");


// 赋值给模板-meta和title信息
$smarty->assign('page_title', $dou->page_title());
$smarty->assign('keywords', $law['keywords']?$law['keywords']:$_CFG['site_keywords']);
$smarty->assign('description', $law['description']?$law['description']:$_CFG['site_description']);

// 赋值给模板-数据
$smarty->assign('law',$law);

$smarty->display('lawyer/lawyer.html');
?>