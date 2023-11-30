<?php
require_once("util-db.php");
require_once("model-team-of-driver.php");

$pageTitle = "Current Team of Driver";
include "view-header.php";
$teams = selectTeamOfDriver($_GET['id']);
include "view-team-of-driver.php";
include "view-footer.php";
?>
