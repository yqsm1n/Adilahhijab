<?php include '../connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>สินค้าทั้งหมด</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
</head>

<body class="sb-nav-fixed">
    <?php include 'menu.php'; ?>
    <!------------------------------------------------------ แถวที่ 2 คอลัมน์ที่ 1/4 ---------------------------------------------------------------------->
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4 ">
                <!-------------------------------------------------------------------- ปุ่ม เพิ่มข้อมูล ------------------------------------------------------------------------>
                <meta charset="UTF-8">
                <button charset="UTF-8" style="background-color:green; color: white; border: none; padding: 15px 30px;
                                text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 15px 2px;
                                transition-duration: 0.4s; cursor: pointer; border-radius: 12px;" onclick="location.href='product_form_insert.php'">เพิ่มสินค้า</button>

                <!------------------------------------------------------ หัวข้อตารางแสดงข้อมูลสินค้า ------------------------------------------------------------------->
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        แสดงข้อมูลสินค้า
                    </div>
                    <!-------------------------------------------------- ตารางแสดงข้อมูลสินค้า/TABLE --------------------------------------------------------------------->
                    <div class="card-body">
                        <table class="table table-striped">
                            <!---------------------------------------------------- ข้อมูลที่จะให้แสดงในตาราง ---------------------------------------------------------------------->
                            <thead>
                                <tr style="text-align: center; font-size:medium">
                                    <th>รหัสสินค้า</th>
                                    <th>รูปภาพสินค้า</th>
                                    <th>ประเภทสินค้า</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>รายละเอียดสินค้า</th>
                                    <th>สี</th>
                                    <th>ราคาต้นทุน</th>
                                    <th>ราคาสินค้า</th>
                                    
                                    <th>จำนวนไซต์S</th>
                                    <th>จำนวนไซต์M</th>
                                    <th>จำนวนไซต์L</th>
                                    <th>จำนวนไซต์XL</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>

                                </tr>
                            </thead>

                            <!--------------------------------------------------- ดึงจากฐานข้อมูลมาแสดง---------------------------------------------------------------------->
                            <?php
                            $sql = "SELECT * FROM product,product_type WHERE product.type_id = product_type.type_id "; // แก้ไขตามชื่อตารางของคุณ
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <tbody>
                                    <tr style="text-align: center;">
                                        <td><?= $row['product_id'] ?></td>
                                        <td><img src="../img/<?=$row['product_img']?>" width="100px" height="150px"></td>
                                        <td><?= $row['type_name'] ?></td>
                                        <td><?= $row['product_name'] ?></td>
                                        <td><?= $row['product_detail'] ?></td>
                                        <td><?= $row['product_color']?></td>
                                        <td><?= $row['cost_price'] ?></td>
                                        <td><?= $row['product_price'] ?></td>                              
                                        <td><?= $row['size_s'] ?></td>
                                        <td><?= $row['size_m'] ?></td>
                                        <td><?= $row['size_L'] ?></td>
                                        <td><?= $row['size_XL'] ?></td>
                                        <td>
                                            <a href="product_form_edit.php?product_id=<?=$row['product_id']?>"  style="background-color:#EFD802; color: white; border: none; padding: 10px 10px;
                                                text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 8px 2px;
                                                transition-duration: 0.4s; cursor: pointer; border-radius: 12px;">EDIT</a>
                                        </td>

                                        <td>
                                            <a href="product_delete.php?product_id=<?php echo $row['product_id'];?>" style= " background-color:red; color: white; border: none; padding: 10px 10px;
                                                text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 8px 2px;
                                                transition-duration: 0.4s; cursor: pointer; border-radius: 12px;">DELETE</a>
                                        </td>
                                    </tr>
                                <?php
                            }
                            mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
                                ?>
                                </tbody>
                                <!----------------------------------------------------------- ปิดการเชื่อมต่อฐานข้อมูล ---------------------------------------------------------------------->
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <!----------------------------------------------------------- ส่วน footer ---------------------------------------------------------------------->
        <?php include '../footer.php'; ?>
        <!----------------------------------------------------------- ส่วน footer ---------------------------------------------------------------------->
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

