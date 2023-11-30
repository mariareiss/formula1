<?php
require_once("util-db.php");
require_once("model-results.php");

$pageTitle = "Race Results";
include "view-header.php";
$results = selectResultss();
include "view-results.php";
include "view-footer.php";
?>
