<?php
    
	if(!$user->isAdmin) {
		$_SESSION['message'] = 'You are not allowed to view this page';
		header('location: ../index.php');
	}
?>