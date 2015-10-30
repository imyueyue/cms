<?php defined('SYSPATH') or die('No direct script access.');

interface IAdmin{
	function setData(array $data);
	function getData($param);
}


class Model_Admin_News implements IAdmin {

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

	public function getData($param){
		if ($param=='list'){
			$mysql = new MMysql($this->_config['db']);
			$ary = $mysql->field('*')
			->limit(1,10)
			->select('news');

			return $ary;

		}
		else
			if ($param=='news')
			{
				$ary=array(
						'title'=>'CMS Admin',
						'AdminTitle'=>'后台管理',
						'Navs'=>array(
								array('name'=>'主页'),
								array('name'=>'新闻类'),
								array('name'=>'公告类')
						),
						'Menus'=>array(
								'News'=>array(
										array('active'=>true,'url'=>'/admin/news/list','name'=>'新闻列表'),
										array('active'=>false,'url'=>'/admin/news/add','name'=>'添加新闻'),
										array('active'=>false,'url'=>'#','name'=>'删除新闻'),
										array('active'=>false,'url'=>'#','name'=>'编辑新闻'),

								),
						)
				);
				return $ary;
			}



	}

}


class AdminFactory{
	public static function intance(){
		return new Model_Admin_News($GLOBALS['cfg']);
	}
}