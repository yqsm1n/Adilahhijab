<?php
include 'connect.php';
session_start();
if (isset($_SESSION['user_name'])) {
	$user_name = $_SESSION['user_name'];
}
	
?>

<!DOCTYPE html>
		<html lang="en">
		<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
    .nav-item {
     font-family: 'Sarabun', sans-serif;
     font-weight: bold;
     color: #333;
     font-size: 16px;
    }
    </style>
</head>
<body class="animsition">
<?php include 'front-end/menu1.php'; ?>
<div class="container bgwhite p-t-35 p-b-80">  
<div class="flex-w flex-sb">
					<div class="w-size13 p-t-30 respon5">
						<div class="wrap-slick3 flex-sb flex-w">               
<!-- ส่วนเนื้อหาของการ์ด -->     
<div class="slick3"> 
                    <form method="POST" action="product_insert.php" enctype="multipart/form-data"> 
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    							<div class="carousel-indicators">
        							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    							</div>
    							<div class="carousel-inner">
        							<div class="carousel-item active">
            							<img src="../img/<?= $row['product_img'] ?>" class="d-block w-100" alt="...">
        							</div>
        							<div class="carousel-item">
            							<img src="../img/<?= $row['product_img2'] ?>" class="d-block w-100" alt="...">
        							</div>
        							<div class="carousel-item">
            							<img src="../img/<?= $row['product_img3'] ?>" class="d-block w-100" alt="...">
        							</div>
    							</div>
    								<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
        								<span class="visually-hidden">Previous</span>
    								</button>
    								<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        								<span class="carousel-control-next-icon" aria-hidden="true"></span>
        								<span class="visually-hidden">Next</span>
    								</button>
								</div>
							</div>
						</div>
					</div>

					<div class="w-size14 p-t-30 respon5">
						<h4 class="product-detail-name m-text16 p-b-13 "><?= $row['product_name'] ?></h4>
						<h4 class="product-detail-name m-text16 p-b-13 "><?= $row['product_color'] ?></h4>
						
						<span class="m-text17">
							฿<?= $row['product_price'] ?>
						</span>
                        <div class="p-t-33 p-b-60">
							<div class="flex-m flex-w p-b-10">
                   
                            <div class="flex-m flex-w p-b-10">
                            <label for="type" style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px;">ประเภทสินค้า</label>
                            <select id="type" name="type_id" style="padding: 12px; font-family: 'Sarabun', sans-serif; border-radius: 5px; border: 1px solid #ccc; width: 300px; margin:15px;">

                                   <?php 
                                        $sql = "SELECT * FROM product_type ORDER BY type_name";
                                        $hand = mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_array($hand)){
                                    ?>
                                        <option value="<?=$row['type_id']?>"><?=$row['type_name']?></option> 
                                    <?php
                                    }
                                        mysqli_close($conn); 
                                    ?> 
                            </select> 

                               
                               <!-- <label for="type" style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px;">ไซต์สินค้า</label> 
                                <select id="type" name="size_id" style="padding: 12px; font-family: 'Sarabun', sans-serif; border-radius: 5px; border: 1px solid #ccc; width: 200px; margin:15px;">
                                    
                                <option value="size_S">S</option>
                                    <option value="size_M">M</option>
                                    <option value="size_L">L</option>
                                    <option value="size_XL">XL</option>
                                    <option value="over_size">Over Size</option>
                                </select> -->

                               
                                        
                            
                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0 ">
                                <button type="submit" name="save_product" class="btn btn-primary " style="font-family: 'Sarabun', sans-serif; font-weight: bold; background-color: #35B752;  border-color: #35B752; padding: 10px 50px;">บันทึกข้อมูล</button>
                            </div>
                            
                        </div>
                        </div> 
                    </form>
                </div>                    
                </div>
            </div>
        </div>        
</div>
</body>
