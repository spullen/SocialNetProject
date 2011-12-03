<?php
	// do some session loading stuff
	session_start();
	
	if(session_is_registered('message')) {
		$message = $_SESSION['message'];
		$_SESSION['message'];
		session_unregister('message');
	}
?>