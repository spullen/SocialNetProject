<?php
  require_once '../core/secure.php';
  require_once '../core/admin.php';
  require_once MODELS . 'AdminLog.class.php';
  require_once MODELS . 'Friend.class.php';


  $adminLogs = AdminLog::getLatest();
  $userCount = User::getNumberOfUsers();
  $numOfFriends = Friend::numberOfFriendships();
  $maleUserCount = User::getNumberOfUsersByGender();
  $femaleUserCount = User::getNumberOfUsersByGender(true);
  $popularUsers = User::popularUsers();

  $maleRatio = $maleUserCount / $userCount;
  $femaleRatio = $femaleUserCount / $userCount;

  $smarty->assign('adminLogs', $adminLogs);
  $smarty->assign('userCount', $userCount);
  $smarty->assign('numOfFriends', $numOfFriends);
  $smarty->assign('maleUserCount', $maleUserCount);
  $smarty->assign('femaleUserCount', $femaleUserCount);
  $smarty->assign('maleRatio', $maleRatio);
  $smarty->assign('femaleRatio', $femaleRatio);
  $smarty->assign('popularUsers', $popularUsers);

  $smarty->display('adminIndex.tpl');
?>