<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numMemb = $_POST['numMemb'];
print_r($_POST);

sql_delete('MEMBRE', "numMemb = $numMemb");

header('Location: ../../views/backend/members/list.php');


