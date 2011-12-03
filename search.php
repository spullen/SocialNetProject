<?php
    require_once 'core/secure.php';

		require_once MODELS . 'User.class.php';
		$smarty->assign('name', $_GET['name']);
		$smarty->assign('email', $_GET['email']);
		$smarty->assign('gender', $_GET['gender']);
		$smarty->assign('hometown', $_GET['hometown']);

        $smarty->assign('interests', $_GET['interests']);
		$smarty->assign('music', $_GET['music']);
        $smarty->assign('tv', $_GET['tv']);
        $smarty->assign('movies', $_GET['movies']);
        $smarty->assign('books', $_GET['books']);
        
        $smarty->display('search.tpl');
?>