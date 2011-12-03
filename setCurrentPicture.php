<?php
    require_once 'core/secure.php';
    require_once MODELS . 'ProfilePicture.class.php';

    ProfilePicture::setCurrentPicture($_GET['pid'], $user->id);
    $pictures = ProfilePicture::getUserPictures($user->id);
    $smarty->assign('pictures', $pictures);

    $smarty->display('pictureList.tpl');
?>
