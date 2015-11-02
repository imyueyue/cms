<?php /* Smarty version 3.1.27, created on 2015-11-02 11:45:04
         compiled from "D:\workspace\yuecms\media\templates\admin\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:324855636dc40d258e3_56846332%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65a9616a7daa634a296283ff24def50d0262ed94' => 
    array (
      0 => 'D:\\workspace\\yuecms\\media\\templates\\admin\\header.tpl',
      1 => 1446435898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324855636dc40d258e3_56846332',
  'variables' => 
  array (
    'title' => 0,
    'links' => 0,
    'value' => 0,
    'scripts' => 0,
    'AdminTitle' => 0,
    'Navs' => 0,
    'Menus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5636dc40db2303_94058077',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5636dc40db2303_94058077')) {
function content_5636dc40db2303_94058077 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '324855636dc40d258e3_56846332';
?>
<!DOCTYPE html>
<html lang="zh_cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <!-- Bootstrap core CSS -->
    <link href="../../media/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../media/css/dashboard.css" rel="stylesheet">

    <?php
$_from = $_smarty_tpl->tpl_vars['links']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
     <link href="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" rel="stylesheet">
    <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?> 

    <?php
$_from = $_smarty_tpl->tpl_vars['scripts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
      <?php echo '<script'; ?>
 charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo '</script'; ?>
>
    <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="../../media/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
  </head>

  <body>
  
  <nav class="navbar navbar-dark navbar-fixed-top bg-inverse">
      <button type="button" class="navbar-toggler visible-xs" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['AdminTitle']->value;?>
</a>
      <nav class="nav navbar-nav pull-left">
      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['name'] = 'sec1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Navs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total']);
?>
        <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['Navs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['Navs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['name'];?>
</a>
      <?php endfor; endif; ?>
      </nav>
      <form class="navbar-form pull-right">
        <input type="text" class="form-control" placeholder="Search...">
      </form>
    </nav>
    
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
        
         <?php
$_from = $_smarty_tpl->tpl_vars['Menus']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
            <?php if ($_smarty_tpl->tpl_vars['value']->value['active']) {?>
             <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
 <span class="sr-only">(current)</span></a></li>
            <?php } else { ?>
             <li><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></li>
            <?php }?>
           <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
         </ul>

        </div>

   
<?php }
}
?>