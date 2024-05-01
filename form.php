<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initail-scale=1.0">
        <title>รายละเอียดสินค้า</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link href="css/styles.css" rel="stylesheet" />
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
	<form action="welcome.php" method="GET">
        <div class ="container"> 	
            <div class="row">
               

                 <div class="col-md-4">
                        column
                </div>
                
                <div class="col-md-6">
                    <h4 class="product-detail-name m-text16 p-b-13 "><?= $row['product_name'] ?></h4>
					<h4 class="product-detail-name m-text16 p-b-13 "><?= $row['product_color'] ?></h4>
                        
	<label>ชื่อ : <input type="text" value="" name="fname"/></label>	<!-- ค่า name จะถูกส่งมาผ่าน input -->				
	<label>รหัสผ่าน : <input type="password" value="" name="pass"/></label> <!-- ค่า password จะถูกส่งมาผ่าน input-->	
			<br><label>เพศ : </label>
		<input type="radio" name="sex" value="ชาย" checked="checked"/>ชาย  <!-- ค่า sex - จะถูกส่งมาในรูปแบบของ Radio-->	
		<input type="radio" name="sex" value="หญิง">หญิง<br>


        <select name='product_size'>
<option value = 'S'>S</option>
<option value = 'M'>M</option>
<option value = 'L'>L</option>
<option value = 'XL'>XL</option>
<option value = 'Over Size'>Over Size</option>
</select>
		<input type="submit" value="ส่งข้อมูล">         <!-- เมื่อมีกดปุ่ม Submit ก็จะมีการส่งค่านั้นไป -->
                </div>
            </div>
        </div>
	</form>
</body>
</html>