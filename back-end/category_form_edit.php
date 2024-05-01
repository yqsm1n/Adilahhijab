<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Update category</title>
        <!-- เรียกใช้งาน Bootstrap CSS -->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- เรียกใช้งาน fontawesome -->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Fenix&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Fenix&family=Sarabun:wght@300&display=swap');
/* รูปแบบทั่วไป */
.body {
    font-family: 'Sarabun', sans-serif;
    color: #333;
    background-color: #f8f9fa;
}
.container {
    display: grid;
    place-items: center;
    height: 70vh; /* ความสูงของหน้าจอ */
}
.card {
    width: 1000px;
    padding: 20px;
    border-radius: 10px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}
/* สไตล์ของ input */
.form-control {
    padding: 18px;  /* ความกว้าง*/
    border-radius: 5px; /* ความโค้งของขอบ */
    border: 1px solid #ccc;
    width: 90%;
    margin-bottom: 20px;
}
/* สไตล์ของ label */
label[for="type_name"] {
    font-family: 'Sarabun', sans-serif;
    font-weight: bold;
    color: #333;
    font-size: 16px;
}
</style>

<?php include 'menu.php'; ?>
<body>
    <?php
    include '../connect.php';
    $type_id = $_GET['type_id'];
    $query = "SELECT type_id, type_name FROM product_type WHERE type_id = '$type_id'";
    $row = mysqli_fetch_assoc(mysqli_query($conn,$query));
    ?>
        <div class="container"> <!-- จัดให้อยู่ตรงกลางหน้า -->
            <div class="row justify-content-center">
                <div class="col-lg-9"> <!-- ขนาดการ์ด -->
                    <div class="card shadow-lg border-0 rounded-lg mt-5"> <!-- ส่วนหัวข้อของการ์ด -->
                        <div class="card-header">
                            <h3 style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 28px; text-align: center; ">แก้ไขประเภทสินค้า</h3></div>
                            <!-- ส่วนเนื้อหาของการ์ด -->     
                                <div class="card-body"> 
                                    <form method="POST" action="category_update.php">
                                        <div class="row mb-2">
                                            <div class="col-md">

                                        <div class="form-floating my-3 ">
                                            <label for="type_name">รหัสประเภทสินค้า</label><br><br>
                                            <input class="form-control" name="type_id" type="number"  value="<?php echo $row['type_id'];?>" readonly/>
                                        </div>
                            
                                        <div class="form-floating my-3 ">
                                            <label for="type_name">ชื่อประเภทสินค้า</label><br><br>
                                            <input class="form-control" name="type_name" type="text"  value="<?php echo $row['type_name'];?>" require/>
                                        </div>

                                        <div style="display: flex; justify-content: center; align-items: center;">
                                        <button style="background-color: green; color: white; border: none; padding: 15px 30px;
                                                    text-align: center; text-decoration: none; font-size: 16px; transition-duration: 0.4s;
                                                    cursor: pointer; border-radius: 12px;" onclick="location.href='category_show.php'">บันทึกข้อมูล</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
