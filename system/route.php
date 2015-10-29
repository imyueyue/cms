<?php defined('SYSPATH') OR die('No direct script access.');

interface IRoute{
	function set($name, $uri = NULL);
}

class Route {


	protected $_defaults = array('action' => 'index', 'host' => FALSE);

	public function __construct($uri = NULL, $regex = NULL)
	{

	}


	public function defaults(array $defaults = NULL)
	{
		if ($defaults === NULL)
		{
			return $this->_defaults;
		}

		$this->_defaults = $defaults;

		return $this;
	}


	public static function set($name, $uri = NULL){
		$_DocumentPath = $_SERVER['DOCUMENT_ROOT'];

		$_FilePath = __FILE__;

		$_RequestUri = $_SERVER['REQUEST_URI'];


		$_AppPath = str_replace($_DocumentPath, '', $_FilePath);

		$_UrlPath = $_RequestUri;


		$_AppPathArr = explode(DIRECTORY_SEPARATOR, $_AppPath);


		for ($i = 0; $i < count($_AppPathArr); $i++) {
			$p = $_AppPathArr[$i];
			if ($p) {
				$_UrlPath = preg_replace('/^\/'.$p.'\//', '/', $_UrlPath, 1);
			}

		}

		$_UrlPath = preg_replace('/^\//', '', $_UrlPath, 1);

		$_AppPathArr = explode("/", $_UrlPath);
		$_AppPathArr_Count = count($_AppPathArr);

		if ($uri==NULL){
			$arr_url = array(
					'controller' => 'welcome',
					'action' => 'index'
			);

			$arr_url['controller'] = $_AppPathArr[0];
			if ($_AppPathArr_Count>1)
				$arr_url['action'] = $_AppPathArr[1];
			else
				$arr_url['action']='index';

		}
		else
		{
			$arr_url= $uri;
		}


		return 	$arr_url;
	}
}

class RouteFactory{
	public static function intance(){
		return new Route();
	}
}

?>