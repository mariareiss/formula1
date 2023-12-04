<?php
require_once("util-db.php");
require_once("model-builder.php");

$pageTitle = "Team Builder";
include "view-header.php";
$builders = selectBuilder($_GET['team_builder_id']);
include "view-builder.php";
include "view-footer.php";
?>
