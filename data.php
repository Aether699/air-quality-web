<?php
$conn = new mysqli("localhost", "root", "", "airquality");
$result = $conn->query("SELECT * FROM records ORDER BY id DESC LIMIT 1");

if ($row = $result->fetch_assoc()) {
    echo json_encode($row);
} else {
    echo json_encode(["value" => null, "quality" => "UNKNOWN", "timestamp" => null]);
}
?>
