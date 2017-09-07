<?php
define('IN_LOTHAR', true);
require (dirname(__FILE__) . '/include/init.php');
// 权限判断
// $rbac->access_jump('diy',$_USER);

// rec操作项的初始化
$rec = $check->is_rec($_REQUEST['rec']) ? $_REQUEST['rec'] : 'default';

// 赋值给模板
$smarty->assign('rec', $rec);
$smarty->assign('cur', 'diy_category');

/**
 * +----------------------------------------------------------
 * 分类列表
 * +----------------------------------------------------------
 */
if ($rec == 'default') {
    $smarty->assign('ur_here', $_LANG['diy_category']);
    $smarty->assign('action_link', array(
            'text' => $_LANG['diy_category_add'],
            'href' => 'diy_category.php?rec=add' 
    ));
    
    // 赋值给模板
    $smarty->assign('diy_category', $dou->get_category_nolevel('diy_category'));
    
    $smarty->display('diy_category.htm');
} 

/**
 * +----------------------------------------------------------
 * 分类添加
 * +----------------------------------------------------------
 */
elseif ($rec == 'add') {
    $smarty->assign('ur_here', $_LANG['diy_category_add']);
    $smarty->assign('action_link', array(
            'text' => $_LANG['diy_category'],
            'href' => 'diy_category.php' 
    ));
    
    // CSRF防御令牌生成
    $smarty->assign('token', $firewall->get_token());
    
    // 赋值给模板
    $smarty->assign('form_action', 'insert');
    $smarty->assign('diy_category', $dou->get_category_nolevel('diy_category'));
    
    $smarty->display('diy_category.htm');
} 

elseif ($rec == 'insert') {
    if (empty($_POST['cat_name']))
        $dou->dou_msg($_LANG['diy_category_name'] . $_LANG['is_empty']);
    if (!$check->is_unique_id($_POST['unique_id']))
        $dou->dou_msg($_LANG['unique_id_wrong']);
    if ($dou->get_one("SELECT unique_id from ".$dou->table('diy_category')." where cat_name='".$_POST['cat_name']."' OR unique_id='".$_POST['unique_id']."'")) {
        $dou->dou_msg('数据库中已存在同名！');
    }
        
    // CSRF防御令牌验证
    $firewall->check_token($_POST['token']);
    
    $data = array(
        'unique_id'  => $_POST['unique_id'],
        'parent_id'  => $_POST['parent_id'],
        'cat_name'  => $_POST['cat_name'],
        'cat_name2'  => $_POST['cat_name2'],
        'keywords'  => $_POST['keywords'],
        'description'  => $_POST['description'],
        'sort'  => $_POST['sort']
    );
    $dou->insert('diy_category',$data);
    
    $dou->create_admin_log($_LANG['diy_category_add'] . ': ' . $_POST['cat_name']);
    $dou->dou_msg($_LANG['diy_category_add_succes'], 'diy_category.php');
} 

/**
 * +----------------------------------------------------------
 * 分类编辑
 * +----------------------------------------------------------
 */
elseif ($rec == 'edit') {
    $smarty->assign('ur_here', $_LANG['diy_category_edit']);
    $smarty->assign('action_link', array(
            'text' => $_LANG['diy_category'],
            'href' => 'diy_category.php' 
    ));
    
    // 获取分类信息
    $cat_id = $check->is_number($_REQUEST['cat_id']) ? $_REQUEST['cat_id'] : '';
    $query = $dou->select($dou->table('diy_category'), '*', '`cat_id`=\''. $cat_id .'\'');
    $cat_info = $dou->fetch_array($query);
    
    // CSRF防御令牌生成
    $smarty->assign('token', $firewall->get_token());
    
    // 赋值给模板
    $smarty->assign('form_action', 'update');
    $smarty->assign('diy_category', $dou->get_category_nolevel('diy_category', '0', '0', $cat_id));
    $smarty->assign('cat_info', $cat_info);
    
    $smarty->display('diy_category.htm');
} 

elseif ($rec == 'update') {
    if (empty($_POST['cat_name']))
        $dou->dou_msg($_LANG['diy_category_name'] . $_LANG['is_empty']);
    if (!$check->is_unique_id($_POST['unique_id']))
        $dou->dou_msg($_LANG['unique_id_wrong']);
        
    // CSRF防御令牌验证
    $firewall->check_token($_POST['token']);
    
    $data = array(
            'cat_name'  => $_POST['cat_name'],
            'cat_name2'  => $_POST['cat_name2'],
            'unique_id'  => $_POST['unique_id'],
            'parent_id'  => $_POST['parent_id'],
            'keywords'  => $_POST['keywords'],
            'description'  => $_POST['description'],
            'sort'  => $_POST['sort']
        );
    $dou->update('diy_category',$data,'cat_id='.intval($_POST['cat_id']));
    
    $dou->create_admin_log($_LANG['diy_category_edit'] . ': ' . $_POST['cat_name']);
    $dou->dou_msg($_LANG['diy_category_edit_succes'], 'diy_category.php');
} 

/**
 * +----------------------------------------------------------
 * 分类删除
 * +----------------------------------------------------------
 */
elseif ($rec == 'del') {
    $cat_id = $check->is_number($_REQUEST['cat_id']) ? $_REQUEST['cat_id'] : $dou->dou_msg($_LANG['illegal'], 'diy_category.php');
    $cat_name = $dou->get_one("SELECT cat_name FROM " . $dou->table('diy_category') . " WHERE cat_id = '$cat_id'");
    $is_parent = $dou->get_one("SELECT id FROM " . $dou->table('diy') . " WHERE cat_id = '$cat_id'") . $dou->get_one("SELECT cat_id FROM " . $dou->table('diy_category') . " WHERE parent_id = '$cat_id'");
    
    if ($is_parent) {
        $_LANG['diy_category_del_is_parent'] = preg_replace('/d%/Ums', $cat_name, $_LANG['diy_category_del_is_parent']);
        $dou->dou_msg($_LANG['diy_category_del_is_parent'], 'diy_category.php', '', '3');
    } else {
        if (isset($_POST['confirm']) ? $_POST['confirm'] : '') {
            $dou->create_admin_log($_LANG['diy_category_del'] . ': ' . $cat_name);
            $dou->delete($dou->table('diy_category'), "cat_id = $cat_id", 'diy_category.php');
        } else {
            $_LANG['del_check'] = preg_replace('/d%/Ums', $cat_name, $_LANG['del_check']);
            $dou->dou_msg($_LANG['del_check'], 'diy_category.php', '', '30', "diy_category.php?rec=del&cat_id=$cat_id");
        }
    }
}
?>