<?php session_start()?>
<?php include('connect.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>product</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
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
        

     
    .container-fluid {
     font-family: 'Sarabun', sans-serif;
     color: #333;
     font-size: 16px;
    }
  
    </style>
</head>
<body>   
    <div class="container">
       <!-- <?php include('navbar2.php');?>
        <img src="banner.png" class="img-fluid" alt="Responsive image">
        <?php include('navbar.php');?>   -->

        <div class="row">
            <div class="col-md-10">
                <!--<?php
                    //เป็นการประกาศค่าและตรวจสอบตัวแปร
                    $act = (isset($_GET['act']) ? $_GET['act']: '');
                    if($act == 'showbytype'){
                    include('show_product_type.php');
                    }else{
                    include('show_product.php');
                    }
                    ?>
            </div>
        </div>-->
    </div>
                      
</body>
</html>
   