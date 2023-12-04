<?php
function selectBuilder($bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT driver_b_name, team_b_name, team_principal_name, team_b_season FROM `Builder`");
        $stmt->bind_param();  
      $stmt->execute();
        $result = $stmt->get_result("i",$bid);
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
