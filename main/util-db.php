<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'mariarei_projectuser', 'Duda19.11', 'mariarei_formula1');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
