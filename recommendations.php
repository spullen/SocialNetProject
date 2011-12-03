<?php
    require_once 'core/secure.php';
    require_once MODELS.'Status.class.php';
    require_once MODELS.'Friend.class.php';

    // get friend recommendations (limit 10)
    $recommendations = Friend::getRecommendations($user->id, 15);
    $smarty->assign('recommendations', $recommendations);

    $smarty->display('friendRecommendations.tpl')
?>
