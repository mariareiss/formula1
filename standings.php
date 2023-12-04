<?php
require_once("util-db.php");
require_once("model-standings.php");

$pageTitle = "Standings";
include "view-header.php";


if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertStanding($_POST['wins'])) {
        echo '<div class="alert alert-success" role="alert"> Total Wins Updated! </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error! </div>';
      }
      break;
    case "Edit":
      if (updateStanding($_POST['wins'], $_POST['standing_id'])) {
        echo '<div class="alert alert-success" role="alert"> Wins Edited! </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error! </div>';
      }
      break;
        case "Delete":
      if (deleteStanding($_POST['standing_id'])) {
        echo '<div class="alert alert-success" role="alert"> Wins Deleted! </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error! </div>';
      }
      break;
  }
}


$standings = selectStandings();
include "view-standings.php";
include "view-footer.php";
?>
