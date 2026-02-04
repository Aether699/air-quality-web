<?php
header('Content-Type: application/json; charset=utf-8');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airquality";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode(["status" => "ERROR", "message" => "Kết nối thất bại: " . $conn->connect_error]);
    exit;
}

if (isset($_POST['json'])) {
    $json = $_POST['json'];
    $data = json_decode($json, true);

    $value = $data['value'] ?? null;
    $quality = $data['quality'] ?? null;

    $sql = "INSERT INTO records (value, quality) VALUES ('$value', '$quality')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "OK", "message" => "Đã ghi dữ liệu"]);
    } else {
        echo json_encode(["status" => "ERROR", "message" => $conn->error]);
    }
} else {
    echo json_encode(["status" => "ERROR", "message" => "Không có dữ liệu"]);
}

$conn->close();
?>
