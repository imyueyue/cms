<?php
defined ( 'SYSPATH' ) or die ( 'No direct script access.' );

require SMARTY . 'Smarty.class' . EXT;

require MODPATH . 'admin.news' . EXT;

$smarty = new Smarty ();

$template_dir = TEMPLATES . 'templates' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'news';

$smarty->assign(AdminNewsFactory::intance()->getheader());


$smarty->assign ( AdminNewsFactory::intance ()->getData ( 'add',array('act'=>'add') ) );

$smarty->assign ( array (
		'caption' => '增加新闻' 
) );

$smarty->assign ( array (
		'links' => array (
				'../../media/kindeditor/themes/default/default.css',
				'../../media/kindeditor/plugins/code/prettify.css' 
		),
		'scripts' => array (
				'../../media/js/kindeditor-min.js',
				'../../media/kindeditor/lang/zh_CN.js',
				'../../media/kindeditor/plugins/code/prettify.js' 
		) 
) );

$htmlData = '';
if (! empty ( $_POST ['content'] )) {
	if (get_magic_quotes_gpc ()) {
		$htmlData = stripslashes ( $_POST ['content'] );
	} else {
		$htmlData = $_POST ['content'];
	}
}

$htmlData = htmlspecialchars ( $htmlData );

$smarty->assign(array('htmlData'=>$htmlData));

$smarty->template_dir = $template_dir;

$smarty->display ( 'add.tpl' );

if ($_POST) {
	
	$data = array (
			'title' => $_POST ['title'],
			'subtitle' => $_POST ['subtitle'],
			'content' => $_POST ['content'] 
	);
	
	AdminNewsFactory::intance ()->setData ( $data );
	
	//@header ( "Location: ../../admin/news/msgs?msg=ok" );
	echo "<script>self.location.href='../../admin/news/msgs?msg=ok';</script>";
}

?>