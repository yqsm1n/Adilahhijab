<?php 
include '../connect.php';
//เก็บข้อมูล
$type_id =$_POST['type_id'];
$type_name = $_POST['type_name'];
$query = "UPDATE product_type SET type_name = '$type_name' WHERE type_id = '$type_id'";
if(mysqli_query($conn,$query) === TRUE){
    die(header('location: show_category.php'));
}else{
    echo'การแก้ไขข้อมูลผิดพลาด';
    mysqli_close($conn);
}
?>