<?php
include '../connect.php';

// ตรวจสอบว่ามีการส่งข้อมูลผ่าน POST มาหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากฟอร์ม
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $number_address = isset($_POST['number_address']) ? $_POST['number_address'] : '';
    $moo_address = isset($_POST['moo_address']) ? $_POST['moo_address'] : '';
    $district_address = isset($_POST['district_address']) ? $_POST['district_address'] : '';
    $amphoe_address = isset($_POST['amphoe_address']) ? $_POST['amphoe_address'] : '';
    $province_address = isset($_POST['province_address']) ? $_POST['province_address'] : '';
    $postalcode = isset($_POST['postalcode']) ? $_POST['postalcode'] : '';
    $user_telephone = isset($_POST['user_telephone']) ? $_POST['user_telephone'] : '';
    $user_email = isset($_POST['user_email']) ? $_POST['user_email'] : '';
    $user_name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
    $user_password = isset($_POST['user_password']) ? $_POST['user_password'] : '';
  

    $user_password=hash('sha512',$user_password);

    // SQL เพื่อบันทึกข้อมูล
    $sql = "INSERT INTO user (first_name, last_name, number_address, moo_address, district_address, amphoe_address, province_address, postalcode, user_telephone,user_email,user_name, user_password)
            VALUES ('$first_name', '$last_name', '$number_address', '$moo_address', '$district_address', '$amphoe_address', '$province_address', '$postalcode', '$user_telephone','$user_email', '$user_name', '$user_password')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='user_login.php';</script>";
    } else {
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
        echo "<script>window.location='regis_insert.php';</script>";
    }
} else {
    echo "<script>alert('การร้องขอไม่ถูกต้อง');</script>";
    echo "<script>window.location='regis_insert.php';</script>";
}

// ปิดการเชื่อมต่อ
mysqli_close($conn);
?>
