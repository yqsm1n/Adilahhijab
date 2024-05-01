<?php 
include 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>เข้าสู่ระบบหลังบ้าน</title>
        <!-- เรียกใช้งาน Bootstrap CSS -->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- เรียกใช้งาน fontawesome -->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:  #FDF5E6; 
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 500px;
            padding: 30px;
            background-color: #B48E43;
            border: 1px solid #ccc;
            border-radius: 30px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: relative;
            margin-left: 0px; /* ขยับการ์ดไปด้านขวา 50px */
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 50%;
            height: auto;
            
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Sarabun', sans-serif; 
            font-weight: bold;
            color: white;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-family: 'Sarabun', sans-serif; 
            font-weight: bold;
        }

        input {
            width: 92%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 15px;
            background-color: #ece5e5;
        }

        button {
            width: 50%;
            padding: 10px;
            background-color: #333399;
            color: #FFFFFF;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
            margin-top: 20px;
            font-family: 'Sarabun', sans-serif;
        }

        button:hover {
            background-color: #333399;
        }
 
    </style>
</head>

<body>
    <div class="logo">
        <img src="img/LOGO1.png" alt="Logo">
    
    <div class="card">
        <h3>เข้าสู่ระบบ</h3>
        <form method="POST" action="login_check.php">
    <div class="form-floating my-3"> 
        <input class="form-control" name="username_admin" type="text" placeholder="Enter your name" />
        <label for="">ชื่อผู้ใช้งาน</label>
    </div>
                                            
    <div class="form-floating my-3"> 
        <input class="form-control" name="admin_password" type="password" placeholder="Enter your password" />
        <label for="">รหัสผ่าน</label>                                        
    </div>                          
    <!--<?php 
        if(isset($_SESSION["Error"])) {
            echo "<div class='text-danger'>";
            echo $_SESSION["Error"];
            echo "</div>";
        }
    ?> -->
    <button type="submit" name="submit">เข้าสู่ระบบ</button>
</form>


    </div>
    </div>
</body>

</html>
