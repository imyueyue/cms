<?php  defined('SYSPATH') or die('No direct script access.');

require SMARTY.'Smarty.class'.EXT;

require MODPATH.'admin.template'.EXT;

$smarty=new Smarty();

$template_dir = TEMPLATES.'templates'.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'template';

$smarty->assign(AdminTemplateFactory::intance()->getheader());

$smarty->assign(AdminTemplateFactory::intance()->getData('index',array('act'=>'list') ) );

$smarty->assign (array(
		 'links'=>array(),
		 'scripts'=>array()

));

$smarty->assign(array('caption'=>'模版列表','news_list'=>AdminTemplateFactory::intance()->getData('list')));

$smarty->template_dir = $template_dir;

$smarty->display('list.tpl');




?>