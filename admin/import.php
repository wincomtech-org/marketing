<?php 
define('IN_LOTHAR', true);
require (dirname(__FILE__) . '/include/init.php');

// rec操作项的初始化
$rec = $check->is_rec($_REQUEST['rec']) ? $_REQUEST['rec'] : 'default';

// 初始化

// 赋值给模板
$smarty->assign('rec',$rec);
$smarty->assign('cur','import');

switch ($rec) {
case 'exec':
    # code...
    break;

default:
    
    // CSRF防御令牌生成
    // $smarty->assign('token', $firewall->get_token());
    
    // 初始化数据
    $smarty->assign('tables', $tables);
    $smarty->assign('totalsize', $totalsize);
    $smarty->assign('file_name', $file_name);
    
    $smarty->display('backup.htm');
    break;
}

?>