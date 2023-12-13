<?php
require_once("util-db.php");
require_once("model-builder.php");

$pageTitle = "Team Builder";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertBuilder($_POST['driver_b_name'], $_POST['team_b_name'], $_POST['team_principal_name'], $_POST['team_b_season'])) {
                echo '<div class="alert alert-success" role="alert"> Builder Added! </div>';
            } else {
                echo '<div class="alert alert-danger" role="alert"> Error! </div>';
            }
            break;

        case "Edit":
            if (updateBuilder($_POST['driver_b_name'], $_POST['team_b_name'], $_POST['team_principal_name'], $_POST['team_b_season'], $_POST['dbi'])) {
                echo '<div class="alert alert-success" role="alert"> Builder Edited! </div>';
            } else {
                echo '<div class="alert alert-danger" role="alert"> Error! </div>';
            }
            break;

        case "Delete":
            if (deleteBuilder($_POST['dbi'])) {
                echo '<div class="alert alert-success" role="alert"> Builder Deleted! </div>';
            } else {
                echo '<div class="alert alert-danger" role="alert"> Error! </div>';
            }
            break;
    }
}

$builders = selectBuilder();
include "view-builder.php";
include "view-footer.php";
?>
