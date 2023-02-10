<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

if(isset($_FILES)) {
    $path = upload_image($_FILES);
    }

$numArt = sql_escape($_POST['numArt']);

$libTitrArt = sql_escape($_POST['libTitrArt']);

$libChapoArt = sql_escape($_POST['libChapoArt']);

$libAccrochArt = sql_escape($_POST['libAccrochArt']);

$parag1Art = sql_escape($_POST['parag1Art']);

$libSsTitr1Art = sql_escape($_POST['libSsTitr1Art']);

$parag2Art = sql_escape($_POST['parag2Art']);

$libSsTitr2Art = sql_escape($_POST['libSsTitr2Art']);

$parag3Art = sql_escape($_POST['parag3Art']);

$libConclArt = sql_escape($_POST['libConclArt']);

$urlPhotArt = sql_escape($path);

$numThem = sql_escape($_POST['numThem']);


sql_update('ARTICLE', "libTitrArt = '$libTitrArt', libChapoArt = '$libChapoArt', libAccrochArt = '$libAccrochArt', parag1Art = '$parag1Art', libSsTitr1Art = '$libSsTitr1Art'", "numArt ='$numArt'");

header('Location: ../../views/backend/articles/list.php');