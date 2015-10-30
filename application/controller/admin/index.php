<?php defined('SYSPATH') or die('No direct script access.');


require SMARTY.'libs/Smarty.class'.EXT;

require MODPATH.'admin.news'.EXT;

$smarty=new Smarty();

$template_dir = TEMPLATES.'templates'.DIRECTORY_SEPARATOR.'admin';

$smarty->template_dir = $template_dir;

$smarty->assign(AdminFactory::intance()->getData('news'));

$smarty->assign(array('caption'=>'新闻列表'));

$smarty->display('index.tpl');

?>