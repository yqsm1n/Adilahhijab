<?php
session_start();
include '../connect.php';
if (isset($_SESSION['user_name'])) {
    $user_name = $_SESSION['user_name'];
} else {
    header("Location: login.php"); // Redirect ไปที่หน้า login ถ้าไม่ได้ล็อกอิน
    exit();
}

 // ดึงรายการสั่งซื้อ
 $sql = "SELECT * FROM `order`  WHERE orderID= '" . $_SESSION["order_id"]."' ";
 $result = mysqli_query($conn, $sql);
 $rs=mysqli_fetch_array($result);
 $total_price=$rs['total_price'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Print order</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
</head>
<style>
/* ปรับขนาดของเซลล์ในตาราง */
.table-row > * {
    padding: 50px; /* ปรับขนาดพื้นที่ระหว่างเซลล์ */
}

/* ปรับแต่งหัวตาราง */
.table-head > * {
    text-align: center;
}

.cart {
    margin-top: -70px; /* ปรับตำแหน่งของเนื้อหาขึ้นไป 50px */
}

</style>

<body class="animsition">
    <!-- Cart -->
    <section class="cart bgwhite p-t-80 p-b-150">
        <div class="container" style="display: flex; justify-content: center;">
        <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-20 p-lr-15-sm">
                    <h5 class="m-text20 p-b-20" style="text-align: center;">ใบเสร็จรายการสั่งซื้อ</h5>
                    <p style="text-align: center;"><?=$rs['reg_date']?></p>
                    <p style="text-align: center;">เลขที่ใบสั่งซื้อ : <?=$rs['orderID']?></p>
             
                    
                    <div class="bo10 p-t-15 p-b-20">
                        <p>ชื่อลูกค้า : <?=$rs['user_name']?></p>
                        <p>เบอร์โทรศัพท์ : 0<?=$rs['user_telephone']?> </p>
                        <p>ที่อยู่ในการจัดส่ง : <?=$rs['number_address']?> ม.<?=$rs['moo_address']?> ต.<?=$rs['district_address']?> อ.<?=$rs['amphoe_address']?> จ.<?=$rs['province_address']?> <?=$rs['postalcode']?></p>
                    </div>

                  <?php 
                    $sql1 = "SELECT * FROM order_detail d,product p  WHERE d.product_id=p.product_id AND d.orderID= '" . $_SESSION["order_id"]."' ";
                    $result1 = mysqli_query($conn, $sql1);
                    while($row=mysqli_fetch_array($result1)){

                  ?>
                    <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
                        <span class="s-text18 w-size19 w-full-sm">
                            รายการสั่งซื้อ:
                        </span>
                        <div class="w-size20 w-full-sm">
                            <p class="s-text8 p-b-23">
                            <?=$row['product_name']?> X <?=$row['orderQty']?>
                            ฿<?=$row['Total']?> 
							
                            </p>
                    
                            <span class="s-text19"></span>
							
                        </div>
                    </div>
                    <?Php 
                    }
                    ?>
                    <!--  -->
                    <div class="p-t-26 p-b-30">
                         <!--<p>รวมการสั่งซื้อ: <?=$total_price?></p>-->
                        <!--<p>ยอดการจัดส่ง: 30 บาท</p>
                        <p>ส่วนลดร้านค้า: 50 บาท</p>-->
                        <p class="m-text20 w-size18"><strong>ยอดชำระเงินทั้งหมด:<?=$total_price?> บาท</strong></p>
                    </div>
                    
                    <div class="size15 trans-0-4">
                        <a href="payment.php" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">ปริ๊นใบเสร็จ</a>
                    </div>
                
                </div>
            </div>
        </div>
    </section>
<!--===============================================================================================-->
    <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="vendor/select2/select2.min.js"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });

        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect2')
        });
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>
    
</body>
</html>

