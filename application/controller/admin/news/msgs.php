<?php  defined('SYSPATH') or die('No direct script access.');

require SMARTY.'Smarty.class'.EXT;

require MODPATH.'admin.news'.EXT;

$smarty=new Smarty();

$template_dir = TEMPLATES.'templates'.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'news';

$smarty->assign(AdminNewsFactory::intance()->getheader());

$smarty->assign(AdminFactory::intance()->getData('news'));

$smarty->assign (array(
		'links'=>array(),
		'scripts'=>array()

));


if ($_GET){
	$param=array('msg'=>$_GET['msg'],'goto'=>$_GET['goto']);
}


$msgs=AdminFactory::intance()->getData('msg',$param);

$smarty->assign(array('caption'=>'消息','msg'=>$msgs,'gotourl'=>$param['goto']));

$smarty->template_dir = $template_dir;

$smarty->display('msg.tpl');







?>