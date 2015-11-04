<?php defined('SYSPATH') or die('No direct script access.');

require SYSPATH.'common'.EXT;
require SYSPATH.'Mysql.class'.EXT;

$configs= $GLOBALS['cfg'];

class Append {

	protected $_config;

	public function __construct(array $conf) {
		$this->_config=$conf;
	}

	private function setData($json){
		$mysql = new MMysql($this->_config['db']);
		$_ary= json_decode($json);

		$isExists= $mysql->field('count(1) as ct')
		->where(array(
				'sku'=>'"'.$_ary->sku.'"',
				'lotid'=>array('"'.$_ary->lotid.'"','=','and'),
				'supplyid'=>array('"'.$_ary->supplyid.'"','=','and')
		)
		)
		->select('yy_reports');

		if ((int)$isExists[0]['ct']==0)
		{
			$data=array(
					'sku'=>$_ary->sku,
					'lotid'=>$_ary->lotid,
					'spec'=>$_ary->spec,
					'cdname'=>$_ary->cdname,
					'cdcode'=>$_ary->cdcode,
					'supplyid'=>$_ary->supplyid,
					'spname'=>$_ary->spname,
					'spcode'=>$_ary->spcode,
					'picpath'=>$_ary->picpath
					);
			$mysql->insert('yy_reports', $data);
			return true;
		}
		return false;
	}


	public function appendDataToMySql($ary){
		foreach($ary as $s){
			$filename =$s;
			$file_extension=end((explode('.', $filename)));
			if ($file_extension == 'json'){
				$filename =$this->_config['report']['jsonpath'].'/'.$filename;

				$json_string = file_get_contents($filename);

				//Mysql
				if ($this->setData($json_string)) {
				  //echo $this->_config['msgs.success'];

				  copy($filename,  $this->_config['report']['bak'].$s);
				  unlink($filename);
				}
				else
				{
					//
				}
			}
		}
	}

}

$ary= CommonFactory::Create()->getDir($configs['report']['jsonpath']);

$append=new Append($configs);
$append->appendDataToMySql($ary);



?>