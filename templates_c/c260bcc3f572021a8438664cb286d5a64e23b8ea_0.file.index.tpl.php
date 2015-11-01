<?php /* Smarty version 3.1.27, created on 2015-11-01 21:06:33
         compiled from "/Users/zhaicunjiang/Documents/workspace/ycms/media/templates/admin/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19273810156360e595775a2_02407895%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c260bcc3f572021a8438664cb286d5a64e23b8ea' => 
    array (
      0 => '/Users/zhaicunjiang/Documents/workspace/ycms/media/templates/admin/index.tpl',
      1 => 1446383098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19273810156360e595775a2_02407895',
  'variables' => 
  array (
    'caption' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56360e595fda93_86554596',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56360e595fda93_86554596')) {
function content_56360e595fda93_86554596 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19273810156360e595775a2_02407895';
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