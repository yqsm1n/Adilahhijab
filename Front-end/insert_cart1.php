<?php
include '../connect.php'; 
session_start();
if (isset($_SESSION['user_name'])) {
    $user_name = $_SESSION['user_name'];
}  

$dmonth = date("F");


// ดึงข้อมูลผู้ใช้จากฐานข้อมูล
$sql = "SELECT * FROM user u, WHERE user_name = '{$_SESSION["user_name"]}'";
$result = mysqli_query($conn, $sql);


$sql1 = "SELECT * FROM order_detail d,product p  WHERE d.product_id=p.product_id AND d.orderID= '" . $_SESSION["order_id"]."' ";
$result1 = mysqli_query($conn, $sql1);
while($row=mysqli_fetch_array($result1)){


