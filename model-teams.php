function selectTeams($driver_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Drivers.driver_name, Teams.team_name
            FROM Drivers
            JOIN Teams ON Drivers.team_id = Teams.team_id
            WHERE Drivers.driver_id = ?");
        $stmt->bind_param("i", $driver_id); // Assuming driver_id is an integer
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

