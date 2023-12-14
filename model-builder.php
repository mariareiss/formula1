<?php
function selectBuilder() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT driver_b_name, team_b_name, team_principal_name, team_b_season FROM `Builder`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertBuilder($dbn, $dbt, $dbp, $dbs) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Builder` (driver_b_name, team_b_name, team_principal_name, team_b_season) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $dbn, $dbt, $dbp, $dbs);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateBuilder($dbn, $dbt, $dbp, $dbs, $dbi) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Builder` SET `driver_b_name` = ? , `team_b_name` = ?, `team_principal_name` = ?, `team_b_season` = ? WHERE `team_builder_id` = ?;");
        $stmt->bind_param("ssssi", $dbn, $dbt, $dbp, $dbs, $dbi);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteBuilder($dbi) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Builder` WHERE team_builder_id = ?");
        $stmt->bind_param("i", $dbi);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
