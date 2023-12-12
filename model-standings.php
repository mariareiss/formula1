<?php
function selectStandings() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT standing_id, d.driver_name, season, points, wins, podiums
FROM Drivers d join Results rs on d.driver_id=rs.driver_id join Standing s on rs.driver_id=s.driver_id");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertStandings($dName, $sSeason, $sPoints, $sWins, $sPodiums) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Standing`(`driver_id`, `driver_name`, `season`, `points`, `wins`, `podiums`) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $dName, $sSeason, $sPoints, $sWins, $sPodiums);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateStandings($sSeason, $sPoints, $sWins, $sPodiums, $ssid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Standings` set `season`= ?, `points`= ?, `wins`= ?, `podiums`=? where standing_id = ?");
        $stmt->bind_param("ssssi", $sSeason, $sPoints, $sWins, $sPodiums, $ssid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteStandings($stid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `Standings` where standing_id=?");
        $stmt->bind_param("i", $ssid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
?>
