<?php /* Smarty version 3.1.27, created on 2015-11-02 11:48:04
         compiled from "D:\workspace\yuecms\media\templates\admin\news\list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:875636dcf418dca2_03214826%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c81763fbc4aa7c829ec1b74e6423d6158f741c2' => 
    array (
      0 => 'D:\\workspace\\yuecms\\media\\templates\\admin\\news\\list.tpl',
      1 => 1446434809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '875636dcf418dca2_03214826',
  'variables' => 
  array (
    'caption' => 0,
    'news_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5636dcf42129c5_81473339',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5636dcf42129c5_81473339')) {
function content_5636dcf42129c5_81473339 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '875636dcf418dca2_03214826';
echo $_smarty_tpl->getSubTemplate ("../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0);
?>


    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h4 class="page-header"><?php echo $_smarty_tpl->tpl_vars['caption']->value;?>
</h4>
          <div class="content">
         <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>标题</th>
                  <th>副标题</th>
                  <th>创建时间</th>
                </tr>
              </thead>
              <tbody>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['row'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['row']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['name'] = 'row';
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['news_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total']);
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['id'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['title'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['subtitle'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['addtime'];?>
</td>
                </tr>      
             <?php endfor; endif; ?>
            </tbody>
          </table>
          </div>
    </div>

<?php echo $_smarty_tpl->getSubTemplate ("../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>