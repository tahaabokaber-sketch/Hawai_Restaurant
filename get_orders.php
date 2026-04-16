<?php
header('Content-Type: application/json');
include 'connect.php'; // تأكد أن ملف الربط سليم

$sql = "SELECT * FROM hawai_orders ORDER BY id DESC";
$result = $conn->query($sql);

$orders = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $orders[] = $row;
    }
}

echo json_encode($orders);
?>