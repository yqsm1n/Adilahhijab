<?php
$servername = "localhost"; // เปลี่ยนเป็นชื่อเซิร์ฟเวอร์ของคุณ
$username = "root"; // เปลี่ยนเป็นชื่อผู้ใช้ของคุณ
$password = ""; // เปลี่ยนเป็นรหัสผ่านใหม่ของคุณ
$dbname = "Adilahhijab"; // เปลี่ยนเป็นชื่อฐานข้อมูลของคุณ

// สร้างการเชื่อมต่อ
$conn = mysqli_connect($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>
