<?php 
include '../connect.php';
session_start();
if (isset($_SESSION['user_name'])) {
    $user_name = $_SESSION['user_name'];
}  // ถ้าไม่ได้ล็อกอิน ให้ redirect กลับไปที่หน้า login

$order_id = "";
$name = "";
$total = 0;
if(isset($_POST['btn1'])){
    $key_word=$_POST['keyword'];
    if($key_word !=""){
        $sql="SELECT * FROM `order` WHERE orderID='$key_word' ";
    }else{
        echo"<script> window.location='payment1.php'; </script>";
    }
    $hand=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($hand);
    $order=$row['orderID'];
    $Fname=$row['first_name'];
    $Lname=$row['last_name'];
    $total=$row['total_price'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>แจ้งชำระเงิน</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootrap.bundle.min.js"></script>
</head>
<body>
    <!-- Include menu.php here -->
    <?php include 'menu1.php'; ?>

    <div class="container">
        <div class="row">
        <div class="col-md-4">
            <div class="alert alert-success" role="alert">แจ้งการชำระเงิน</div>
                <div class="border mt-3 p-2 my-2" style="background-color : #f0f0f5;">
                <form method="POST" action="payment1.php">
                    <label>เลขที่ใบสั่งซื้อ</label>
                    <input type="text" name="keyword">
                    <button type="submit" name="btn1" class="btn btn-primary">ค้นหา</button>
                </form>
            </div>

        </div>
        </div>

        <div class="row">
            <div class="col-md-4">
            <form method="POST" action="insert_payment.php" enctype="multipart/form-data">
                <label class="mt-4">เลขที่ใบสั่งซื้อ</label>
                <input type="text" name="order_id" required value=<?=$order_id?>><br>
                <label class="mt-4">ชื่อ</label>
                <textarea class="form-control" name="first_name" required rows="1"><?=$Fname?></textarea>
                <label class="mt-4">นามสกุล</label>
                <textarea class="form-control" name="last_name" required rows="1"><?=$Lname?></textarea>
                <label class="mt-4">จำนวนเงิน</label>
                <input type="number" class="form-control" name="total_price" required value=<?=$total?>>
                <label class="mt-4">วันที่ชำระเงิน</label>
                <input type="date" class="form-control" name="pay_date" required>
                <label class="mt-4">เวลาที่ชำระเงิน</label>
                <input type="time" class="form-control" name="pay_time" required>
                <label class="mt-4">หลักฐานการชำระเงิน</label>
                <input type="file" class="form-control" name="file" required><br>
                <button type="submit" name="btn2" class="btn btn-primary">บันทึก</button>
            </form>  
            </div>
        </div>
    </div>
</body>
</html>
