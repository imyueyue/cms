<?php /* Smarty version 3.1.27, created on 2015-11-01 09:29:31
         compiled from "/Users/zhaicunjiang/Documents/workspace/ycms/media/templates/admin/news/add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:165085781256356afbb1b2c8_01192302%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6af7da5953c8e57c126964e5e26901c6093bb2d3' => 
    array (
      0 => '/Users/zhaicunjiang/Documents/workspace/ycms/media/templates/admin/news/add.tpl',
      1 => 1446341363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165085781256356afbb1b2c8_01192302',
  'variables' => 
  array (
    'caption' => 0,
    'htmlData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56356afbb749c9_29332947',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56356afbb749c9_29332947')) {
function content_56356afbb749c9_29332947 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '165085781256356afbb1b2c8_01192302';
echo $_smarty_tpl->getSubTemplate ("../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h4 class="page-header"><?php echo $_smarty_tpl->tpl_vars['caption']->value;?>
</h4>
          <hr>
          <div class="content">
             <form name="addnews" method="POST">
              <table> 
              <tr>
              <td style="width:80px"><label for="title">标题</label></td><td><input style="width:500px" type="text" name="title" value="" /></td></tr>
              <tr><td><label for="subtitle">副标题</label></tb><td><input style="width:500px"  type="text" name="subtitle" value="" /></td></tr>
              <tr><td><label for="content">内容</label></td><td>
              <textarea name="content" style="width:700px;height:200px;visibility:hidden;"><?php echo $_smarty_tpl->tpl_vars['htmlData']->value;?>
</textarea></td></tr>
              <tr><td></td><td><input type="submit" value="保存" /></td>
              </tr>
              </table>
             </form>
           </div>
        </div>
    </div>

    <?php echo '<script'; ?>
>
    KindEditor.ready(function(K) {
      var editor1 = K.create('textarea[name="content"]', {
        cssPath : '',
        uploadJson : '',
        fileManagerJson : '',
        allowFileManager : true,
        afterCreate : function() {
          var self = this;
          K.ctrl(document, 13, function() {
            self.sync();
            K('form[name=addnews]')[0].submit();
          });
          K.ctrl(self.edit.doc, 13, function() {
            self.sync();
            K('form[name=addnews]')[0].submit();
          });
        }
      });
      prettyPrint();
    });
  <?php echo '</script'; ?>
>


<?php echo $_smarty_tpl->getSubTemplate ("../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>