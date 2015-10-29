<?php defined('SYSPATH') or die('No direct script access.');

interface IReport{
	function getData($sku,$lotid);
}


class Model_Report implements IReport {

	protected $_config;

	public function __construct(array $conf) {
		$this->_config=$conf;
	}

	public function getData($sku,$lotid){
		$mysql = new MMysql($this->_config['db']);

		if (!empty($sku))
		 $where='(spname like "%'.$sku.'%" or spcode like "%'.$sku.'%")';
		else
		 return null;

		if (!empty($lotid))
		  $where= $where.' and lotid="'.$lotid.'"';

		$isExists= $mysql->field('*')
		->where($where)
		->select('yy_reports');

		return $isExists;

	}

}


class ReportFactory{
	public static function intance(){
		return new Model_Report($GLOBALS['cfg']);
	}
}