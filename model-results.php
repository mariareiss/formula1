<?php
function selectResults() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT position, points_earned FROM `Results`");
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
