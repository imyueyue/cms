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
		return $this->getData($act);
	}

	public function getData($act,array $param=NULL){
	    	$ary=array(
						'title'=>'CMS Admin',
						'AdminTitle'=>'后台管理',
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


class AdminFactory {
	public static function intance() {
		return new Model_Admin( $GLOBALS ['cfg'] );
	}
}