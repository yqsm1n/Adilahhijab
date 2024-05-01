<?php include '../connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php include 'menu.php'; ?>
   
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4 ">
                        <div class="card mb-4" style="margin-top: 20px;">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                แสดงรายการสั่งซื้อ(ยังไม่ชำระเงิน)
                            </div>
                            <div>
                    <br>
                        <a href="show_order_yes.php"><button type="button" class="btn btn-outline-success" style="margin-left: 20px;">ชำระเงินเรียบร้อย</button></a>
                        <a href="show_order.php"><button type="button" class="btn btn-outline-success">ยังไม่ชำระเงิน</button></a>
                        <a href="show_order_no.php"><button type="button" class="btn btn-outline-success">ยกเลิกคำสั่งซื้อ</button></a>
                    </div>
                    <br>
                    <div>
                        <form name="form1" method="POST" action="show_order.php">
                            <div class="row">
                                <div class="col-sm-2">
                                    <input type="date" name="dt1" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                    <input type="date" name="dt2" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-outline-success">ค้นหา</button>
                                </div>
                            </div>
                        </form>
                    </div>

                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr style="text-align: center; font-size: 12px;">
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
                                    <!-- <th>username</th> -->
                                    <th>ราคารวม</th>
                                    <th>หลักฐานการโอนเงิน</th>
                                    <th>วันที่สั่งซื้อ</th>
                                    <th>สถานะการสั่งซื้อ</th>
                                    <th>รายละเอียด</th>
                                    <th>ปรับสถานะ</th>
                                    <th>ยกเลิก</th>
                                </tr>
                                    </thead>
                                    <tfoot>
                                        <tr style="text-align: center; font-size: 12px;">
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
                                        <!-- <th>username</th> -->
                                        <th>ราคารวม</th>
                                        <th>หลักฐานการโอนเงิน</th>
                                        <th>วันที่สั่งซื้อ</th>
                                        <th>สถานะการสั่งซื้อ</th>
                                        <th>รายละเอียด</th>
                                        <th>ปรับสถานะ</th>
                                        <th>ยกเลิก</th>
                                
                                        </tr>
                                    </tfoot>
                                    <?php
                            $sql = "SELECT * FROM `order` WHERE order_status='1' ORDER BY orderID DESC";
                            $result = mysqli_query($conn, $sql);

                            if (!$result) {
                                // Query execution failed
                                die('Error: ' . mysqli_error($conn));
                            }

                            while ($row = mysqli_fetch_array($result)) {
                            $status = $row['order_status'];
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
                                        <td><?= $row['reg_date'] ?></td>
                                        <td>
                                            <?php
                                            if($status == 1){
                                                echo"<b style='color:blue'>ยังไม่ชำระเงิน</b>";
                                            }else if($status == 2){
                                                echo "<b style='color:Green'>ชำระเงินเรียบร้อย</b>";
                                            }else if($status == 0){
                                                echo "<b style='color:red'>ยกเลิกคำสั่งซื้อ</b>";
                                            }

                                            ?>
                                        </td>
                                    
                                        <td>
                                        <a style="background-color:Green; color: white; border: none; padding: 5px 15px;
                                            text-align: center; text-decoration: none; display: inline-block; font-size: 12px; 
                                            transition-duration: 0.4s; cursor: pointer; border-radius: 12px;" href="" onclick="del(this.href); return felse;">รายละเอียด</a>
                                        </td>
                                        
                                       <td>
                                        <a style="background-color:#EED202; color: white; border: none; padding: 5px 15px;
                                            text-align: center; text-decoration: none; display: inline-block; font-size: 12px; 
                                            transition-duration: 0.4s; cursor: pointer; border-radius: 12px;" href="pay_order.php?id=<?= $row['orderID'] ?>" onclick="del1(this.href); return felse;">ปรับสถานะ</a>
                                        </td>
                                       <td>
                                        <a style="background-color: red; color: white; border: none; padding: 5px 15px;
                                            text-align: center; text-decoration: none; display: inline-block; font-size: 12px; 
                                            transition-duration: 0.4s; cursor: pointer; border-radius: 12px;" href="cancel_order.php?id=<?= $row['orderID'] ?>" onclick="del(this.href); return felse;">ยกเลิกสั่งซื้อ</a>
                                        </td>


                                    </tr>
                                <?php
                            }
                            ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            </div>
        </div>
        
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>