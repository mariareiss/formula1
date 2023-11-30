<?php
function selectTeams($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare
("SELECT Drivers.driver_name, Teams.team_name, Teams.team_id, Teams.team_principal
FROM Drivers
JOIN Teams ON Drivers.team_id = Teams.team_id
WHERE Drivers.driver_id = ?; -- Replace 1 with the actual driver_id you are looking for");
        $stmt->bind_param("d", $did);
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
