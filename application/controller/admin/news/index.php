<?php defined('SYSPATH') or die('No direct script access.');


require SMARTY.'Smarty.class'.EXT;
require MODPATH.'admin.news'.EXT;

$smarty=new Smarty();

$template_dir = TEMPLATES.'templates'.DIRECTORY_SEPARATOR.'admin';

$smarty->template_dir = $template_dir;

$smarty->assign(AdminNewsFactory::intance()->getData('news'));


$smarty->assign (array(
		'links'=>array(),
		'scripts'=>array()

));

$smarty->assign(array('caption'=>'新闻平台'));

$smarty->display('index.tpl');



?>