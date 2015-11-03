<?php defined ( 'SYSPATH' ) or die ( 'No direct script access.' );

require MODPATH.'admin.interface'.EXT;

class Model_Admin implements IAdmin {

	protected $_config;

	protected $_Mod;

	public function __construct(array $conf,$mod=null) {
		$this->_config=$conf;
		$this->_Mod=$mod;
	}

	public function setData(array $data){
		$mysql = new MMysql($this->_config['db']);
		$mysql->startTrans();
		$mysql->insert('news', $data);
		$mysql->commit();
	}

	public function getheader(){
		$act='';
		return Model_Admin::getData($act);
	}

	public function getData($act,array $param=NULL){
		if (!isset($_SESSION)){
			session_start();
		}
	
		if (!isset($_SESSION['user']))
		{
		  $home_url = '/admin';
		  header('Location: '.$home_url);
		}
		
		if ($act=="msg"){
			if ($param!==null){
				if ($param['msg']=='ok')
				return '成功保存 ! ';
				
			}
		}
		else
		{
		$ary=array(
						'title'=>'CMS Admin',
						'AdminTitle'=>'后台管理',
	    			    'islogined'=>'你好：'.$_SESSION['user'].'  <a href="/admin/logout">退出</a>',
	    			    'Navs'=>array(
								array('name'=>'主页','url'=>'/'),
								array('name'=>'新闻类','url'=>'/admin/news/index'),
								array('name'=>'公告类','url'=>'/admin/notices/index')
						),

	    			'Menus'=>array(),
	    	);

	    	return $ary;
		}
	}
}

class AdminFactory {
	public static function intance() {
		return new Model_Admin($GLOBALS ['cfg'] );
	}
}

class AdminLogin extends Model_Admin_Login{};

class Model_Admin_Login {

	protected $_name;

	protected  $_pwd;

	protected $_config;

	public static function intance($user,$pwd) {
		return new Model_Admin_Login($GLOBALS ['cfg'],array('user'=>$user,'pwd'=>$pwd));
	}

	public function __construct(array $conf,array $param) {
		$this->_config=$conf;
		$this->_name =$param['user'];
		$this->_pwd=$param['pwd'];
	}

	public function isLogin(){
	   session_start();
       return isset($_SESSION['user']);

	}

	public function checkuser(){
		$mysql = new MMysql($this->_config['db']);

		$ary = $mysql->field('*')
		       ->where(array('user'=>$this->_name))
		       ->select('users');
		return count($ary);
	}

	public function login(){
		
		$mysql = new MMysql($this->_config['db']);

		
		$ary = $mysql->field('*')
		->where('user="'.$this->_name.'"')
		->select('users');
		
		
        if (count($ary)>0)
   		  return $ary[0]['pwd']==$this->_pwd;
        else
          return false;
	}

}

