<?php
    require_once 'core/secure.php';
	
	if(isset($_GET['uid']) && ($_GET['uid'] == $user->id)) {
		// get all of the user's profile pictures
		require_once MODELS . 'ProfilePicture.class.php';
		$pictures = ProfilePicture::getUserPictures($user->id);
		$smarty->assign('pictures', $pictures);
	}
	else {
		$_SESSION['message'] = 'You are not authorized to view this page';
		header('location: index.php');
	}
	
	$smarty->display('picture.tpl');
?>