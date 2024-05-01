<?php include '../connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
<body class="sb-nav-fixed">
    <?php include 'menu.php'; ?>

    <script>
        $(document).ready(function(){
            $('#DataTable').DataTable({
                "aaSorting":[[0,'ASC']],
            });
        });
    </script>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4 ">
            <h4 class="alert alert-primary" style="text-align: center; margin: 20px" > รายงานการขายสินค้า</h4>
                <div class="card mb-4" style="margin-top: 20px;">
                    <br>
                    <!-- ฟอร์มค้นหา -->
                    <div>
                        <form name="form1" method="POST" action="report_sale1.php">
                            <div class="row">
                                <div class="col-sm-2" style="margin-left: 20px;">
                                    <input type="date" name="dt1" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                    <input type="date" name="dt2" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-outline-success"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr style="text-align: center; font-size: 12px;">
                                    <th>เลขที่ใบสั่งซื้อ</th>
                                    <th>วันที่สั่งซื้อ</th>
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
                                    
                                    
                                   
                                </tr>
                            </thead>

                            <?php
                            $ddt1 = @$_POST['dt1'];
                            $ddt2 = @$_POST['dt2'];
                            $add_date = date('Y/m/d' , strtotime($ddt2 . "+1 days"));
                            
                            if(($ddt1 != "") & ($ddt2 != "")){
                                echo " ค้นหาจากวันที่ $ddt1 ถึง $ddt2 ";
                                $sql = "SELECT * FROM `order` WHERE order_status='2' AND reg_date BETWEEN '$ddt1' AND '$add_date' ORDER BY orderID DESC";
                            }else{
                                $sql = "SELECT * FROM `order` WHERE order_status='2' ORDER BY orderID DESC";
                            }

                            $result = mysqli_query($conn, $sql);

                            if (!$result) {
                                // Query execution failed
                                die('Error: ' . mysqli_error($conn));
                            }
                            
                            $total_sum=0;
                            while ($row = mysqli_fetch_array($result)) {
                            $status = $row['order_status'];
                            $total_sum = $total_sum + $row['total_price'];
                            ?>

                                <tbody>
                                    <tr style="text-align: center; font-size: 12px;">
                                        <td><?= $row['orderID'] ?></td>
                                        <td><?= $row['reg_date'] ?></td>
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
                                      
                                       
                                        
                                       


                                    </tr>
                                <?php
                            }
                            ?>
                                </tbody>
                        </table>
                        <div class="text-end"><b>รวมเป็นเงินทั้งหมด <?=number_format($total_sum,2)?> บาท</b></div>
                    </div>
                </div>
            </div>
        </main>

        <?php include '../footer.php'; ?>
    </div>
    </body>
    </html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="js/datatables-simple-demo.js"></script>
   