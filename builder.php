<?php
require_once("util-db.php");
require_once("model-builder.php");

$pageTitle = "Team Builder";
include "view-header.php";
$builders = selectBuilders();
include "view-builder.php";
include "view-footer.php";
?>
