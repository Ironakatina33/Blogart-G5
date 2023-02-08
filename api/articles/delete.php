<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$libTitrArt= $_POST['libTitrArt'];

print_r($_POST);

sql_delete('ARTICLE', "libTitrArt = '$libTitrArt'");

header('Location: ../../views/backend/articles/list.php');


