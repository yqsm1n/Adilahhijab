<?php include '../connect.php'; 
$ids = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title> order detail</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php include 'menu.php'; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4 ">
                        <div class="card mb-4" style="margin-top: 20px;">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                แสดงรายการสินค้า
                            </div>
                            <div>
                    <br>
                        <a href="show_order.php"><button type="button" class="btn btn-outline-success" style="margin-left: 20px;">กลับหน้าหลัก</button></a>
                    </div>
                   
                    

                            <div class="card-body">
                                <h5>เลขที่ใบสั่งซื้อ : <?=$ids?> </h5>
                                <table  class="table table-striped">
                                    <thead>
                                        <tr style="text-align: center; font-size: 12px;">
                                    <th>รหัสสินค้า</th>
                                    <th>ชื่อสินค้า</th>
                                  <!--  <th>ไซต์</th>-->
                                    <th>ราคา</th>
                                    <th>จำนวน</th>
                                    <th>ราคารวม</th>
                                    
                                </tr>
                                    </thead>
                                
                                    <?php
                            $sql = "SELECT * FROM order_detail d, product p,`order` o WHERE o.orderID=d.orderID AND d.product_id=p.product_id and d.orderID='$ids'
                            ORDER BY p.product_id ";

                            $result = mysqli_query($conn, $sql);
                            $sum_total = 0;
                        
                            while ($row = mysqli_fetch_array($result)) {
                                $sum_total=$row['total_price'];
                            ?>
                                
                                    <tr style="text-align: center; font-size: 12px;">
                                        <td><?= $row['product_id']?></td>
                                        <td><?= $row['product_name']?></td>
                                       <!-- <td><?= $row['product_size']?></td>-->
                                        <td><?= $row['product_price']?></td>
                                        <td><?= $row['orderQty']?></td>
                                        <td><?= $row['Total']?></td>
                                    </tr>
                                <?php
                            }
                            ?>
                                
                                </table>
                                <b>ราคารวมสุทธิ <?=number_format($sum_total,2)?>บาท</b>
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