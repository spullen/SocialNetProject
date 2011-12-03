<?php
    require_once 'core.php';
	
	if($user == null){
		// not logged in
		$_SESSION['message'] = 'You have to log in to view this page';
		if($pathAppend)
			$location = '../accounts/login.php';
		else
			$location = 'accounts/login.php';
		header('location: ' . $location);
	}
?>