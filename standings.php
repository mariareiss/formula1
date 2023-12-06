<?php
require_once("util-db.php");
require_once("model-standings.php");

$pageTitle = "Standings";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']){
    case "Add":
    if (insertStandings($_POST['sSeason'], $_POST['sPoints'], $_POST['sWins'], $_POST['sPodiums'])){
      echo '<div class="alert alert-success" role="alert">Standing added.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
    case "Edit":
    if (updateStandings($_POST['sSeason'], $_POST['sPoints'], $_POST['sWins'], $_POST['sPodiums'], $_POST['ssid'])){
      echo '<div class="alert alert-success" role="alert">Standing edited.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
    case "Delete":
    if (deleteStandings($_POST['ssid'])){
      echo '<div class="alert alert-success" role="alert">Standing deleted.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
  }
}

$standings = selectStandings();
include "view-standings.php";
include "view-footer.php";
?>
