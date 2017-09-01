<?php
/* Smarty version 3.1.30, created on 2017-08-31 09:32:45
  from "D:\WWW\marketing\admin\templates\index.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a7673d0d2a75_22618789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d29c5e166e7d4a3a593aec2f8ab832456b4b31' => 
    array (
      0 => 'D:\\WWW\\marketing\\admin\\templates\\index.htm',
      1 => 1501814977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:javascript.htm' => 1,
    'file:header.htm' => 1,
    'file:menu.htm' => 1,
    'file:ur_here.htm' => 1,
    'file:footer.htm' => 1,
  ),
),false)) {
function content_59a7673d0d2a75_22618789 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title><?php echo $_smarty_tpl->tpl_vars['lang']->value['home'];
if ($_smarty_tpl->tpl_vars['ur_here']->value) {?> - <?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
 <?php }?></title>
  <meta name="Copyright" content="Lothar Design." />
  <link href="templates/public.css" rel="stylesheet" type="text/css">
  <?php $_smarty_tpl->_subTemplateRender("file:javascript.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php echo '<script'; ?>
 type="text/javascript">cloud_update_number('<?php echo $_smarty_tpl->tpl_vars['localsite']->value;?>
')<?php echo '</script'; ?>
>
</head>
<body>
  <div id="dcWrap">
    <?php $_smarty_tpl->_subTemplateRender("file:header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="dcLeft"><?php $_smarty_tpl->_subTemplateRender("file:menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
    <div id="dcMain">
      <?php $_smarty_tpl->_subTemplateRender("file:ur_here.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div id="index" class="mainBox" style="padding-top:18px;<?php echo $_smarty_tpl->tpl_vars['workspace']->value['height'];?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sys_info']->value['folder_exists'], 'warning');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
?>
        
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
        <div id="douApi"></div>
        <?php if ($_smarty_tpl->tpl_vars['rec']->value == 'default') {?>
        <div class="indexBox">
          <div class="boxTitle"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title_page'];?>
</div>
          <ul class="ipage">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page_list']->value, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?> 
            <a href="page.php?rec=edit&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['list']->value['level'] > 0) {?> class="child<?php echo $_smarty_tpl->tpl_vars['list']->value['level'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['list']->value['page_name'];?>
</a> 
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <div class="clear"></div>
          </ul>
        </div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="indexBoxTwo">
          <tr>
            <td width="65%" valign="top" class="pr">
              <div class="indexBox">
                <div class="boxTitle"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title_site_info'];?>
</div>
                <ul>
                  <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
                    <tr>
                      <td width="120"><?php echo $_smarty_tpl->tpl_vars['lang']->value['num_page'];?>
：</td>
                      <td><strong><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['num_page'];?>
</strong></td>
                      <td width="100"><?php echo $_smarty_tpl->tpl_vars['lang']->value['num_article'];?>
：</td>
                      <td><strong><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['num_article'];?>
</strong></td>
                    </tr>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['num_product'];?>
：</td>
                      <td><strong><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['num_product'];?>
</strong></td>
                      <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['language'];?>
：</td>
                      <td><strong><?php echo $_smarty_tpl->tpl_vars['site']->value['language'];?>
</strong></td>
                    </tr>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['rewrite'];?>
：</td>
                      <td>
                        <strong><?php if ($_smarty_tpl->tpl_vars['site']->value['rewrite']) {
echo $_smarty_tpl->tpl_vars['lang']->value['open'];
} else {
echo $_smarty_tpl->tpl_vars['lang']->value['close'];?>
<a href="system.php" class="cueRed ml"><?php echo $_smarty_tpl->tpl_vars['lang']->value['open_cue'];?>
</a> 
                          <?php }?></strong>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['charset'];?>
：</td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['charset'];?>
</strong></td>
                      </tr>
                      <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['if_sitemap'];?>
：</td>
                        <td>
                          <strong><?php if ($_smarty_tpl->tpl_vars['site']->value['sitemap']) {
echo $_smarty_tpl->tpl_vars['lang']->value['open'];
} else {
echo $_smarty_tpl->tpl_vars['lang']->value['close'];
}?></strong>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['site_theme'];?>
：</td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['site']->value['site_theme'];?>
</strong></td>
                      </tr>
                      <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['dou_version'];?>
：</td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['site']->value['douphp_version'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['build_date'];?>
：</td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['build_date'];?>
</strong></td>
                      </tr>
                    </table>
                  </ul>
                </div>
              </td>
              <td valign="top" class="pl">
                <div class="indexBox">
                  <div class="boxTitle"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title_admin_log'];?>
</div>
                  <ul>
                    <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
                      <tr>
                        <th width="45%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['manager_log_ip'];?>
</th>
                        <th width="55%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['manager_log_create_time'];?>
</th>
                      </tr>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['log_list']->value, 'log');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
?>
                      <tr>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['log']->value['ip'];?>
</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['log']->value['create_time'];?>
</td>
                      </tr>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </table>
                  </ul>
                </div>
              </td>
            </tr>
          </table>
          <div class="indexBox">
            <div class="boxTitle"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title_sys_info'];?>
</div>
            <ul>
              <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
                <tr>
                  <td width="120" valign="top"><?php echo $_smarty_tpl->tpl_vars['lang']->value['php_version'];?>
：</td>
                  <td valign="top"><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['php_ver'];?>
 </td>
                  <td width="100" valign="top"><?php echo $_smarty_tpl->tpl_vars['lang']->value['mysql_version'];?>
：</td>
                  <td valign="top"><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['mysql_ver'];?>
</td>
                  <td width="100" valign="top"><?php echo $_smarty_tpl->tpl_vars['lang']->value['os'];?>
：</td>
                  <td valign="top"><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['os'];?>
(<?php echo $_smarty_tpl->tpl_vars['sys_info']->value['ip'];?>
)</td>
                </tr>
                <tr>
                  <td valign="top"><?php echo $_smarty_tpl->tpl_vars['lang']->value['max_filesize'];?>
：</td>
                  <td valign="top"><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['max_filesize'];?>
</td>
                  <td valign="top"><?php echo $_smarty_tpl->tpl_vars['lang']->value['gd'];?>
：</td>
                  <td valign="top"><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['gd'];?>
</td>
                  <td valign="top"><?php echo $_smarty_tpl->tpl_vars['lang']->value['web_server'];?>
：</td>
                  <td valign="top"><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['web_server'];?>
</td>
                </tr>
              </table>
            </ul>
          </div>
          <div class="indexBox" id="must_hide">
            <div class="boxTitle"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title_official'];?>
</div>
            <ul>
              <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
                <tr>
                  <td width="120"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['about_site'];?>
： </td>
                  <td><a href="http://www.wowlothar.cn" target="_blank">http://www.wowlothar.cn</a></td>
                </tr>
                <tr>
                  <td> <?php echo $_smarty_tpl->tpl_vars['lang']->value['about_bbs'];?>
： </td>
                  <td>
                    <a href="http://bbs.lothar.cn" target="_blank">http://bbs.lothar.cn </a><em>（<?php echo $_smarty_tpl->tpl_vars['lang']->value['about_bbs_a'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['about_bbs_b'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['about_bbs_c'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['about_bbs_d'];?>
）</em>
                  </td>
                </tr>
                <tr>
                  <td> <?php echo $_smarty_tpl->tpl_vars['lang']->value['about_contributor'];?>
： </td>
                  <td>Wooyun.org, Pany, Tea</td>
                </tr>
                <tr>
                  <td> <?php echo $_smarty_tpl->tpl_vars['lang']->value['about_license'];?>
： </td>
                  <td>
                    <a href="http://www.wowlothar.cn/license.html" target="_blank">http://www.wowlothar.cn/license.html</a><em>（您可以免费使用DouPHP（不限商用），但必须保留相关版权信息。）</em>
                  </td>
                </tr>
              </table>
            </ul>
          </div>
          <?php }?> 
        </div>
      </div>
      <?php $_smarty_tpl->_subTemplateRender("file:footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
  </body>
  </html><?php }
}
