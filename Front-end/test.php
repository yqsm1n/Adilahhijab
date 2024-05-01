<?php
// ตรวจสอบว่าผู้ใช้ล็อกอินหรือไม่
session_start();
if(isset($_SESSION["user_name"])) {
    // ถ้ามีการล็อกอินแล้ว ให้ดึงข้อมูลผู้ใช้จากฐานข้อมูล
    include '../connect.php'; // เชื่อมต่อกับฐานข้อมูล
    $user_name = $_SESSION["user_name"]; // ดึง user_name จาก session

    // ตรวจสอบว่ามีข้อมูลหรือไม่
    if (!empty($row)) {
        // กำหนดค่าข้อมูลไว้ในตัวแปร
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $number_address = $row['number_address'];
        $moo_address = $row['moo_address'];
        $district_address = $row['district_address'];
        $amphoe_address = $row['amphoe_address'];
        $province_address = $row['province_address'];
        $postalcode = $row['postalcode'];
        $user_telephone = $row['user_telephone'];
        $user_email = $row['user_email'];
        $user_password = $row['user_password'];
    } else {
        echo "ไม่พบข้อมูลผู้ใช้";
    }

    // ตรวจสอบ Session และคำนวณ $_SESSION["sum_price"]
    if (isset($_SESSION['sum_price'])) {
        $sum_price = $_SESSION['sum_price'];

       // สร้างคำสั่ง SQL เพื่อบันทึกข้อมูลลงในตาราง "order"
        $insert_sql = "INSERT INTO `order` (user_name, user_telephone, number_address, moo_address, district_address, amphoe_address, province_address, postalcode) 
        VALUES ('$user_name', '$user_telephone', '$number_address', '$moo_address', '$district_address', '$amphoe_address', '$province_address', '$postalcode')";

// ดำเนินการในฐานข้อมูล: บันทึกข้อมูลลงในตาราง "order"
if (mysqli_query($conn, $insert_sql)) {
echo "บันทึกข้อมูลลงในตาราง order เรียบร้อยแล้ว";
} else {
echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . mysqli_error($conn);
}


        // ดึง order_id ที่เพิ่งเพิ่มเข้าไปในฐานข้อมูล
        $order_id = mysqli_insert_id($conn);

        // วนลูปเพื่อ INSERT ข้อมูลในตาราง order_detail
        for ($i = 0; $i <= (int)$_SESSION["intLine"]; $i++) {
            if ($_SESSION["strProduct_id"][$i] != "") {
                // ดึงข้อมูลสินค้า
                $sql1 = "SELECT * FROM product WHERE product_id = '".$_SESSION["strProduct_id"][$i]."'";
                $result = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_array($result);

                if ($row1) {
                    $product_price = $row1['product_price'];
                    $total = $_SESSION["strQty"][$i] * $product_price;

                    // INSERT ข้อมูลในตาราง order_detail
                    $sql2 = "INSERT INTO order_detail (order_id, product_id, orderPrice, orderQty, Total)
                             VALUES ('$order_id', '".$_SESSION["strProduct_id"][$i]."', '$product_price', '".$_SESSION["strQty"][$i]."', '$total')";
                    mysqli_query($conn, $sql2);

                    // ตัดสต็อกสินค้า
                    $sql3 = "UPDATE product SET product_amount = product_amount - '".$_SESSION["strQty"][$i]."'
                             WHERE product_id = '".$_SESSION["strProduct_id"][$i]."'";
                    mysqli_query($conn, $sql3);
                } else {
                    echo "<script> alert('Error fetching product information.') </script>";
                }
                
            }
        }

        echo "<script> alert('บันทึกข้อมูลเรียบร้อยแล้ว') </script>";
        echo "<script> window.location='view_product.php';</script>";

        // ล้าง Session
        unset($_SESSION["intLine"]);
        unset($_SESSION["strProduct_id"]);
        unset($_SESSION["strQty"]);
        unset($_SESSION["sum_price"]);
        session_destroy();
    } else {
        echo "<script> alert('Error: sum_price is not set.') </script>";
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    mysqli_close($conn);
} else {
    // ถ้าไม่มีการล็อกอิน ให้ทำการ redirect หรือทำอื่น ๆ ตามที่ต้องการ
    header("Location: user_login.php"); // ส่งผู้ใช้ไปยังหน้าล็อกอิน
    exit(); // หยุดการทำงานของสคริปต์
}
?>
