<?php
session_start();
include '../condb.php';

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $timer = $_POST['timer'];
    $times = $_POST['times'];
    $stadium = $_POST['stadium'];
    $shirt = $_POST['shirt'];
    $water = $_POST['water'];
    $reg_data = date('Y-m-d H:i:s');

    // ตรวจสอบว่ามีการจองซ้ำในช่วงเวลาที่เลือกหรือไม่
    $sql_check = "SELECT * FROM order_member WHERE date = '$date' AND timer = '$timer' AND times = '$times'";
    $result_check = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($result_check) > 0) {
        // If the time slot is already booked
        $_SESSION['error'] = "ช่วงเวลาที่เลือกมีการจองแล้ว";
        header("Location: booking.php");
        exit();
    } else {
        // If the time slot is available, proceed with the booking
        if (is_uploaded_file($_FILES['image']['tmp_name'])) {
            $new_image_name = 'sl_' . uniqid() . "." . pathinfo(basename($_FILES['image']['name']), PATHINFO_EXTENSION);
            $image_upload_path = "../../images/slip/" . $new_image_name;
            move_uploaded_file($_FILES['image']['tmp_name'], $image_upload_path);
        } else {
            $new_image_name = "";
        }

        $sql = "INSERT INTO order_member (name, phone, date, timer, times, stadium, shirt, water, order_status, reg_data, image)
        VALUES ('$name', '$phone', '$date', '$timer', '$times', '$stadium', '$shirt', '$water', '1', '$reg_data', '$new_image_name')";

        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            $_SESSION['confirm_booking'] = "รอเจ้าหน้าที่ตรวจสอบ";
            header("Location: booking.php");
            exit();
        } else {
            $_SESSION['error'] = "มีข้อผิดพลาดเกิดขึ้นในการทำการจอง";
            header("Location: booking.php");
            exit();
        }
    }
} else {
    $_SESSION['error'] = "ไม่พบข้อมูลที่ส่งมา";
    header("Location: booking.php");
    exit();
}

mysqli_close($conn);
?>