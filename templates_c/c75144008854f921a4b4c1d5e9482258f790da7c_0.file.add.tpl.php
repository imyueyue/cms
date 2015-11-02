<?php /* Smarty version 3.1.27, created on 2015-11-02 11:53:37
         compiled from "D:\workspace\yuecms\media\templates\admin\notice\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:314775636de41df2076_07091547%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c75144008854f921a4b4c1d5e9482258f790da7c' => 
    array (
      0 => 'D:\\workspace\\yuecms\\media\\templates\\admin\\notice\\add.tpl',
      1 => 1446434808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314775636de41df2076_07091547',
  'variables' => 
  array (
    'caption' => 0,
    'htmlData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5636de41e4be03_73170342',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5636de41e4be03_73170342')) {
function content_5636de41e4be03_73170342 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '314775636de41df2076_07091547';
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