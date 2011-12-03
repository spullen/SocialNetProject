<?php
	require_once 'const.php';
	require_once CONFIG;
	require_once DATABASE;
	require_once SESSION;
	require_once VIEWS;
  require_once FUNCS;
	
	//require_once MODELS . 'AbstractModel.php';

	$user = null;
	if(isset($_SESSION['user_id'])) {
		require_once MODELS . 'User.class.php'; 
		$user = new User($_SESSION['user_id']);
		$smarty->assign('user', $user);
	}

  // log administrative data
  logRequest();

	$requestMethod = $_SERVER['REQUEST_METHOD'];
?>
