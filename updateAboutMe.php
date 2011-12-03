<?php
    require_once 'core/secure.php';

    if(isset($_POST['uid'])) {
        User::updateUser($_POST);
        $profile = new User($_POST['uid']);
        $smarty->assign('profile', $profile);
    }

    $smarty->display('aboutMe.tpl');
?>
