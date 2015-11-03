<?php defined('SYSPATH') or die('No direct script access.');

require MODPATH.'admin.captcha'.EXT;
$captcha= SimpleCaptcha::instance()->CreateImage();
