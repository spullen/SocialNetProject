<?php
  require_once '../core/core.php';

	if($requestMethod == 'POST') {
		require_once MODELS . 'User.class.php';
		
		$smarty->assign('email', $_POST['email']);
		
		$id = User::authenticate($_POST['email'], $_POST['password']);
		
		if($id) {
			$_SESSION['user_id'] = $id;
			$_SESSION['message'] = 'Successfully Logged In';
			header('location: ../index.php');
		}
		else {
			$errors = array('Email/Password Mismatch');
			$smarty->assign('errors', $errors);
		}
	}
	
	$smarty->display('login.tpl');
?>