<?php defined('SYSPATH') or die('No direct script access.');

require SYSPATH.'route'.EXT;

try{
 $_default='welcome';
 $_action='index';

 $route= RouteFactory::intance()->set('');


 $controller=APPPATH.'controller'.DIRECTORY_SEPARATOR.$route['controller'];

 $action=$route['action'];

 if(($action=='login') || ($action=='logout'))
 {
 	require $controller.DIRECTORY_SEPARATOR.'index'.EXT;
 	exit;
 }


if ($route['controller']=='')
 	$controller=$controller.$_default;

 if ($action=='')
   $action=$_action;

 if (count($route)>2)
 {
   $opt=$route['opt'];
   require $controller.DIRECTORY_SEPARATOR.$action.DIRECTORY_SEPARATOR.$opt.EXT;
 }
 else
 if (is_dir($controller) && (file_exists($controller.DIRECTORY_SEPARATOR.$action.EXT)))
  require $controller.DIRECTORY_SEPARATOR.$action.EXT;
 else
 {
 	//@header('HTTP/1.1 404 Not Found');
 	//@header('Location: /404.php');
 	//die();
 }

 }catch(Exception $e)
 {
 	require "404".EXT;
 }
?>
