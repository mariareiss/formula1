<?php
function selectStandings() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT season, points, wins, podiums FROM `Standing`");
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
