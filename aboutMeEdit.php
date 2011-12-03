<?php
    require_once 'core/secure.php';

    if(isset($_POST['uid'])) {
        $profile = new User($_POST['uid']);
        $smarty->assign('profile', $profile);
    }

    $smarty->display('aboutMeEdit.tpl');
?>
