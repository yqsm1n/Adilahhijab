<body class="animsition">
			<?php include 'menu1.php'; ?>
			<!-- Product Detail -->
			<div class="container bgwhite p-t-35 p-b-80">
				<div class="flex-w flex-sb">
					<div class="w-size13 p-t-30 respon5">
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


								
								

					<div class="w-size14 p-t-30 respon5">
						<h4 class="product-detail-name m-text16 p-b-13 "><?= $row['product_name'] ?></h4>
						<h4 class="product-detail-name m-text16 p-b-13 "><?= $row['product_color'] ?></h4>
						<span class="m-text17">
							฿<?= $row['product_price'] ?>
						</span>

						<!--<p><?= $row['product_detail'] ?></p>-->

						<div class="p-t-33 p-b-60">
							<div class="flex-m flex-w p-b-10">


							
                            
								<form name="form-size" method="POST" action="insert_cart.php" enctype="multipart/form-data">
    								<div class="flex-m flex-w p-b-10">
        								<label style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px;">Size : </label>
        								<select name="product_size" style="padding: 12px; font-family: 'Sarabun', sans-serif; border-radius: 5px; border: 1px solid #ccc; width: 400px; margin:15px;">
            								<option value="S">S</option>
            								<option value="M">M</option>
            								<option value="L">L</option>
            								<option value="XL">XL</option>
            								<option value="Over Size">Over Size</option>
        								</select>
    								</div>
								</form>
							</div>
						</div>

						<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
							<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
								รายละเอียดไซต์สินค้า
								<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
								<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
							</h5>

							<div class="dropdown-content dis-none p-t-15 p-b-23">
								<img src="../img/table_size.jpg" width="500px" height="200px">
							</div>
						</div>

						<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
							<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
								รายละเอียดสินค้า
								<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
								<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
							</h5>

							<div class="dropdown-content dis-none p-t-15 p-b-23">
								<p class="s-text8">
									<?= $row['product_detail'] ?>
								</p>
							</div>
						</div><br></br>



						<!--<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>-->


						<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10 ml-auto">
							<a href="order.php?product_id=<?= $row['product_id'] ?>">
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									<i class="fa-solid fa-cart-plus fa-xl" style="color: #ffffff;"></i> เพิ่มลงตะกร้า
								</button>
							</a>
							
						</div>
						
	
	

					</div>
				</div>
			</div>
			</div>
			</div>
			</div>
	<?php
	} else {
		echo "ไม่พบข้อมูลสินค้า";
	}
} else {
	echo "Product ID is not set";
}
	?>