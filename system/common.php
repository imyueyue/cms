<?php  defined('SYSPATH') or die('No direct script access.');

interface ICommon{
	function getDir($dir);
}

class Common implements ICommon {

	public function __construct(){
	}

	private function searchDir($path,&$data){
		if(is_dir($path)){
			$dp=dir($path);
			while($file=$dp->read()){
				if($file!='.'&& $file!='..'){
					$this->searchDir($path.'/'.$file,$data);
					$data[]=$file;
				}
			}
			$dp->close();
		}
	}

	public function getDir($dir){
		$data=array();
		$this->searchDir($dir,$data);
		return   $data;
	}
}


class CommonFactory{
	public static function Create(){
		return new Common();
	}
}

?>