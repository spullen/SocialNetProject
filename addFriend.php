<?php
    require_once 'core/core.php';
    require_once MODELS . 'User.class.php';
    require_once MODELS . 'Friend.class.php';

    if(Friend::createFriendship($_POST['uid'], $_POST['nfid'])) {
        echo '<span id="insertedMessage">Successfully Created Friendship</span>';
    }
    else {
        echo '<span id="insertedMessage">Could Not Create Friendship (Error)</span>';
    }
?>
