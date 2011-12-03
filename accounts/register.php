<?php
    require_once '../core/core.php';
	
	if($requestMethod == 'POST') {
		require_once MODELS . 'User.class.php';
		
		$smarty->assign('name', $_POST['name']);
		$smarty->assign('email', $_POST['email']);
		$smarty->assign('gender', $_POST['gender']);
		$smarty->assign('birthdate_mo', $_POST['birthdate_mo']);
		$smarty->assign('birthdate_day', $_POST['birthdate_day']);
		$smarty->assign('birthdate_yr', $_POST['birthdate_yr']);
		$smarty->assign('hometown', $_POST['hometown']);
		
		$errors = User::createUser($_POST);
		
		if(is_array($errors) && count($errors) > 0) {
			$smarty->assign('errors', $errors);
		}
		else {
			$_SESSION['message'] = 'Successfully Registered, please login';
			header("location: ../index.php");
		}
	}
	
	$smarty->display('register.tpl');
?>