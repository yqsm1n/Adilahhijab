<?php
session_start(); // เรียกใช้ session_start() ก่อนเริ่มใช้งาน session ในไฟล์นี้
if(!isset($_SESSION["user_name"])) 
header("Location:user_login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Contact Me</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .button {
            margin-top: 20px; /* ปรับค่าตามต้องการ */
            width: 50px; 
            color: white; border: none; 
            padding: 10px 10px;
            text-align: center; text-decoration: none; 
            display: inline-block; 
            font-size: 16px; 
            margin: 8px 2px; 
            transition-duration: 0.4s;
            cursor: pointer; 
            border-radius: 12px;
        }
        .button1 {
            background-color: white; 
            color: black; 
            border: 2px solid #04AA6D;
        }

        .button1:hover {
            background-color: #04AA6D;
            color: white;
        }
        .button2 {
            background-color: white; 
            color: black; 
            border: 2px solid #04AA6D;
        }

        .button2:hover {
            background-color: #04AA6D;
            color: white;
        }
        .button3 {
            background-color: white; 
            color: black; 
            border: 2px solid #04AA6D;
        }

        .button3:hover {
            background-color: #04AA6D;
            color: white;
        }
        .button4 {
            background-color: white; 
            color: black; 
            border: 2px solid #04AA6D;
        }

        .button4:hover {
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body class="sb-nav-fixed">   
    <?php include 'menu1.php'; ?>     

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4 my-3">
                <div class="row">
                   
                <img src="../img/contact.jpg" width="80" height="1000" >
                   
                </div> <!-- end row -->
                
               
            </div> <!--end container -->
        </main>
        
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://
