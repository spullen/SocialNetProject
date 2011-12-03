<?php
    require_once '../core/core.php';
	
	$_SESSION['user_id'] = null;
	session_unregister('user_id');
	$_SESSION['message'] = 'Successfully Logged Out';
	header('location: ../index.php');
?>