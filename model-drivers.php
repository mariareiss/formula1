<?php
function selectDrivers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT driver_id, driver_name, driver_nationality, driver_age FROM `Drivers`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertDrivers($dName, $dNationality, $dAge) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Drivers` (`driver_name`, `driver_nationality`, `driver_age`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $dName, $dNationality, $dAge);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateDrivers($dName, $dNationality, $dAge, $drid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Drivers` set `driver_name`= ?, `driver_nationality`= ?, `driver_age`= ? where driver_id = ?");
        $stmt->bind_param("sssi", $dName, $dNationality, $dAge, $drid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteDrivers($drid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `Drivers` where driver_id=?");
        $stmt->bind_param("i", $drid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
