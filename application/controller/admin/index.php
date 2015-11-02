<?php defined('SYSPATH') or die('No direct script access.');

require MODPATH.'admin'.EXT;

require SMARTY.'Smarty.class'.EXT;


$smarty=new Smarty();

session_start();

$route= RouteFactory::intance()->set('');
if (isset($route['action'])){
	if ($route['action']=='logout'){
		session_destroy();
		$home_url = '/admin';
		header('Location: '.$home_url);
	}
}

if (isset($_SESSION['user'])) {
	$template_dir = TEMPLATES.'templates'.DIRECTORY_SEPARATOR.'admin';

	$smarty->template_dir = $template_dir;

	$smarty->assign(AdminFactory::intance()->getData(''));


	$smarty->assign (array(
			'links'=>array(),
			'scripts'=>array()

	));

	$smarty->assign(array('caption'=>'后台管理平台'));

	$smarty->display('index.tpl');


}
else
{

	$error_msg= '';

	if ($_POST){

		$user_username = trim($_POST['username']);
		$user_password = trim($_POST['password']);
		if(!empty($user_username)&&!empty($user_password)){

			if (Model_Admin_Login::intance($user_username, $user_password)->login()) {
             	$_SESSION['user']=$user_username;
				$home_url = '/admin';
				header('Location: '.$home_url);
			}else{
				$error_msg = '用户名或密码错误';
			}
		}else{
			$error_msg = '用户名或密码不能为空.';
		}

	}

	$template_dir = TEMPLATES.'templates'.DIRECTORY_SEPARATOR.'admin';

	$smarty->template_dir = $template_dir;

	$smarty->assign(array('error'=>$error_msg));

	$smarty->assign(array('caption'=>'login'));

	$smarty->display('login.tpl');











}



?>