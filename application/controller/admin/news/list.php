<?php  defined('SYSPATH') or die('No direct script access.');

require SMARTY.'Smarty.class'.EXT;

require MODPATH.'admin.news'.EXT;

$smarty=new Smarty();

$template_dir = TEMPLATES.'templates'.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'news';

$smarty->assign(AdminNewsFactory::intance()->getData('news',array('act'=>'list') ) );

$smarty->assign (array(
		 'links'=>array(),
		 'scripts'=>array()
		
));

$smarty->assign(array('caption'=>'新闻列表','news_list'=>AdminNewsFactory::intance()->getData('list')));

$smarty->template_dir = $template_dir;

$smarty->display('list.tpl');




?>