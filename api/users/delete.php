<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numStat = $_POST['numStat'];
print_r($_POST);

sql_delete('STATUT', "numStat = $numStat");

header('Location: ../../views/backend/status/list.php');


