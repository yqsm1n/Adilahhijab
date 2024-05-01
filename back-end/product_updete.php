<?php
include '../connect.php';
//เก็บข้อมูล
$type_id = $_POST['type_id'];
$size_id = $_POST['size_id'];
$product_name = $_POST['product_name'];
$product_detail = $_POST['product_detail'];
$product_color = $_POST['product_color'];
$cost_price = $_POST['cost_price'];
$product_price = $_POST['product_price'];
$product_img = $_post['product_img'];
$product_img2 = $_post['product_img2'];
$product_img3 = $_post['product_img3'];
$size_s = $_POST['size_s'];
$size_m = $_POST['size_m'];
$size_L = $_POST['size_L'];
$size_XL = $_POST['size_XL'];
$over_size = $_POST['over_size'];
$query = "UPDATE product SET product_name = '$product_name',type_id='$type_id',size_id='$size_id',product_detail='$product_detail',product_color='$product_color',product_price='$product_price',product_img='product_img',product_amount='$product_amount' WHERE product_id='$product_id'";

if(mysqli_query($conn,$query) === TRUE){
    die(header('location: product_show.php'));
}else{
    echo'การแก้ไขข้อมูลผิดพลาด';
}
// ปิดการเชื่อมต่อ
mysqli_close($conn);

?> 