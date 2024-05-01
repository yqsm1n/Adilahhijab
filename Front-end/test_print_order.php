<?php
session_start();
include '../connect.php';
if (isset($_SESSION['user_name'])) {
    $user_name = $_SESSION['user_name'];
}  // ถ้าไม่ได้ล็อกอิน ให้ redirect กลับไปที่หน้า login
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>



<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-20" style="text-align: center;">ใบเสร็จรายการสั่งซื้อ</h5>
				<p style="text-align: center;">2024-01-26 22:29:34</p>
                <p style="text-align: center;">เลขที่ใบสั่งซื้อ : 0001</p>
				
<?php
// ดึงข้อมูลผู้ใช้จากฐานข้อมูล
$sql = "SELECT * FROM user WHERE user_name = '{$_SESSION["user_name"]}'";
$result = mysqli_query($conn, $sql);

// ตรวจสอบว่ามีข้อมูลหรือไม่
if (mysqli_num_rows($result) > 0) {
    // ดึงข้อมูลผู้ใช้
    $row = mysqli_fetch_assoc($result);
    
    // กำหนดค่าข้อมูลไว้ในตัวแปร
    $user_name = $row['user_name'];
    $user_telephone = $row['user_telephone'];
    $number_address = $row['number_address'];
    $moo_address = $row['moo_address'];
    $district_address = $row['district_address'];
    $amphoe_address = $row['amphoe_address'];
    $province_address = $row['province_address'];
	$postalcode = $row['postalcode'];
?>

<?php
} else {
    echo "ไม่พบข้อมูลผู้ใช้";
}

// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);
?>

				<div class="bo10 p-t-15 p-b-20">
				<p>ชื่อลูกค้า : <?php echo $user_name; ?></p>
				<p>เบอร์โทรศัพท์ : <?php echo $user_telephone; ?> </p>
				<p>ที่อยู่ในการจัดส่ง : <?php echo $number_address; ?> ม.<?php echo $moo_address; ?> ต.<?php echo $district_address; ?> อ.<?php echo $amphoe_address; ?> จ.<?php echo $province_address; ?> <?php echo $postalcode; ?></p>
				</div>

				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						รายการสั่งซื้อ:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
						<?=$row_pro['product_name']?>
						$<?=$row_pro['product_price']?>
						</p>
						<p class="s-text8 p-b-23">
						<?=$row_pro['product_name']?>
						$<?=$row_pro['product_price']?>
						</p>
						<span class="s-text19">
						
						</span>
					</div>
				</div>

				<!--  -->
				<div class="p-t-26 p-b-30">
					 <p>รวมการสั่งซื้อ:<?=$sumPrice?></p>
            		<p>ยอดการจัดส่ง: 30 บาท</p>
            		<p>ส่วนลดร้านค้า: 50 บาท</p>
            		<p class="m-text20 w-size18"><strong>ยอดชำระเงินทั้งหมด: 1,230 บาท</strong></p>
				</div>
	
				<div class="size15 trans-0-4">
    <a href="payment.php" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">ชำระเงิน</a>
</div>
