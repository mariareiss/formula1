<?php
require_once("util-db.php");
require_once("model-team-builder.php");

$pageTitle = "Build your Team";
include "view-header.php";
$teambuilder = selectTeamBuilder($_GET['id']);
include "view-team-builder.php";
include "view-footer.php";
?>
