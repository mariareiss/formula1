<?php
require_once("util-db.php");
require_once("model-teams.php");

$pageTitle = "Teams";
include "view-header.php";
$team = isset($_POST['did'])? selectTeams($_POST['did']):null;
include "view-teams.php";
include "view-footer.php";
?>
