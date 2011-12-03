<?php
    require_once 'core/secure.php';
    require_once MODELS . 'User.class.php';

    $page = 1;
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    }

	list($users, $numberOfPages) = User::searchUsers($_GET, $page);
    $smarty->assign('users', $users);

    $queryString = $_SERVER['QUERY_STRING'];

    $pages = array();
    for($i = 1; $i < $numberOfPages; $i++) {
        $pages[] = '<a href="sresults.php?page=' . $i . '&' . $queryString . '">' . $i . '</a>&nbsp;';
    }
    $smarty->assign('pages', implode(' ', $pages));

	$smarty->display('sresult.tpl');
?>