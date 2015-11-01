<?php /* Smarty version 3.1.27, created on 2015-11-01 13:46:10
         compiled from "/Users/zhaicunjiang/Documents/workspace/ycms/media/templates/admin/news/msg.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16089584525635a72283ccf4_29071633%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28d348d851a427f9c37dacbae7c900274d0c9288' => 
    array (
      0 => '/Users/zhaicunjiang/Documents/workspace/ycms/media/templates/admin/news/msg.tpl',
      1 => 1446356747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16089584525635a72283ccf4_29071633',
  'variables' => 
  array (
    'caption' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5635a7228a5481_10285683',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5635a7228a5481_10285683')) {
function content_5635a7228a5481_10285683 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16089584525635a72283ccf4_29071633';
echo $_smarty_tpl->getSubTemplate ("../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'ok'), 0);
?>


    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h4 class="page-header"><?php echo $_smarty_tpl->tpl_vars['caption']->value;?>
</h4>
      <hr>
          <div class="content">
            <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

          </div>
          <div id="show"></div>
    </div>

   <?php echo '<script'; ?>
 type="text/javascript">
      var t = 5; // 设定跳转的时间
      setInterval("refer()", 1000); // 启动1秒定时
      function refer(){ 
      if (t == 0) {
         location = "../../admin/news/list"; // 设定跳转的链接地址
      }
       document.getElementById('show').innerHTML = "" + t + "秒后跳转到列表"; // 显示倒计时
       t--; // 计数器递减
      }
     <?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>