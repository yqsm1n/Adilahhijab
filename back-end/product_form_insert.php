<?php include '../connect.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>เพิ่มสินค้า</title>
        <!-- เรียกใช้งาน Bootstrap CSS -->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- เรียกใช้งาน fontawesome -->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
</head>
<style>

</style>
<body>
<?php include 'menu.php'; ?>
    <div class="container"> <!-- จัดให้อยู่ตรงกลางหน้า -->
    <div class="row justify-content-center"> 
    <div class="col-lg-9 mt-5"> <!-- ขนาดการ์ด -->
            <div class="card shadow-lg border-0 rounded-lg mt-5"> <!-- ส่วนหัวข้อของการ์ด -->
                <div class="card-header">
                    <h3 style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 28px; " class="text-center font-weight-light my-4">เพิ่มสินค้า</h3></div>
<!-- ส่วนเนื้อหาของการ์ด -->     
                <div class="card-body"> 
                    <form method="POST" action="product_insert.php" enctype="multipart/form-data"> 
                            <div class="row mb-2">
                                <div class="col-md">

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

                                <div class="form-floating my-3"> 
                                        <input class="form-control" name="product_name" input type="text" placeholder="Enter your name" />
                                        <label for="product_name"style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px; ">ชื่อสินค้า</label>

                                        
                                    <div class="form-floating my-3"> 
                                        <input class="form-control" name="product_detail" input type="text" placeholder="Enter your name" />
                                        <label for="product_detail"style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px; ">รายละเอียดสินค้า</label>

                                    <div class="form-floating my-3"> 
                                        <input class="form-control" name="product_color" input type="text" placeholder="Enter your name" />
                                        <label for="product_color"style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px; ">สี</label>
                                       
                                        
                                    <div class="form-floating my-3"> 
                                        <p style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px; ">เพิ่มรูปภาพ</p>
                                        <label for="product_img" style="font-weight: bold; color: #333; font-size: 16px; margin-bottom: 8px;"></label>
                                        <input type="file" id="image" name="product_img" accept="image/*" style="padding: 8px; border-radius: 5px; border: 1px solid #ccc; width: 100%; margin-bottom: 12px;">
                                    
                                    <div class="form-floating my-3"> 
                                        <p style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px; ">เพิ่มรูปภาพ</p>
                                        <label for="product_img2" style="font-weight: bold; color: #333; font-size: 16px; margin-bottom: 8px;"></label>
                                        <input type="file" id="image" name="product_img2" accept="image/*" style="padding: 8px; border-radius: 5px; border: 1px solid #ccc; width: 100%; margin-bottom: 12px;">

                                    <div class="form-floating my-3"> 
                                        <p style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px; ">เพิ่มรูปภาพ</p>
                                        <label for="product_img3" style="font-weight: bold; color: #333; font-size: 16px; margin-bottom: 8px;"></label>
                                        <input type="file" id="image" name="product_img3" accept="image/*" style="padding: 8px; border-radius: 5px; border: 1px solid #ccc; width: 100%; margin-bottom: 12px;">

                                    
                                    <div style="display: flex; flex-wrap: wrap;">
                                    <p style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px; ">จำนวน</p>
                                        <div class="form-floating my-3" style="display: flex; align-items: center; margin-right: 10px;"> 
                                            <p style="font-family: 'Sarabun', sans-serif; color: #333; font-size: 16px; margin: 0;">ไซต์ S</p>
                                            <input style="padding: 12px; border-radius: 5px; border: 1px solid #ccc; width: 100px; margin-left: 10px; margin-right: 10px;" class="form-control" name="size_s" input type="number" />ตัว
                                        </div>
                                        <div class="form-floating my-3" style="display: flex; align-items: center; margin-right: 10px;"> 
                                            <p style="font-family: 'Sarabun', sans-serif; color: #333; font-size: 16px; margin: 0; margin-right: 10px;">ไซต์ M</p>
                                            <input style="padding: 12px; border-radius: 5px; border: 1px solid #ccc; width: 100px; margin-left: 10px; margin-right: 10px;" class="form-control" name="size_m" input type="number" />ตัว
                                        </div>
                                        <div class="form-floating my-3" style="display: flex; align-items: center; margin-right: 10px;"> 
                                            <p style="font-family: 'Sarabun', sans-serif; color: #333; font-size: 16px; margin: 0; margin-right: 10px;">ไซต์ L</p>
                                            <input style="padding: 12px; border-radius: 5px; border: 1px solid #ccc; width: 100px; margin-left: 10px; margin-right: 10px;" class="form-control" name="size_l" input type="number" />ตัว 
                                        </div>
                                        <div class="form-floating my-3" style="display: flex; align-items: center;"> 
                                            <p style="font-family: 'Sarabun', sans-serif; color: #333; font-size: 16px; margin: 0;">ไซต์ XL</p>
                                            <input style="padding: 12px; border-radius: 5px; border: 1px solid #ccc; width: 100px; margin-left: 10px; margin-right: 10px;" class="form-control" name="size_xl" input type="number" />ตัว
                                        </div>
                                        
                                        <div class="form-floating my-3" style="display: flex; align-items: center; margin:310px;"> 
                                            <p style="font-family: 'Sarabun', sans-serif; color: #333; font-size: 16px; margin: 0;">Over size</p>
                                            <input style="padding: 12px; border-radius: 5px; border: 1px solid #ccc; width: 100px; margin-left: 10px; margin-right: 10px;" class="form-control" name="over_size" input type="number" />ตัว
                                        </div>
                                    </div>

                                    <div style="display: flex; flex-wrap: wrap;">
                                    <p style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px; ">ราคาสินค้า</p>
                                        <div class="form-floating my-3" style="display: flex; align-items: center; margin-right: 10px;"> 
                                            <p style="font-family: 'Sarabun', sans-serif; color: #333; font-size: 16px; margin: 0;">ราคาต้นทุน</p>
                                            <input style="padding: 12px; border-radius: 5px; border: 1px solid #ccc; width: 300px; margin-left: 10px; margin-right: 10px;" class="form-control" name="cost_price" input type="number" />บาท
                                        </div>
                                        <div class="form-floating my-3" style="display: flex; align-items: center; margin-right: 10px;"> 
                                            <p style="font-family: 'Sarabun', sans-serif; color: #333; font-size: 16px; margin: 0; margin-right: 10px;">ราคาขาย</p>
                                            <input style="padding: 12px; border-radius: 5px; border: 1px solid #ccc; width: 300px; margin-left: 10px; margin-right: 10px;" class="form-control" name="product_price" input type="number" />บาท
                                        </div>
                                    </div>

                                   <!-- <div class="form-floating my-3"> 
                                        <input class="form-control" name="product_amount" input type="number" placeholder="Enter your name" />
                                        <label for="product_amount"style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px; ">จำนวน</label><br><br> -->
                                        
                            
                                        <div class="d-flex align-items-center justify-content-center mt-4 mb-0 ">
                                             <button type="submit" name="save_product" class="btn btn-primary " style="font-family: 'Sarabun', sans-serif; font-weight: bold; background-color: #35B752;  border-color: #35B752; padding: 10px 50px;">บันทึกข้อมูล</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
    </div>                                     
</div>

</body>
</html>