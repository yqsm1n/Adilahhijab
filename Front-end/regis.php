<?php include '../connect.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>สมัครสมาชิก</title>
        <!-- เรียกใช้งาน Bootstrap CSS -->
        <link href="../css/styles.css" rel="stylesheet" />
        <!-- เรียกใช้งาน fontawesome -->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
</head>
<style>
 
</style>
<body>
    <div class="container"> <!-- จัดให้อยู่ตรงกลางหน้า -->
    <div class="row justify-content-center"> 
    <div class="col-lg-9 mt-5"> <!-- ขนาดการ์ด -->
            <div class="card shadow-lg border-0 rounded-lg mt-5"> <!-- ส่วนหัวข้อของการ์ด -->
                <div class="card-header">
                    <h3 style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 28px; " class="text-center font-weight-light my-4">สมัครสมาชิก</h3></div>
<!-- ส่วนเนื้อหาของการ์ด -->     
                <div class="card-body"> 
                    <form method="POST" action="regis_insert.php" enctype="multipart/form-data"> 
                            <div class="row mb-2">
                                <div class="col-md">

                                
                               
                               

                                <div class="form-floating my-3"> 
                                        <input class="form-control" name="first_name" input type="text" placeholder="Enter your name" />
                                        <label for="first_name"style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px; ">ชื่อ</label>

                                        
                                    <div class="form-floating my-3"> 
                                        <input class="form-control" name="last_name" input type="text" placeholder="Enter your name" />
                                        <label for=""style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px; ">นามสกุล</label><br></br>
                                        
                                    <div style="display: flex; flex-wrap: wrap;">
                                    <p style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px; ">ที่อยู่</p>
                                        <div class="form-floating my-3" style="display: flex; align-items: center; margin-right: 10px;"> 
                                            <p style="font-family: 'Sarabun', sans-serif; color: #333; font-size: 16px; margin: 0;">เลขที่</p>
                                            <input style="padding: 12px; border-radius: 5px; border: 1px solid #ccc; width: 100px; margin-left: 10px; margin-right: 10px;" class="form-control" name="number_address" input type="number" />
                                        </div>
                                        <div class="form-floating my-3" style="display: flex; align-items: center; margin-right: 10px;"> 
                                            <p style="font-family: 'Sarabun', sans-serif; color: #333; font-size: 16px; margin: 0; margin-right: 10px;">หมู่/ซอย</p>
                                            <input style="padding: 12px; border-radius: 5px; border: 1px solid #ccc; width: 100px; margin-left: 10px; margin-right: 10px;" class="form-control" name="moo_address" input type="text" />
                                        </div>
                                        <div class="form-floating my-3" style="display: flex; align-items: center; margin-right: 10px;"> 
                                            <p style="font-family: 'Sarabun', sans-serif; color: #333; font-size: 16px; margin: 0; margin-right: 10px;">ตำบล/แขวง</p>
                                            <input style="padding: 12px; border-radius: 5px; border: 1px solid #ccc; width: 160px; margin-left: 10px; margin-right: 10px;" class="form-control" name="district_address" input type="text" />
                                        </div>
                                        <div class="form-floating my-3" style="display: flex; align-items: center;"> 
                                            <p style="font-family: 'Sarabun', sans-serif; color: #333; font-size: 16px; margin: 0;">อำเภอ</p>
                                            <input style="padding: 12px; border-radius: 5px; border: 1px solid #ccc; width: 160px; margin-left: 10px; margin-right: 10px;" class="form-control" name="amphoe_address" input type="text" />
                                        </div>
                                        <div class="form-floating my-3" style="display: flex; align-items: center;"> 
                                            <p style="font-family: 'Sarabun', sans-serif; color: #333; font-size: 16px; margin: 0; margin-left: 180px;">จังหวัด</p>
                                            <input style="padding: 12px; border-radius: 5px; border: 1px solid #ccc; width: 150px; margin-left: 10px; margin-right: 10px;" class="form-control" name="province_address" input type="text" />
                                        </div>
                                        <div class="form-floating my-3" style="display: flex; align-items: center;"> 
                                            <p style="font-family: 'Sarabun', sans-serif; color: #333; font-size: 16px; margin: 0;">รหัสไปรษณีย์</p>
                                            <input style="padding: 12px; border-radius: 5px; border: 1px solid #ccc; width: 150px; margin-left: 10px; margin-right: 10px;" class="form-control" name="postalcode" input type="number" />
                                        </div>
                                    </div>
                                   
                                        <div class="form-floating my-3"> 
                                        <input class="form-control" name="user_telephone" input type="text" placeholder="Enter your name" />
                                        <label for=""style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px; ">เบอร์โทรศัพท์</label>
                                        
                                        <!-- <div class="form-floating my-3"> 
                                        <input class="form-control" name="user_email" input type="text" placeholder="Enter your name" />
                                        <label for=""style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px; ">อีเมล</label>-->
                                        
                                        <div class="form-floating my-3"> 
                                        <input class="form-control" name="user_name" input type="text" placeholder="Enter your name" />
                                        <label for=""style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px; ">ชื่อผู้ใช้งาน</label>
                                        
                                        <div class="form-floating my-3"> 
                                        <input class="form-control" name="user_password" input type="text" placeholder="Enter your name" />
                                        <label for=""style="font-family: 'Sarabun', sans-serif; font-weight: bold; color: #333; font-size: 16px; ">รหัสผ่าน</label>

                                   
     
                                        
                            
                                        <div class="d-flex align-items-center justify-content-center mt-4 mb-0 ">
                                             <button type="submit" name="save_register" class="btn btn-primary " style="font-family: 'Sarabun', sans-serif; font-weight: bold; background-color: #35B752;  border-color: #35B752; padding: 10px 50px;">สมัครสมาชิก</button>
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