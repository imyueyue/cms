<?php

 $application = 'application';
 $modules = 'modules';
 $system = 'system';
 $smarty = 'smarty';
 $template = 'media';



 define('EXT', '.php');

 error_reporting(E_ALL | E_STRICT);

 //error_reporting(E_ALL & ~E_NOTICE);

//error_reporting(NULL);

 define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);

 if ( ! is_dir($application) AND is_dir(DOCROOT.$application))
 	$application = DOCROOT.$application;

 if ( ! is_dir($modules) AND is_dir(DOCROOT.$modules))
 	$modules = DOCROOT.$modules;

 if ( ! is_dir($system) AND is_dir(DOCROOT.$system))
 	$system = DOCROOT.$system;

 define('APPPATH', realpath($application).DIRECTORY_SEPARATOR);
 define('MODPATH', realpath($modules).DIRECTORY_SEPARATOR);
 define('SYSPATH', realpath($system).DIRECTORY_SEPARATOR);
 define('SMARTY', realpath($smarty).DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR);

 define('TEMPLATES', realpath($template).DIRECTORY_SEPARATOR);


 unset($application,$modules,$system);

 date_default_timezone_set('Asia/Shanghai');

 $GLOBALS['cfg']=include "config".EXT;

 //加载JSON数据至数据库
 include MODPATH."data.append".EXT;


 require APPPATH.'bootstrap'.EXT;



?>