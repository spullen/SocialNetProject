<?php
    require_once 'core/core.php';
    require_once MODELS . 'User.class.php';
    require_once MODELS . 'Friend.class.php';

    if($_POST['uid'] == $user->id) {
        if(Friend::removeFriendship($_POST['uid'], $_POST['fid'])) {
            echo '<span id="insertedMessage">Successfully Removed Friendship</span>';
        }
        else {
            echo '<span id="insertedMessage">Could Not Remove Friendship (Error)</span>';
        }
    }
    else {
        echo '<span id="insertedMessage">You can\'t do that...</span>';
    }
?>
