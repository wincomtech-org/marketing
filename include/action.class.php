<?php
if (!defined('IN_LOTHAR')) die('Hacking attempt');

class Action extends Common {
    /**
     * +----------------------------------------------------------
     * 当前位置
     * +----------------------------------------------------------
     * $module 模块名称
     * $class 分类ID或模块子栏目
     * $title 信息标题
     * +----------------------------------------------------------
     */
    function ur_here($module='', $class='', $title='') {
        if ($module == 'page') {
            // 如果是单页面，则只显示单页面名称
            $ur_here = $title;
        } elseif (!$class) {
            // 模块主页
            $ur_here = $GLOBALS['_LANG'][$module];
        } else {
            // 模块名称
            $main = '<a href=' . $this->rewrite_url($module) . '>' . $GLOBALS['_LANG'][$module] . '</a>';
            
            // 如果存在分类
            if ($class) {
                $cat_name = is_numeric($class) ? $this->get_one("SELECT cat_name FROM " . $this->table($module) . " WHERE cat_id = '$class'") : $GLOBALS['_LANG'][$class];
                
                // 如果存在标题
                if ($title) {
                    $category = '<b>></b><a href=' . $this->rewrite_url($module, $class) . '>' . $cat_name . '</a>';
                } else {
                    $category = "<b>></b>$cat_name";
                }
            }
            
            // 如果存在标题
            if ($title)
                $title = '<b>></b>' . $title;
            
            $ur_here = $main . $category . $title;
        }
        
        return $ur_here;
    }
    
    /**
     * +----------------------------------------------------------
     * 标题
     * +----------------------------------------------------------
     * $module 模块名称
     * $class 分类ID或模块子栏目
     * $title 信息标题
     * +----------------------------------------------------------
     */
    function page_title($module, $class = '', $title = '') {
        // 如果是单页面，则只执行这一句
        if ($module == 'page') {
            $titles = $title . ' | ';
        } elseif ($module) {
            // 模块名称
            $main = $GLOBALS['_LANG'][$module] . ' | ';
            
            // 如果存在分类
            if ($class) {
                $cat_name = is_numeric($class) ? $this->get_one("SELECT cat_name FROM " . $this->table($module) . " WHERE cat_id = '$class'") : $GLOBALS['_LANG'][$class];
                $cat_name = $cat_name . ' | ';
            }
            
            // 如果存在标题
            if ($title)
                $title = $title . ' | ';
            
            $titles = $title . $cat_name . $main;
        }
        
        $page_title = ($titles ? $titles . $GLOBALS['_CFG']['site_name'] : $GLOBALS['_CFG']['site_title']) . ' - Powered by WincomtechPHP';
        
        return $page_title;
    }
    
    /**
     * +----------------------------------------------------------
     * 判断是否是移动客户端
     * +----------------------------------------------------------
     */
    function is_mobile() {
        static $is_mobile;
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        
        if (isset($is_mobile))
            return $is_mobile;
        
        if (empty($user_agent)) {
            $is_mobile = false;
        } else {
            // 移动端UA关键字
            $mobile_agents = array(
                    'Mobile',
                    'Android',
                    'Silk/',
                    'Kindle',
                    'BlackBerry',
                    'Opera Mini',
                    'Opera Mobi' 
            );
            $is_mobile = false;
            
            foreach ($mobile_agents as $device) {
                if (strpos($user_agent, $device) !== false) {
                    $is_mobile = true;
                    break;
                }
            }
        }
        
        return $is_mobile;
    }
    
    /**
     * +----------------------------------------------------------
     * 获取去除路径和扩展名的文件名
     * +----------------------------------------------------------
     * $file 图片地址
     * +----------------------------------------------------------
     */
    function get_file_name($file) {
        $basename = basename($file);
        return $file_name = substr($basename, 0, strrpos($basename, '.'));
    }
    
