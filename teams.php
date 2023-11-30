<?php
require_once("util-db.php");
require_once("model-teams.php");

$pageTitle = "Teams";
include "view-header.php";

$did = isset($_POST['did']) ? $_POST['did'] : null;
$teams = $did ? selectTeams($did) : null;

include "view-teams.php";
include "view-footer.php";
?>

