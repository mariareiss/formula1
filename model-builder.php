<?php
function selectBuilder() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT driver_b_name, team_b_name, team_principal_name, team_b_season FROM `Builder` ");
        $stmt->bind_param();  
      $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
