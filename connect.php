<?php
$host = "localhost";
$user = "admin@hwai.com"; // غيره لليوزر بتاع InfinityFree لو هترفع
$pass = "123456*";     // الباسورد بتاعك
$db   = "hawai_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
// لضمان دعم اللغة العربية
$conn->set_charset("utf8"); 
?>