<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$libTitrArt= $_POST['libTitrArt'];

$libChapoArt= $_POST['libChapoArt'];

$libAccrochArt= $_POST['libAccrochArt'];

$parag1Art= $_POST['parag1Art'];

$libSsTitr1Art= $_POST['libSsTitr1Art'];

$parag2Art= $_POST['parag2Art'];

$libSsTitr2Art= $_POST['libSsTitr2Art'];

$parag3Art= $_POST['parag3Art'];

$libConclArt= $_POST['libConclArt'];

$urlPhotArt= $_POST['urlPhotArt'];

$numThem= $_POST['numThem'];

print_r($_POST);

sql_delete('STATUT', "numStat = $numStat");

header('Location: ../../views/backend/articles/list.php');


