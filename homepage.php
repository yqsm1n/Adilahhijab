<?php  
include 'connect.php';
session_start(); // เรียกใช้ session_start() ก่อนเริ่มใช้งาน session ในไฟล์นี้
if(!isset($_SESSION["username_admin"])) 
header("Location:login.php");

//รายการสั่งซื้อ
$sql1 = "SELECT COUNT(orderID) AS show_order_no FROM `order` WHERE order_status='1' ";
$result = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($result);

//
$sql2 = "SELECT COUNT(orderID) AS show_order_yes FROM `order` WHERE order_status='2' ";
$result = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_array($result);

//
$sql3 = "SELECT COUNT(orderID) AS show_order_yes FROM `order` WHERE order_status='2' ";
$result = mysqli_query($conn,$sql3);
$row3 = mysqli_fetch_array($result);

//
$sql4 = "SELECT COUNT(product_id) AS pro_num FROM `product` WHERE size_s < 5 ";
$result = mysqli_query($conn,$sql4);
$row4 = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>หน้าแรก</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    </head>
<style>
.material-icons-outlined {
  vertical-align: middle;
  line-height: 1px;
}

.text-primary {
  color: #666666;
}

.text-blue {
  color: #246dec;
}

.text-red {
  color: #cc3c43;
}

.text-green {
  color: #367952;
}

.text-orange {
  color: #f5b74f;
}

.font-weight-bold {
  font-weight: 600;
}

.main-title {
  display: flex;
  justify-content: space-between;
}

.main-title > p {
  font-size: 20px;
}

.card {
  display: flex;
  padding: 25px;
  background-color: #ffffff;
  box-sizing: border-box;
  border: 1px solid #d2d2d3;
  border-radius: 5px;
  box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
}

.card-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.card-inner > p {
  font-size: 26px;
}

.card-inner > h1 {
    justify-content:center;
}

</style>
    <body class="sb-nav-fixed">
        <?php include 'menu.php'; ?>
                            
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                       <!--  <h1 class="mt-4">Dashboard</h1>  -->
                        <ol class="breadcrumb mb-4">
                           <!--  <li class="breadcrumb-item active">Dashboard</li> -->
                        </ol>

<div class="container justify-content-center">
    <div class="row">
        <div class="col-xl-6 col-md-6">
            <div class="card mb-4">
                <div class="card-inner">
                    <p class="text-primary">รายการสั่งซื้อสินค้า</p>
                    <i class="fa-solid fa-cart-shopping fa-4x" style="color:#B48E43;" ></i>
                </div>
                <h1 class="text-primary font-weight-bold"><?=$row1['show_order_no']?></h1>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="card mb-4">
                <div class="card-inner">
                    <p class="text-primary">ยอดขายวันนี้</p>
                    <i class="fa-solid fa-sack-dollar fa-4x" style="color: #B48E43;"></i>
                </div>
                <h1 class="text-primary font-weight-bold"><?=$row2['show_order_yes']?></h1>
            </div>
        </div>
        
        <div class="col-xl-6 col-md-6">
            <div class="card mb-4">
                <div class="card-inner">
                    <p class="text-primary">สินค้าขายดี</p>
                    <i class="fa-solid fa-bolt-lightning fa-4x" style="color:#B48E43;"></i>
                </div>
                <h1 class="text-primary font-weight-bold">83</h1>
            </div>
        </div>

        <div class="col-xl-6 col-md-6">
            <div class="card mb-4">
                <div class="card-inner">
                    <p class="text-primary">สินค้าใกล้หมด</p>
                    <i class="fa-solid fa-bell fa-4x" style="color: #B48E43;"></i>
                </div>
                <h1 class="text-primary font-weight-bold"><?=$row4['pro_num']?></h1>
            </div>
        </div>

    </div>
</div>


<!----------------------------------------------------------- การ์ดที่ 2 ของแถว ---------------------------------------------------------------------->
                          


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                รายการสั่งซื้อสินค้า
                            </div>
                            
                            <div class="card-body">
                            <table id="orderTable" class="table table-striped">
                                    <thead style=" font-size: 12px;">
                                        <tr>
                                        <th>เลขที่ใบสั่งซื้อ</th>
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>เลขที่</th>
                                    <th>หมู่</th>
                                    <th>ตำบล</th>
                                    <th>อำเภอ</th>
                                    <th>จังหวัด</th>
                                    <th>รหัสไปรษณีย์</th>
                                    <th>เบอร์โทรศัพท์</th>
                                    <th>ราคารวม</th>
                                    <th>หลักฐานการโอนเงิน</th>
                                    <th>สถานะการสั่งซื้อ</th>
                                    <th>วันที่สั่งซื้อ</th>
                                    <th>รายละเอียด</th>
                                    <th>ยกเลิก</th>
                                        </tr>
                                    </thead>
                                    <?php
                            $sql = "SELECT * FROM `order` ORDER BY orderID DESC";
                            $result = mysqli_query($conn, $sql);

                            if (!$result) {
                                // Query execution failed
                                die('Error: ' . mysqli_error($conn));
                            }

                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <tbody>
                                    <tr style="text-align: center; font-size: 12px;">
                                        <td><?= $row['orderID'] ?></td>
                                        <td><?= $row['first_name'] ?></td>
                                        <td><?= $row['last_name'] ?></td>
                                        <td><?= $row['number_address'] ?></td>
                                        <td><?= $row['moo_address'] ?></td>
                                        <td><?= $row['district_address'] ?></td>
                                        <td><?= $row['amphoe_address'] ?></td>
                                        <td><?= $row['province_address'] ?></td>
                                        <td><?= $row['postalcode'] ?></td>
                                        <td><?= $row['user_telephone'] ?></td>
                                      <!--  <td><?= $row['user_name'] ?></td>  -->
                                        <td><?= $row['total_price'] ?></td>
                                        <td><?= $row['slip_img'] ?></td>
                                        <td><?= $row['order_status'] ?></td>
                                        <td><?= $row['reg_date'] ?></td>
                                        <td>
                                            <button style="background-color:green; color: white; border: none; padding: 5px 15px;
                                            text-align: center; text-decoration: none; display: inline-block; font-size: 12px; 
                                            transition-duration: 0.4s; cursor: pointer; border-radius: 12px;" onclick="location.href='form_product_insert.php'">รายละเอียด</button>
                                        </td>
                                        <td>
                                            <button style="background-color:red; color: white; border: none; padding: 5px 15px;
                                text-align: center; text-decoration: none; display: inline-block; font-size: 12px; 
                                transition-duration: 0.4s; cursor: pointer; border-radius: 12px;" onclick="location.href='form_product_insert.php'">ยกเลิก</button></td>
                                    </tr>
                                    <?php
                            }
                            ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            <?php include 'footer.php'; ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
