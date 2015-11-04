<?php defined('SYSPATH') or die('No direct script access.');


require SMARTY.'Smarty.class'.EXT;
require MODPATH.'admin.template'.EXT;

$smarty=new Smarty();

$template_dir = TEMPLATES.'templates'.DIRECTORY_SEPARATOR.'admin';

$smarty->template_dir = $template_dir;

$smarty->assign(AdminTemplateFactory::intance()->getheader());

$smarty->assign(AdminTemplateFactory::intance()->getData('index'));


$smarty->assign (array(
		'links'=>array(),
		'scripts'=>array()

));

$smarty->assign(array('caption'=>'模版平台'));

$smarty->display('index.tpl');



?>