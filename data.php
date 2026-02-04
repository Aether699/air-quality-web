<?php
header('Content-Type: application/json; charset=utf-8');

$conn = new mysqli("localhost", "root", "", "airquality");
if ($conn->connect_error) {
    echo json_encode(["status" => "ERROR", "message" => "Kết nối thất bại: " . $conn->connect_error]);
    exit;
}

$result = $conn->query("SELECT * FROM records ORDER BY id DESC LIMIT 1");

if ($row = $result->fetch_assoc()) {
    echo json_encode([
        "value" => $row['value'],
        "quality" => $row['quality'],
        "timestamp" => $row['timestamp'] ?? null,
        "status" => "OK"
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
} else {
    echo json_encode([
        "value" => null,
        "quality" => "UNKNOWN",
        "timestamp" => null,
        "status" => "EMPTY"
    ]);
}

$conn->close();
?>
