<?php
// if (!defined('IN_LOTHAR')) die('Hacking attempt');

// if (empty($_SESSION[DOU_ID]['user_id'])) {
//     unset($_SESSION['captcha']);
//     $dou->dou_msg('请登录！','user.php?rec=login');
// }

// 用户信息 $_USER 只有 user_id 和 user_name 信息
if ($_SESSION[DOU_ID]) {
    $gUid = $_SESSION[DOU_ID]['user_id'];
    if ($gUid) {
        // $gUinfos = $dou->fetchRow(sprintf('SELECT * from %s where user_id=%d',$dou->table('user'),$gUid));
        $gUinfos = $dou_user->get_user_info($_USER['user_id']);
        // $smarty->assign('gUinfos',$gUinfos);
    }
}

// 地区 district

// foreach (($dou->fetchAll("select title from ".$dou->table('diy') ." where cat_id=1")) as $key => $value) {
//     $disco .= ','.$value['title'];
// }
// echo $disco;die;

// $dou->debug($nav_product);
// $dou->debug($countrys);
// $dou->debug($gUinfos);

// $dou->debug($dou->send_msg('18715511536'));
// $dou->dou_msg('test this msg');
// $dou->popup('kill');

// $dou->debug(ROOT_PATH,1);
// echo ROOT_URL;die;
// $dou->debug($_CFG);
// $dou->debug($GLOBALS['_CFG']);
// $dou->debug($_LANG);
// $dou->debug($_URL);
// $dou->debug($_OPEN);
// $dou->debug($_DISPLAY);
// $dou->debug($_DEFINED);
// $dou->debug($_SESSION[DOU_ID]['user_id']);
// $dou->debug($_SESSION[DOU_ID]['shell'],1);
// $dou->debug($_USER);

// unset($_SESSION);
// session_unset();
// session_destroy();
// $dou->debug($_SESSION,1);
// $dou->debug($GLOBALS,1);
// $dou->debug($_SERVER,1);
?>