<?php
define('IN_LOTHAR', true);
require (dirname(__FILE__) . '/include/init.php');

// rec操作项的初始化
$rec = $check->is_rec($_REQUEST['rec']) ? $_REQUEST['rec'] : 'default';

// 图片上传
include_once (ROOT_PATH . 'include/upload.class.php');
$images_dir = 'images/medium/'; // 文件上传路径，结尾加斜杠
$thumb_dir = ''; // 缩略图路径（相对于$images_dir） 结尾加斜杠，留空则跟$images_dir相同
$img = new Upload(ROOT_PATH . $images_dir, $thumb_dir); // 实例化类文件
if (!file_exists(ROOT_PATH . $images_dir))
    mkdir(ROOT_PATH . $images_dir, 0777);
$_CFG['thumb_width']=80; $_CFG['thumb_height'] = 80;

// 赋值给模板
$smarty->assign('rec', $rec);
$smarty->assign('cur', 'medium');

if (in_array($rec,array('default','add','edit'))) {
    // 获取参数
    $cat_id = $check->is_number($_REQUEST['cat_id']) ? intval($_REQUEST['cat_id']) : ($rec=='default'?0:1);
    if ($rec=='edit') {
        // 验证并获取合法的ID
        $id = $check->is_number($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
        $cat_id = $dou->get_one("SELECT cat_id from ".$dou->table('medium')." WHERE id=".$id);
    }
    $fields = $dou->get_one('SELECT fields from '.$dou->table('medium_category').' where cat_id='.$cat_id);
    $dkey = 'indusid,proid,account_type,fans,moneys,trans,id_number,reads,issue_plat,groups,channel,genre,belong_plat,average_plays,nnt,type,put_site,ad_type,pub_type,brief';
    $dkey = explode(',', $dkey);
    $dexplain = '行业,地区,账号类型,粉丝量,价格,转发量,ID号,阅读量,发布平台,受众群体,发布频道,媒体类型,所属平台,平均播放量,人数量,类型,投放位置,广告形式,发布类型,简介';
    $dexplain = explode(',', $dexplain);
    foreach ($dkey as $key => $value) {
        $designate[$value] = $dexplain[$key];
    }
    $fieldsarr = explode(',', $fields);

    // 所有行业
    $industrys = $dou->fetchAll(sprintf('SELECT id,title from %s where cat_id=1 order by sort',$dou->table('diy')));
    // 所有省份
    $provinces = $dou->fetchAll(sprintf('SELECT cat_id,cat_name from %s order by sort',$dou->table('district')));
    // 所有账号类型
    $account_types = $dou->fetchAll(sprintf('SELECT id,title from %s where cat_id=2',$dou->table('diy')));

    $smarty->assign('cat_id', $cat_id);
    $smarty->assign('designate', $designate);
    $smarty->assign('fieldsarr', $fieldsarr);
    $smarty->assign('industrys', $industrys);
    $smarty->assign('provinces', $provinces);
    $smarty->assign('account_types', $account_types);
}

/**
 * +----------------------------------------------------------
 * 列表
 * +----------------------------------------------------------
 */
if ($rec == 'default') {
    $smarty->assign('ur_here', $_LANG['medium']);
    $smarty->assign('action_link', array(
            'text' => $_LANG['medium_add'],
            'href' => 'medium.php?rec=add' 
    ));
    
    // 获取参数
    $keyword = isset($_REQUEST['keyword']) ? trim($_REQUEST['keyword']) : '';
    
    // 筛选条件
    if ($cat_id) {
        $where = ' WHERE a.cat_id IN ('.$cat_id . $dou->dou_child_id('medium_category',$cat_id).')';
    }
    // $where = $where ? $where : '';
    if ($keyword) {
        $where .= ($where ? ' AND ' : ' WHERE ') . "a.title LIKE '%$keyword%'";
        $get = '&keyword=' . $keyword;
    }

    // 分页
    $page = $check->is_number($_REQUEST['page']) ? $_REQUEST['page'] : 1;
    $page_url = 'medium.php' . ($cat_id ? '?cat_id='.$cat_id : '');
    $where2 = str_replace('a.', '', $where);
    $limit = $dou->pager('medium', 15, $page, $page_url, $where2, $get);
    // 查询数据
    // $fields = $dou->create_fields_quote('id,title,cat_id,image,indusid,proid,fans,moneys,click,add_time,sort','a');
    // $sql = sprintf("SELECT %s,b.cat_name,c.title as industry,d.cat_name as district from %s a left join %s b on a.cat_id=b.cat_id left join %s c on a.indusid=c.id left join %s d on a.proid=d.cat_id %s ORDER BY %s %s", $fields,$dou->table('medium'),$dou->table('medium_category'),$dou->table('diy'),$dou->table('district'),$where,'a.add_time desc,a.sort,a.cat_id DESC',$limit);
    $sql = sprintf("SELECT a.id,a.title,a.cat_id,a.image,a.click,a.add_time,a.sort,b.cat_name from %s a left join %s b on a.cat_id=b.cat_id %s ORDER BY %s %s",$dou->table('medium'),$dou->table('medium_category'),$where,'a.add_time desc,a.sort,a.cat_id DESC',$limit);
    // $dou->debug($sql,1);
    $query = $dou->query($sql);
    while ($row = $dou->fetch_assoc($query)) {
        $row['add_time'] = date("Y-m-d", $row['add_time']);
        $medium_list[] = $row;
    }

    // 首页显示数量限制框
    for($i=1; $i<=$_CFG['home_display_medium']; $i++) {
        $sort_bg .= "<li><em></em></li>";
    }
    
    // 赋值给模板
    $smarty->assign('if_sort', $_SESSION['if_sort']);
    $smarty->assign('sort', get_sort_medium());
    $smarty->assign('sort_bg', $sort_bg);
    $smarty->assign('keyword', $keyword);
    $smarty->assign('medium_category', $dou->get_category_nolevel('medium_category'));
    $smarty->assign('medium_list', $medium_list);
    
    $smarty->display('medium.htm');
} 

/**
 * +----------------------------------------------------------
 * 添加
 * +----------------------------------------------------------
 */
elseif ($rec == 'add') {
    $smarty->assign('ur_here', $_LANG['medium_add']);
    $smarty->assign('action_link', array(
            'text' => $_LANG['medium'],
            'href' => 'medium.php' 
    ));
    
    // 格式化自定义参数，并存到数组$medium，编辑页面中调用详情也是用数组$medium，
    if ($_DEFINED['medium']) {
        $defined = explode(',', $_DEFINED['medium']);
        foreach ($defined as $row) {
            $defined_medium .= $row . "：\n";
        }
        $medium['defined'] = trim($defined_medium);
        $medium['defined_count'] = count(explode("\n", $medium['defined'])) * 2;
    }
    
    // CSRF防御令牌生成
    $smarty->assign('token', $firewall->get_token());
    
    // 赋值给模板
    $smarty->assign('form_action', 'insert');
    $smarty->assign('medium_category', $dou->get_category_nolevel('medium_category'));
    $smarty->assign('medium', $medium);
    
    $smarty->display('medium.htm');
} 

elseif ($rec == 'insert') {
    // 验证标题
    if (empty($_POST['title'])) $dou->dou_msg($_LANG['medium_name'] . $_LANG['is_empty']);
    
    // 图片上传
    if ($_FILES['image']['name'] != '') {
        $image_name = $img->upload_image('image', $img->create_file_name('medium'));
        $image = $images_dir . $image_name;
        $img->make_thumb($image_name, $_CFG['thumb_width'], $_CFG['thumb_height']);
    }
    
    // 数据格式化
    $add_time = time();
    $_POST['defined'] = str_replace("\r\n", ',', $_POST['defined']);
        
    // CSRF防御令牌验证
    $firewall->check_token($_POST['token']);

    $data = array(
            'cat_id'        => $_POST['cat_id'],
            'title'         => $_POST['title'],
            'defined'       => $_POST['defined'],
            'content'       => $_POST['content'],
            'image'         => $image,
            'link'          => $_POST['link'],
            'indusid'       => $_POST['indusid'],
            'proid'         => $_POST['proid'],
            'account_type'  => $_POST['account_type'],
            'fans'          => $_POST['fans'],
            'moneys'        => $_POST['moneys'],
            'keywords'      => $_POST['keywords'],
            'description'   => $_POST['description'],
            'click'         => $_POST['click'],
            'add_time'      => $add_time,
            'trans'   => $_POST['trans'],
            'id_number'   => $_POST['id_number'],
            'reads'   => $_POST['reads'],
            'issue_plat'   => $_POST['issue_plat'],
            'groups'   => $_POST['groups'],
            'channel'   => $_POST['channel'],
            'genre'   => $_POST['genre'],
            'belong_plat'   => $_POST['belong_plat'],
            'average_plays'   => $_POST['average_plays'],
            'nnt'   => $_POST['nnt'],
            'type'   => $_POST['type'],
            'put_site'   => $_POST['put_site'],
            'ad_type'   => $_POST['ad_type'],
            'pub_type'   => $_POST['pub_type'],
            'brief'   => $_POST['brief'],
        );
    $dou->insert('medium',$data);
    
    $dou->create_admin_log($_LANG['medium_add'] . ': ' . $_POST['title']);
    $dou->dou_msg($_LANG['medium_add_succes'], 'medium.php');
} 

/**
 * +----------------------------------------------------------
 * 编辑
 * +----------------------------------------------------------
 */
elseif ($rec == 'edit') {
    $smarty->assign('ur_here', $_LANG['medium_edit']);
    $smarty->assign('action_link', array(
            'text' => $_LANG['medium'],
            'href' => 'medium.php' 
    ));
    
    $query = $dou->select($dou->table('medium'), '*', '`id`=\''. $id . '\'');
    $medium = $dou->fetch_array($query);
    
    // 格式化自定义参数
    if ($_DEFINED['medium'] || $medium['defined']) {
        $defined = explode(',', $_DEFINED['medium']);
        foreach ($defined as $row) {
            $defined_medium .= $row . "：\n";
        }
        // 如果中已经写入自定义参数则调用已有的
        $medium['defined'] = $medium['defined'] ? str_replace(",", "\n", $medium['defined']) : trim($defined_medium);
        $medium['defined_count'] = count(explode("\n", $medium['defined'])) * 2;
    }

    // CSRF防御令牌生成
    $smarty->assign('token', $firewall->get_token());
    
    // 赋值给模板
    $smarty->assign('form_action', 'update');
    $smarty->assign('medium_category', $dou->get_category_nolevel('medium_category'));
    $smarty->assign('medium', $medium);
    
    $smarty->display('medium.htm');
} 

elseif ($rec == 'update') {
    // 验证标题
    if (empty($_POST['title'])) $dou->dou_msg($_LANG['medium_name'] . $_LANG['is_empty']);

    // 图片上传
    if ($_FILES['image']['name'] != '') {
        $image_name = $img->upload_image('image', $img->create_file_name('medium', $_POST['id'], 'image'));
        $image = $images_dir . $image_name;
        $img->make_thumb($image_name, $_CFG['thumb_width'], $_CFG['thumb_height']);
        // 因为这里文件名始终相同，会直接覆盖源文件，所以不可以做额外删除
        // $old_pic = $dou->get_one("SELECT image from ".$dou->table('product')." where id='$_POST[id]' ");
        // if ($old_pic) { $dou->del_image($old_pic); }
    }

    // 格式化自定义参数
    $_POST['defined'] = str_replace("\r\n", ',', $_POST['defined']);
    
    // CSRF防御令牌验证
    $firewall->check_token($_POST['token']);

    $data = array(
            'cat_id'        => $_POST['cat_id'],
            'title'         => $_POST['title'],
            'defined'       => $_POST['defined'],
            'content'       => $_POST['content'],
            'link'          => $_POST['link'],
            'indusid'       => $_POST['indusid'],
            'proid'         => $_POST['proid'],
            'account_type'  => $_POST['account_type'],
            'fans'          => $_POST['fans'],
            'moneys'        => $_POST['moneys'],
            'keywords'      => $_POST['keywords'],
            'description'   => $_POST['description'],
            'click'         => $_POST['click'],
            'trans'   => $_POST['trans'],
            'id_number'   => $_POST['id_number'],
            'reads'   => $_POST['reads'],
            'issue_plat'   => $_POST['issue_plat'],
            'groups'   => $_POST['groups'],
            'channel'   => $_POST['channel'],
            'genre'   => $_POST['genre'],
            'belong_plat'   => $_POST['belong_plat'],
            'average_plays'   => $_POST['average_plays'],
            'nnt'   => $_POST['nnt'],
            'type'   => $_POST['type'],
            'put_site'   => $_POST['put_site'],
            'ad_type'   => $_POST['ad_type'],
            'pub_type'   => $_POST['pub_type'],
            'brief'   => $_POST['brief'],
        );
    if ($image) 
        $data['image'] = $image;
    // $dou->debug($data,1);
    $dou->update('medium',$data,'id='.$_POST['id']);
    
    $dou->create_admin_log($_LANG['medium_edit'] . ': ' . $_POST['title']);
    $dou->dou_msg($_LANG['medium_edit_succes'], 'medium.php');
} 

/**
 * +----------------------------------------------------------
 * 首页商品筛选
 * +----------------------------------------------------------
 */
elseif ($rec == 'sort') {
    $_SESSION['if_sort'] = $_SESSION['if_sort'] ? false : true;
    
    // 跳转到上一页面
    $dou->dou_header($_SERVER['HTTP_REFERER']);
} 

/**
 * +----------------------------------------------------------
 * 设为首页显示商品
 * +----------------------------------------------------------
 */
elseif ($rec == 'set_sort') {
    // 验证并获取合法的ID
    $id = $check->is_number($_REQUEST['id']) ? $_REQUEST['id'] : $dou->dou_msg($_LANG['illegal'], 'medium.php');
    
    $max_sort = $dou->get_one("SELECT sort FROM " . $dou->table('medium') . " ORDER BY sort DESC");
    $new_sort = $max_sort + 1;
    $dou->query("UPDATE " . $dou->table('medium') . " SET sort = '$new_sort' WHERE id = '$id'");
    
    $dou->dou_header($_SERVER['HTTP_REFERER']);
} 

/**
 * +----------------------------------------------------------
 * 取消首页显示商品
 * +----------------------------------------------------------
 */
elseif ($rec == 'del_sort') {
    // 验证并获取合法的ID
    $id = $check->is_number($_REQUEST['id']) ? $_REQUEST['id'] : $dou->dou_msg($_LANG['illegal'], 'medium.php');
    
    $dou->query("UPDATE " . $dou->table('medium') . " SET sort = '' WHERE id = '$id'");
    $dou->dou_header($_SERVER['HTTP_REFERER']);
} 

/**
 * +----------------------------------------------------------
 * 删除
 * +----------------------------------------------------------
 */
elseif ($rec == 'del') {
    // 验证并获取合法的ID
    $id = $check->is_number($_REQUEST['id']) ? $_REQUEST['id'] : $dou->dou_msg($_LANG['illegal'], 'medium.php');
    $title = $dou->get_one("SELECT title FROM " . $dou->table('medium') . " WHERE id = '$id'");
    
    if (isset($_POST['confirm']) ? $_POST['confirm'] : '') {
        // 删除相应商品图片
        $image = $dou->get_one("SELECT image FROM " . $dou->table('medium') . " WHERE id = '$id'");
        $dou->del_image($image);
        
        $dou->create_admin_log($_LANG['medium_del'] . ': ' . $title);
        $dou->delete($dou->table('medium'), "id = $id", 'medium.php');
    } else {
        $_LANG['del_check'] = preg_replace('/d%/Ums', $title, $_LANG['del_check']);
        $dou->dou_msg($_LANG['del_check'], 'medium.php', '', '30', "medium.php?rec=del&id=$id");
    }
} 

/**
 * +----------------------------------------------------------
 * 批量操作选择
 * +----------------------------------------------------------
 */
elseif ($rec == 'action') {
    if (is_array($_POST['checkbox'])) {
        if ($_POST['action'] == 'del_all') {
            // 批量删除
            $dou->del_all('medium', $_POST['checkbox'], 'id', 'image');
        } elseif ($_POST['action'] == 'category_move') {
            // 批量移动分类
            $dou->category_move('medium', $_POST['checkbox'], $_POST['new_cat_id']);
        } else {
            $dou->dou_msg($_LANG['select_empty']);
        }
    } else {
        $dou->dou_msg($_LANG['medium_select_empty']);
    }
}

/**
 * +----------------------------------------------------------
 * 获取首页显示
 * +----------------------------------------------------------
 */
function get_sort_medium() {
    $limit = $GLOBALS['_DISPLAY']['home_medium'] ? ' LIMIT ' . $GLOBALS['_DISPLAY']['home_medium'] : '';
    $sql = "SELECT id, title FROM " . $GLOBALS['dou']->table('medium') . " WHERE sort > 0 ORDER BY sort DESC" . $limit;
    $query = $GLOBALS['dou']->query($sql);
    while ($row = $GLOBALS['dou']->fetch_array($query)) {
        $sort[] = array(
                "id" => $row['id'],
                "title" => $row['title'] 
        );
    }
    
    return $sort;
}
?>