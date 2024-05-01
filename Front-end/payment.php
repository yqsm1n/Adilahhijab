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
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <title>ช่องทางการชำระเงิน</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Fenix&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Fenix&family=Sarabun:wght@300&display=swap');
.container {
    display: flex;
    justify-content: left; /* ขยับไปทางซ้าย */
    align-items: center;
    height: 50vh;
}
.card {
    width: 900px; /* ลดความกว้างของการ์ดเพื่อให้พอดีกับเนื้อหา */
    padding: 20px;
    border-radius: 10px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    margin-top: 10px; /* ย้ายการ์ดให้ห่างจากด้านบน */
}


</style>
<body>
<?php include 'menu1.php'; ?> <br><br>  
    <div class="container"> <!-- จัดให้อยู่ตรงกลางหน้า -->
    <div class="row justify-content-center">
    <div class="col-lg-9" style="margin-left: 50px;"> 
            <div class="card shadow-lg border-0 rounded-lg mt-5"> 
                
            <div class="card-header">
    <h3 style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 28px; text-align: center; ">ช่องทางการชำระเงิน</h3>

        <hr style="border-top: 1px solid #ccc; width: 100%; margin: 10px 0;">
        <p>
            <a href="QR.php" style="text-decoration: none;"><i class="fab fa-paypal fa-2xl" style="color: #003087;"></i> QR พร้อมเพย์</a>
        </p>


    
<hr style="border-top: 1px solid #ccc; width: 100%; margin: 10px 0;">
<p style="display: flex; align-items: center;"> 
    <img src="../img/scbb.jpg" width="30" height="30" style="margin-right: 5px;"> <a href="SCB.php" style="text-decoration: none;">SCB Easy</a>
</p>


    <hr style="border-top: 1px solid #ccc; width: 100%; margin: 10px 0;">
    <p style="display: flex; align-items: center;">
    <img src="../img/kt.png" width="30" height="30" style="margin-right: 5px;"><a href="krungthai.php" style="text-decoration: none;"> Krungthai NEXT </a>
    </p>

    <hr style="border-top: 1px solid #ccc; width: 100%; margin: 10px 0;">
    <p style="display: flex; align-items: center;">
    <img src="../img/kasi.png" width="30" height="30" style="margin-right: 5px;"><a href="kasikorn.php" style="text-decoration: none;"> Kasikorn BANK </a>
    </p>

    <hr style="border-top: 1px solid #ccc; width: 100%; margin: 10px 0;">
    <p style="display: flex; align-items: center;">
    <img src="../img/k.png" width="30" height="30" style="margin-right: 5px;"><a href="KPlus.php" style="text-decoration: none;"> K PLUS </a>
    </p>

    <hr style="border-top: 1px solid #ccc; width: 100%; margin: 10px 0;">
    <p>
            <a href="QR.php" style="text-decoration: none;"><i class="fa-solid fa-sack-dollar fa-2xl" style="color: #003087;"></i></i> เงินสด </a>
        </p>

  



    
</div>

                </div>
            </div>
        </div>
    </div>
</div>
