<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['customer'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $type = $_POST['type'];
    $payInfo = $_POST['paymentInfo'];
    $total = $_POST['total'];
    $items = $_POST['items']; // مصفوفة الوجبات كـ String

    $sql = "INSERT INTO orders (customer_name, phone, address, order_type, payment_info, total_price, order_items) 
            VALUES ('$name', '$phone', '$address', '$type', '$payInfo', '$total', '$items')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error", "message" => $conn->error]);
    }
}
?>