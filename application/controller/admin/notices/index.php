<?php defined('SYSPATH') or die('No direct script access.');


require SMARTY.'Smarty.class'.EXT;
require MODPATH.'admin.notice'.EXT;

$smarty=new Smarty();

$template_dir = TEMPLATES.'templates'.DIRECTORY_SEPARATOR.'admin';

$smarty->template_dir = $template_dir;

$smarty->assign(AdminNoticeFactory::intance()->getheader());

$smarty->assign(AdminNoticeFactory::intance()->getData('index'));


$smarty->assign (array(
		'links'=>array(),
		'scripts'=>array()

));

$smarty->assign(array('caption'=>'公告平台'));

$smarty->display('index.tpl');



?>