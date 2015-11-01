<?php defined('SYSPATH') or die('No direct script access.');

require MODPATH.'admin'.EXT;


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

	public function getData($act,array $param=NULL){
	    if ($act=="msg"){
	      if ($param!==null){
	      	if ($param['msg']=='ok')
	      	return '成功保存 ! '; 
	      }
	    }
		else
		if ($act=='list'){
			$mysql = new MMysql($this->_config['db']);
			$ary = $mysql->field('*')
			->order('addtime desc')
			->limit(1,10)
			->select('news');
           
			return $ary;

		}
        else	
			if ($act=='news')
			{
				$active= $param['act'];
				
				$ary=array(
						'title'=>'CMS Admin',
						'AdminTitle'=>'后台管理',
						'Navs'=>array(
								array('name'=>'主页','url'=>'/'),
								array('name'=>'新闻类','url'=>'/admin/news/index'),
								array('name'=>'公告类','url'=>'/admin/notices/index')
						),
						'Menus'=>array(
								'News'=>array(
										array('active'=>$active=='list','url'=>'/admin/news/list','name'=>'新闻列表'),
										array('active'=>$active=='add','url'=>'/admin/news/add','name'=>'添加新闻'),
										array('active'=>false,'url'=>'#','name'=>'删除新闻'),
										array('active'=>false,'url'=>'#','name'=>'编辑新闻'),

								),
						)
				);
				return $ary;
			}



	}

}


class AdminNewsFactory{
	public static function intance(){
		return new Model_Admin_News($GLOBALS['cfg']);
	}
}