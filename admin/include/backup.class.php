<?php
/**
 * WincomtechPHP
 * --------------------------------------------------------------------------------------------------
 * 版权所有 2013-2035 XXX网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.wowlothar.cn
 * --------------------------------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在遵守授权协议前提下对程序代码进行修改和使用；不允许对程序代码以任何形式任何目的的再发布。
 * 授权协议：http://www.wowlothar.cn/license.html
 * --------------------------------------------------------------------------------------------------
 * Author: Lothar
 * Release Date: 2015-10-16
 */
if (!defined('IN_LOTHAR')) {
    die('Hacking attempt');
}
class Backup {
    var $sqlcharset;
    function Backup($sqlcharset) {
        $this->sqlcharset = $sqlcharset;
    }
    
    /**
     * +----------------------------------------------------------
     * 生成数据库备份文件
     * +----------------------------------------------------------
     * $table 所选数据表
     * $vol_size 每个分卷文件大小
     * +----------------------------------------------------------
     */
    function sql_dumptable($table, $vol_size, $startfrom = 0, $currsize = 0) {
        global $startrow;
        
        $allow_max_size = intval(@ ini_get('upload_max_filesize')); // 单位M
        if ($allow_max_size > 0 && $vol_size > ($allow_max_size * 1024)) {
            $vol_size = $allow_max_size * 1024; // 单位K
        }
        
        if ($vol_size > 0) {
            $vol_size = $vol_size * 1024;
        }
        
        if (!isset($tabledump)) {
            $tabledump = '';
        }
        $offset = 100;
        if (!$startfrom) {
            $tabledump = "DROP TABLE IF EXISTS `$table`;\n";
            $createtable = $GLOBALS['dou']->query("SHOW CREATE TABLE $table");
            $create = $GLOBALS['dou']->fetch_array($createtable);
            $tabledump .= $create[1] . ";\n\n";
            if ($GLOBALS['dou']->version() > '4.1' && $this->sqlcharset) {
                $tabledump = preg_replace("/(DEFAULT)*\s*CHARSET=[a-zA-Z0-9]+/", "DEFAULT CHARSET=" . $this->sqlcharset, $tabledump);
            }
        }
        $tabledumped = 0;
        $numrows = $offset;
        while ($currsize + strlen($tabledump) < $vol_size && $numrows == $offset) {
            $tabledumped = 1;
            $rows = $GLOBALS['dou']->query("SELECT * FROM $table LIMIT $startfrom, $offset");
            $numfields = $GLOBALS['dou']->num_fields($rows);
            $numrows = $GLOBALS['dou']->num_rows($rows);
            while ($row = $GLOBALS['dou']->fetch_array($rows)) {
                $comma = "";
                $tabledump .= "INSERT INTO $table VALUES(";
                for($i = 0; $i < $numfields; $i++) {
                    $tabledump .= $comma . '\'' . $GLOBALS['dou']->escape_string($row[$i]) . '\'';
                    $comma = ",";
                }
                $tabledump .= ");\n";
            }
            $startfrom += $offset;
        }
        $startrow = $startfrom;
        $tabledump .= "\n";
        return $tabledump;
    }
    
    /**
     * 获取文件扩展名
     */
    function fileext($filename) {
        return trim(substr(strrchr($filename, '.'), 1));
    }

    /**
     * +----------------------------------------------------------
     * 判断备份文件名是否规范
     * +----------------------------------------------------------
     */
    function is_backup_file($file_name) {
        if (preg_match("/^[a-zA-Z0-9_]+.sql$/", $file_name)) {
            return true;
        }
    }
}
?>