<?php
require_once("util-db.php");
require_once("model-standings-chart.php");

$pageTitle = "Standings Chart";
include "view-header.php";
$standings = selectStandings();
include "view-standings-chart.php";
include "view-footer.php";
?>
