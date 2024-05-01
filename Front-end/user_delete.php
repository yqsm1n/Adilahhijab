<?php 
// เชื่อมต่อฐานข้อมูล
include '../connect.php';

// รับค่า product_id ที่ต้องการลบ
$user_id = $_GET['user_id'];

// คำสั่ง SQL สำหรับลบข้อมูล
$sql= "DELETE FROM user WHERE user_id = $user_id ";
if(mysqli_query($conn,$sql)){
    echo"<script>alert('ลบข้อมูลผู้ใช้งานเรียบร้อย');</script>";
    echo"<script>window.location='show_user.php';</script>";
}else{
    echo "Error :" . $sql."<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลผู้ใช้งานได้')</script>";

}

mysqli_close($conn);
?>

