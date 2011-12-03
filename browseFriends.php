<?php
  require_once 'core/secure.php';
  require_once MODELS.'Status.class.php';
  require_once MODELS.'Friend.class.php';

  $page = 1;
  if(isset($_GET['page'])) {
    $page = $_GET['page'];
  }

  $limitPerPage = 20;
  $friends = Friend::browseUserFriends($_GET['uid'], $page, $limitPerPage);
  $smarty->assign('friends', $friends);
  $smarty->assign('uid', $_GET['uid']);

  if(isset($_GET['init']) && $_GET['init'] == '1') {
    $friendCount = Friend::getUserFriendCount($_GET['uid']);
    $numberOfPages = ceil($friendCount/$limitPerPage);
    $pageNumbers = array();
    for($i = 1; $i <= $numberOfPages; $i++) {
        $pageNumbers[] = $i;
    }
    $smarty->assign('pageNumbers', $pageNumbers);
    $smarty->display('browseFriends.tpl');
  } else {
    $smarty->display('friendList.tpl');
  }
?>
