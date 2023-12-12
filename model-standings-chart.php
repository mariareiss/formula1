<?php
function selectStandings() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT d.driver_name, wins, standing_id FROM Drivers d join Results rs on d.driver_id=rs.driver_id join Standing s on rs.driver_id=s.driver_id WHERE wins >=1 ");
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
