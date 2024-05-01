<?php 
include 'connect.php';
session_start();

if(isset($_POST['submit'])) {
    // รับค่าจากฟอร์มล็อกอิน
    $username_admin = $_POST['username_admin'];
    $admin_password = $_POST['admin_password'];

    // เข้ารหัสรหัสผ่าน
    //$hashed_password = hash('sha512', $user_password);

    // ค้นหาข้อมูลผู้ใช้ในฐานข้อมูล
    $sql = "SELECT * FROM adminn WHERE username_admin='$username_admin' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // ล็อกอินสำเร็จ
        $_SESSION['username_admin'] = $username_admin;
        header("Location:back-end/homepage.php"); // ส่งไปยังหน้า Dashboard
        exit(); // ออกจากสคริปต์
    } else {
        // ล็อกอินไม่สำเร็จ
        $_SESSION["Error"] = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        header("Location: login.php"); // ส่งกลับไปยังหน้าล็อกอิน
        exit(); // ออกจากสคริปต์
    }
}
?>