    /**
     * +----------------------------------------------------------
     * 信息提示
     * +----------------------------------------------------------
     * $text 提示的内容
     * $url 提示后要跳转的网址
     * $time 多久时间跳转
     * +----------------------------------------------------------
     */
    function dou_msg($text, $url = '', $time = 3) {
        if (!$text) {
            $text = $GLOBALS['_LANG']['dou_msg_success'];
        }
        
        /* 获取meta和title信息 */
        $GLOBALS['smarty']->assign('page_title', $GLOBALS['_CFG']['site_title']);
        $GLOBALS['smarty']->assign('keywords', $GLOBALS['_CFG']['site_keywords']);
        $GLOBALS['smarty']->assign('description', $GLOBALS['_CFG']['site_description']);
        
        /* 初始化导航栏 */
        // $data = $this->fetch_array_all($this->table('nav'), 'sort ASC');
        $GLOBALS['smarty']->assign('nav_top_list', $this->get_nav('top'));
        $GLOBALS['smarty']->assign('nav_middle_list', $this->get_nav('middle'));
        $GLOBALS['smarty']->assign('nav_bottom_list', $this->get_nav('bottom'));
        
        /* 初始化数据 */
        $GLOBALS['smarty']->assign('ur_here', $GLOBALS['_LANG']['dou_msg']);
        $GLOBALS['smarty']->assign('text', $text);
        $GLOBALS['smarty']->assign('url', $url);
        $GLOBALS['smarty']->assign('time', $time);
        
        // 根据跳转时间生成跳转提示
        $cue = preg_replace('/d%/Ums', $time, $GLOBALS['_LANG']['dou_msg_cue']);
        $GLOBALS['smarty']->assign('cue', $cue);
        
        $GLOBALS['smarty']->display('dou_msg.dwt');
        
        exit();
    }

    /*弹窗*/
    public function popup($msg='', $style, $time=3, $ext='')
    {
        // global $_CFG['theme_s'],$_URL;
        // <link href="doubox.css" rel="stylesheet" type="text/css" />
        $time = $time*1000;
        $scri = '';
        // $scri = '<script>{literal}setTimeout(function(){$("#douBox").fadeOut();}, 1000);{/literal}</script>';
        // <h2><a href="javascript:void(0)" class="close" onclick="douRemove('douBox')">X</a>提示：显示的是您当前点击的媒介的相关数据统计。</h2>

        if ($style==2) {
        $doubox = <<<EOT
            <div id="douBox">
                <link rel="stylesheet" href="/theme/default/doubox.css"/>
                <style type="text/css">#douBox .boxFrame {overflow:auto;width:100%;left:0%;top:inherit;bottom:0;margin-left:0px;}#douBox .boxFrame .boxCon {height:50px;}#douBox .boxFrame .boxCon dd{font-size:16px;}#douBox .boxFrame .boxCon dd a{margin:0;}.boxdt{float:left;margin-left:5%;margin-right:10%;}.boxdd1{float:left;margin-right:15%;}.boxdd2{float:left;}</style>
                <div class="boxFrame">
                    <div class="close_dou">x</div>
                    <div class="boxCon">
                        <dl>
                            <dt class="boxdt">{$msg}</dt>
                            <dd class="boxdd1">当前媒介名：{$ext[name]}</dd>
                            <dd class="boxdd1">总数：{$ext[total]}</dd>
                            <dd class="boxdd1">价格总计：{$ext[amount]}</dd>
                            <dd class="boxdd2"><a href="order.php?rec=cart">结算</a></dd>
                        </dl>
                    </div>
                </div>
                {$scri}
            </div>
EOT;
        } else {
        $doubox = <<<EOT
            <div id="douBox">
                <link rel="stylesheet" href="/theme/default/doubox.css"/>
                <div class="boxBg"></div>
                <div class="boxFrame">
                    <h2><a href="javascript:void(0)" class="close" onclick="douRemove('douBox')">X</a>提示</h2>
                    <div class="boxCon">
                        <dt>{$msg}</dt>
                        <dd></dd>
                        <dd></dd>
                    </div>
                </div>
                {$scri}
            </div>
EOT;
        }

        echo $doubox;exit();
    }

    /*JSON*/
    public function djson($code=1, $msg='OK', $ext='')
    {
        echo json_encode(array('code'=>$code,'msg'=>$msg,'ext'=>$ext));exit;
    }
}
?>