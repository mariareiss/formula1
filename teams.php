<?php
require_once("util-db.php");
require_once("model-teams.php");

$pageTitle = "Teams";
include "view-header.php";
$teams = selectTeams($_GET['did']);
include "view-teams.php";
include "view-footer.php";
?>

