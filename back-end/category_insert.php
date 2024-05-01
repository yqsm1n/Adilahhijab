<?php
include '../connect.php';

//รับข้อมูลจากฟอร์ม
$type_name = $_POST['type_name'];

//บันทึกลงในฐานข้อมูล
$sql = "INSERT INTO product_type (type_name)
        VALUES ('$type_name')";
$_result = mysqli_query($conn , $sql);
if($_result){
    echo "<script>alert('บันทึกประเภทสินค้าเรียบร้อย');</script>";
    echo "<script>window.location='category_show.php';</script>";
} else {
    echo "<script>alert('ไม่สามารถบันทึกประเภทสินค้าได้');</script>";
    echo "<script>window.location='category_form_insert.php';</script>";
}

//ปิดการเชื่อต่อ
mysqli_close($conn);
?>