<?php 
include '../connect.php';

// รับข้อมูลจากฟอร์ม
$product_size = $_POST['product_size'];
$product_color = $_POST['product_color'];


// SQL เพื่อบันทึกข้อมูล
$sql = "INSERT INTO product(product_size,)
        VALUES ('$type_id','$product_name','$product_detail','$product_color','$cost_price','$product_price','$new_image_name','$new_image_name2','$new_image_name3','$size_s','$size_m','$size_l','$size_xl')";

$sql2 = "INSERT INTO product_stock(date_stock,type_id,product_id,product_name,product_detail,product_color,size_s,size_m,size_l,size_xl)
        VALUES ('$date_stock','$type_id','$product_id','$product_name','$product_detail','$product_color','$size_s','$size_m','$size_l','$size_xl')";

$_result = mysqli_multi_query($conn, "$sql; $sql2");
if($_result){
    echo "<script>alert('บันทึกข้อมูลสินค้าเรียบร้อย');</script>";
    echo "<script>window.location='show_product.php';</script>";
} else {
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลสินค้าได้');</script>";
    echo "<script>window.location='form_insert.php';</script>";
}

// ปิดการเชื่อมต่อ
mysqli_close($conn);

?>
