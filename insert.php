<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airquality";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Kết nối thất bại: " . $conn->connect_error);
}

if(isset($_POST['json'])){
    $json = $_POST['json'];
    $data = json_decode($json, true);

    $value = $data['value'];
    $quality = $data['quality'];

    $sql = "INSERT INTO records (value, quality) VALUES ('$value', '$quality')";
    if ($conn->query($sql) === TRUE) {
        echo "OK";
    } else {
        echo "Lỗi: " . $conn->error;
    }
} else {
    echo "Không có dữ liệu";
}

$conn->close();
?>
