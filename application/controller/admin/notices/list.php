<?php  defined('SYSPATH') or die('No direct script access.');

require SMARTY.'Smarty.class'.EXT;

require MODPATH.'admin.notice'.EXT;

$smarty=new Smarty();

$template_dir = TEMPLATES.'templates'.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'notice';

$smarty->assign(AdminNoticeFactory::intance()->getheader());

$smarty->assign(AdminNoticeFactory::intance()->getData('add',array('act'=>'list') ) );

$smarty->assign (array(
		 'links'=>array(),
		 'scripts'=>array()

));

$smarty->assign(array('caption'=>'新闻列表','news_list'=>AdminNoticeFactory::intance()->getData('list')));

$smarty->template_dir = $template_dir;

$smarty->display('list.tpl');




?>