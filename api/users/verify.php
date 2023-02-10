<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

if (sql_select("MEMBRE", "pseudoMemb", "pseudoMemb = $pseudoMemb")[0]['pseudoMemb'] == null) {
    print_r("Erreur");
}






header('Location: ../../views/backend/members/list.php');