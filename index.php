<?php
    require_once 'core/core.php';
    require_once MODELS . 'User.class.php';
    require_once MODELS . 'Status.class.php';
    require_once MODELS . 'Friend.class.php';

    if($user) {
        // get statuses from friends
        $statuses = Status::getFriendStatuses($user->id);
        $smarty->assign('statuses', $statuses);
    }

    $smarty->display('index.tpl');
?>
