<?php
	require_once ROOT . 'libs/Smarty.class.php';
	$smarty = new Smarty();
	
	$smarty->template_dir = TEMPLATES;
	$smarty->compile_dir = TEMPLATES_C;
	
	$pathPieces = explode('/', $_SERVER['SCRIPT_FILENAME']);
	array_shift($pathPieces);
	$pathAppend = false;
	if(sizeof($pathPieces) > 4) {
		$pathAppend = true;
		$smarty->assign('pathAppend', '../');
	}
	else {
		$smarty->assign('pathAppend', '');
	}
	
	if(strlen($message)) {
		$smarty->assign('message', $message);
	}
?>