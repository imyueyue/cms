<?php  defined('SYSPATH') or die('No direct script access.');

require SMARTY.'libs/Smarty.class'.EXT;

require MODPATH.'admin.news'.EXT;

$smarty=new Smarty();

$template_dir = TEMPLATES.'templates'.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'news';

$smarty->assign(AdminFactory::intance()->getData('news'));

$smarty->assign(array('caption'=>'增加新闻'));


$smarty->template_dir = $template_dir;

$smarty->display('add.tpl');

if ($_POST){

 $data= array(
 		 'title'=>$_POST['title'],
 		 'subtitle'=>$_POST['subtitle'],
 		 'content'=>$_POST['content']);

 AdminFactory::intance()->setData($data);

 }


?>