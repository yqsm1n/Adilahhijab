<?php 
// เชื่อมต่อฐานข้อมูล
include '../connect.php';

// รับค่า product_id ที่ต้องการลบ
$type_id = $_GET['type_id'];

// คำสั่ง SQL สำหรับลบข้อมูล
$sql= "DELETE FROM product_type WHERE type_id = $type_id ";
if(mysqli_query($conn,$sql)){
    echo"<script>alert('ลบสินค้าเรียบร้อยแล้ว');</script>";
    echo"<script>window.location='category_show.php';</script>";
}else{
    echo "Error :" . $sql."<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบสินค้าได้')</script>";

}

mysqli_close($conn);
?>

