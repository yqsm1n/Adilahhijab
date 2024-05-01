<?php 
include '../connect.php';

// รับข้อมูลจากฟอร์ม
$type_id = $_POST['type_id'];

// SQL เพื่อบันทึกข้อมูล
$sql = "INSERT INTO order_size(type_id,product_name,product_detail,product_color,cost_price, product_price,product_img,product_img2,product_img3,size_s,size_m,size_l,size_xl)
        VALUES ('$type_id',)";