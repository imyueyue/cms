<?php

defined ( 'SYSPATH' ) or die ( 'No direct script access.' );
interface ICommon {
	function getDir($dir);
}
class Common implements ICommon {
	public function __construct() {
	}
	private function searchDir($path, &$data) {
		if (is_dir ( $path )) {
			$dp = dir ( $path );
			while ( $file = $dp->read () ) {
				if ($file != '.' && $file != '..') {
					$this->searchDir ( $path . '/' . $file, $data );
					$data [] = $file;
				}
			}
			$dp->close ();
		}
	}
	public function getDir($dir) {
		$data = array ();
		$this->searchDir ( $dir, $data );
		return $data;
	}
}

/*
 * PHP 正则表达式工具类
 * 描述：进行正则表达式匹配，有常用的正则表达式以及允许用户自定义正则表达式进行匹配
 */
class regexTool {
	// 定义常用正则表达式，并用数组对的方式存储
	private $validate = array (
			'require' => '/.+/',
			'email' => '/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/',
			'url' => '/^http(s?):\/\/(?:[A-za-z0-9-]+\.)+[A-za-z]{2,4}(?:[\/\?#][\/=\?%\-&~`@[\]\':+!\.#\w]*)?$/',
			'currency' => '/^\d+(\.\d+)?$/',
			'number' => '/^\d+$/',
			'zip' => '/^\d{6}$/',
			'integer' => '/^[-\+]?\d+$/',
			'double' => '/^[-\+]?\d+(\.\d+)?$/',
			'english' => '/^[A-Za-z]+$/',
			'qq' => '/^\d{5,11}$/',
			'mobile' => '/^1(3|4|5|7|8)\d{9}$/' 
	);
	// 定义其他属性
	private $returnMatchResult = false; // 返回类型判断
	private $fixMode = null; // 修正模式
	private $matches = array (); // 存放匹配结果
	private $isMatch = false;
	
	// 构造函数，实例化后传入默认的两个参数
	public function __construct($returnMatchResult = false, $fixMode = null) {
		$this->returnMatchResult = $returnMatchResult;
		$this->fixMode = $fixMode;
	}
	
	// 判断返回结果类型，为匹配结果matches还是匹配成功与否isMatch，并调用返回方法
	private function regex($pattern, $subject) {
		if (array_key_exists ( strtolower ( $pattern ), $this->validate ))
			$pattern = $this->validate [$pattern] . $this->fixMode; // 判断后再连接上修正模式作为匹配的正则表达式
		$this->returnMatchResult ? preg_match_all ( $pattern, $subject, $this->matches ) : $this->isMatch = preg_match ( $pattern, $subject ) === 1;
		return $this->getRegexResult ();
	}
	
	// 返回方法
	private function getRegexResult() {
		if ($this->returnMatchResult) {
			return $this->matches;
		} else {
			return $this->isMatch;
		}
	}
	
	// 允许用户自定义切换返回类型
	public function toggleReturnType($bool = null) {
		if (empty ( $bool )) {
			$this->returnMatchResult = ! $this->returnMatchResult;
		} else {
			$this->returnMatchResult = is_bool ( $bool ) ? $bool : ( bool ) $bool;
		}
	}
	
	// 下面则是数据验证方法
	public function setFixMode($fixMode) {
		$this->fixMode = $fixMode;
	}
	public function noEmpty($str) {
		return $this->regex ( 'require', $str );
	}
	public function isEmail($email) {
		return $this->regex ( 'email', $email );
	}
	public function isMobile($mobile) {
		return $this->regex ( 'mobile', $mobile );
	}
	public function check($pattern, $subject) {
		return $this->regex ( $pattern, $subject );
	}
}
class CommonFactory {
	public static function Create() {
		return new Common ();
	}
}

?>