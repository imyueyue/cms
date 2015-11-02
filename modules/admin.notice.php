<?php

defined ( 'SYSPATH' ) or die ( 'No direct script access.' );

require MODPATH.'admin'.EXT;

class Model_Admin_Notice extends Model_Admin {
	protected $_config;
	protected $_Mod;
	public function __construct(array $conf, $mod = null) {
		$this->_config = $conf;
		$this->_Mod = $mod;
	}
	
	public function setData(array $data) {
		$mysql = new MMysql ( $this->_config ['db'] );
		$mysql->startTrans ();
		$mysql->insert ( 'notices', $data );
		$mysql->commit ();
	}
	
	public function getheader() {
		return parent::getheader ();
	}
	
	public function getData($act, array $param = NULL) {
		$ary = array (
				'Menus' => array (
						array (
								'active' => $active == 'list',
								'url' => '/admin/notice/list',
								'name' => '公告列表' 
						),
						array (
								'active' => $active == 'add',
								'url' => '/admin/notice/add',
								'name' => '添加公告' 
						) 
				) 
		);
		return $ary;
	}
}
class AdminNoticeFactory {
	public static function intance() {
		return new Model_Admin ( $GLOBALS ['cfg'] );
	}
}