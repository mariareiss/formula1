<?php
require_once("util-db.php");
require_once("model-drivers.php");

$pageTitle="Drivers";
include "view-header.php";
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']){
    case "Add":
    if (insertDrivers($_POST['dName'], $_POST['dNationality'], $_POST['dAge'])){
      echo '<div class="alert alert-success" role="alert">Driver added.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
    case "Edit":
    if (updateDrivers($_POST['dName'], $_POST['dNationality'], $_POST['dAge'], $_POST['drid'])){
      echo '<div class="alert alert-success" role="alert">Driver edited.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
    case "Delete":
    if (deleteDrivers($_POST['drid'])){
      echo '<div class="alert alert-success" role="alert">Driver deleted.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
  }
}
$drivers = selectDrivers();
include "view-drivers.php";
include "view-footer.php";
?>
