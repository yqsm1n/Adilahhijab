<?php 
include '../connect.php';

// รับข้อมูลจากฟอร์ม
$type_id = $_POST['type_id'];
$product_name = $_POST['product_name'];
$product_detail = $_POST['product_detail'];
$product_color = $_POST['product_color'];
$product_price = $_POST['product_price'];
$cost_price = $_POST['cost_price'];
$size_s = $_POST['size_s'];
$size_m = $_POST['size_m'];
$size_l = $_POST['size_l'];
$size_xl = $_POST['size_xl'];

$date_stock = date("Y-m-d"); // กำหนดวันที่ของการเพิ่มสินค้าให้เป็นวันปัจจุบัน
$product_id = ""; // คุณสามารถกำหนดค่าให้เป็นรหัสสินค้าที่เป็นไปได้ตามที่คุณต้องการ

//อัพโหลดรูปภาพ
if (is_uploaded_file($_FILES['product_img']['tmp_name'])){
    $new_image_name = 'product_'.uniqid().".".pathinfo(basename($_FILES['product_img']['name']),PATHINFO_EXTENSION);
    $image_upload_path = ".././img/".$new_image_name;
    move_uploaded_file($_FILES['product_img']['tmp_name'],$image_upload_path);
}else{
    $new_image_name ="";
}

if (is_uploaded_file($_FILES['product_img2']['tmp_name'])){
    $new_image_name2 = 'product_'.uniqid().".".pathinfo(basename($_FILES['product_img2']['name']),PATHINFO_EXTENSION);
    $image_upload_path = ".././img/".$new_image_name2;
    move_uploaded_file($_FILES['product_img2']['tmp_name'],$image_upload_path);
}else{
    $new_image_name2 ="";
}

if (is_uploaded_file($_FILES['product_img3']['tmp_name'])){
    $new_image_name3 = 'product_'.uniqid().".".pathinfo(basename($_FILES['product_img3']['name']),PATHINFO_EXTENSION);
    $image_upload_path = ".././img/".$new_image_name3;
    move_uploaded_file($_FILES['product_img3']['tmp_name'],$image_upload_path);
}else{
    $new_image_name3 ="";
}

// SQL เพื่อบันทึกข้อมูล
$sql = "INSERT INTO product(type_id,product_name,product_detail,product_color,cost_price, product_price,product_img,product_img2,product_img3,size_s,size_m,size_l,size_xl)
        VALUES ('$type_id','$product_name','$product_detail','$product_color','$cost_price','$product_price','$new_image_name','$new_image_name2','$new_image_name3','$size_s','$size_m','$size_l','$size_xl')";

$sql2 = "INSERT INTO product_stock(date_stock,type_id,product_id,product_name,product_detail,product_color,size_s,size_m,size_l,size_xl)
        VALUES ('$date_stock','$type_id','$product_id','$product_name','$product_detail','$product_color','$size_s','$size_m','$size_l','$size_xl')";

$_result = mysqli_multi_query($conn, "$sql; $sql2");
if($_result){
    echo "<script>alert('บันทึกข้อมูลสินค้าเรียบร้อย');</script>";
    echo "<script>window.location='product_show.php';</script>";
} else {
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลสินค้าได้');</script>";
    echo "<script>window.location='product_form_insert.php';</script>";
}

// ปิดการเชื่อมต่อ
mysqli_close($conn);

?>
