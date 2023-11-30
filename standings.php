<?php
require_once("util-db.php");
require_once("model-standings.php");

$pageTitle = "Standings";
include "view-header.php";
$standings = selectStandings();
include "view-standings.php";
include "view-footer.php";
?>
