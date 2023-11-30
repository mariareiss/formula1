<?php
require_once("util-db.php");
require_once("model-teams.php");

$pageTitle = "Teams";
include "view-header.php";
$teams = selectTeams($_POST['did']);
include "view-teams.php";
include "view-footer.php";
?>

