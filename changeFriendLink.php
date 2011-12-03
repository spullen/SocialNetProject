<?php
require_once 'core/core.php';


$type = $_POST['type'];

$smarty->assign('uid', $_POST['uid']);
$smarty->assign('fid', $_POST['fid']);

if($type == 'friend') {
    $smarty->display('addFriendLink.tpl');
}
else {
    $smarty->display('removeFriendLink.tpl');
}

?>
