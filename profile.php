<?php
  require_once 'core/secure.php';
  require_once MODELS.'Message.class.php';
  require_once MODELS.'Status.class.php';
  require_once MODELS.'Friend.class.php';
	
	if(isset($_GET['uid'])) {
		// get profile
    $profile = new User($_GET['uid']);

    // if the email doesn't exist then this is the indication that the user doesn't exist
    // the query actually just sets everything as null, and the profile user does exist
    if($profile->email != null) {
        $smarty->assign('profile', $profile);

        $canFriend = false;
        if($profile->id != $user->id) {
            $canFriend = Friend::friendable($user->id, $profile->id);
        }
        $smarty->assign('canFriend', $canFriend);

        // get friends
        $friends = Friend::getUserFriends($_GET['uid']);
        if($friends != null && count($friends) > 0) {
            $smarty->assign('friends', $friends);
        }
        else {
            $smarty->assign('friends', array());
        }
        

        // get wall posts
        $wallPosts = Message::messageLoad($user->id);
        $smarty->assign('wallPosts', $wallPosts);
        
        // get message
        if($status = Status::getLatestMessage($_GET['uid'])) {
            $smarty->assign('statusMessage', $status->message);
        }
        else {
            $smarty->assign('statusMessage', null);
        }
    }
    else {
        $_SESSION['message'] = 'User does not exist';
        header('location: index.php');
    }
	}
	else {
		$_SESSION['message'] = 'Invalid Profile';
		header('location: index.php');
	}
	
	$smarty->display('profile.tpl');
?>