<?php defined('SYSPATH') or die('No direct script access.');

require MODPATH.'admin.captcha'.EXT;
//$captcha= SimpleCaptcha::instance()->CreateImage();

$captchacalss=new ValidateCode();
$captchacalss->doimg();
session_start();
$_SESSION['captcha']=$captchacalss->getCode();
