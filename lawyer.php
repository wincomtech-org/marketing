<?php
/*
法律
《服务条款》 《保密协议》 《法律公告及免责声明》 《隐私条款》
*/
define('IN_LOTHAR', true);
require dirname(__FILE__) . '/include/init.php';

$s = $_GET['law'] ? trim($_GET['law']) : 'disclaimer';

$smarty->display('lawyer/'.$s.'.html');
?>