<?php defined('SYSPATH') or die('No direct script access.');

require MODPATH.'admin'.EXT;

class Model_Admin_Template extends Model_Admin {

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
		return parent::getheader();
	}

	public function getData($act,array $param=NULL){
	   if ($act=='list'){
			$mysql = new MMysql($this->_config['db']);
			$ary = $mysql->field('*')
			->order('addtime desc')
			->limit(1,10)
			->select('news');

			return $ary;

		}
        else
			if ($act=='index')
			{
				$active= $param['act'];

				$ary=array(
						'Menus'=>array(
										array('active'=>$active=='list','url'=>'/admin/templates/list','name'=>'模版列表'),
										array('active'=>$active=='add','url'=>'/admin/templates/add','name'=>'添加模版'),

						)
				);
				return $ary;
			}



	}

}


class AdminTemplateFactory{
	public static function intance(){
		return new Model_Admin_Template($GLOBALS['cfg']);
	}
}