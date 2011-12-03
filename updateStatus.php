<?php
    require_once 'core/secure.php';
    require_once MODELS.'Status.class.php';

    if(isset($_POST['uid'])) {
        $message = Status::updateMessage($_POST['uid'], $_POST['message']);
        $smarty->assign('statusMessage', $message);
    }

    $smarty->display('status.tpl');
?>
