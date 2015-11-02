<?php /* Smarty version 3.1.27, created on 2015-11-02 11:35:43
         compiled from "D:\workspace\yuecms\media\templates\admin\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:109325636da0fc5dfb0_16861398%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a1d0e52a558d6be22a5be4e82614e0e8917f9b8' => 
    array (
      0 => 'D:\\workspace\\yuecms\\media\\templates\\admin\\index.tpl',
      1 => 1446434809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109325636da0fc5dfb0_16861398',
  'variables' => 
  array (
    'caption' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5636da0fcbbbd0_96768212',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5636da0fcbbbd0_96768212')) {
function content_5636da0fcbbbd0_96768212 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '109325636da0fc5dfb0_16861398';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><?php echo $_smarty_tpl->tpl_vars['caption']->value;?>
</h1>
          <div class="content"></div>
        </div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>