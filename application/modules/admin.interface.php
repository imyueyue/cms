<?php defined ( 'SYSPATH' ) or die ( 'No direct script access.' );

interface IAdmin {
	function setData(array $data);
	function getData($param);
}

?>