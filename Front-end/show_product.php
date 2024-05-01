<?php
// เชื่อมต่อฐานข้อมูล
include '../connect.php'; // นำเข้าไฟล์ที่มีการเชื่อมต่อฐานข้อมูล

// ทำการ query ข้อมูลจากตาราง product
$query_product = "SELECT * FROM product as p 
INNER JOIN product_type as t 
ON p.type_id = t.type_id
ORDER BY product_id ASC";
$result_pro = mysqli_query($conn, $query_product) or die("Error in query: $query_product" . mysqli_error($conn));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>สินค้าทั้งหมด</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    .card{
        display: flex; 
        justify-content: center; 
        text-align: center;
        font-size: 16px; 
        font-family: Sarabun; 
     
    }
</style>
<?php include "menu1.php" ?>
<div class="row">
 
<?php foreach ($result_pro as $row_product){ ?>
    <div class="card" style="width: 20rem; margin-left:50px;">
    <h5 class="card-title"style="margin:10px;"><?php echo $row_product['product_name'];?></h5>
    <img class="card-img-top" src="../img/<?php echo $row_product['product_img']?>" alt="Card image cap">
    <div class="card-body">
        <p class="card-text">
           ประเภท : <?php echo $row_product['type_name'];?>
        </p>
        <p class="card-text">
            <?php echo $row_product['product_detail'];?>
        </p>
        <a href="product_detail1.php?id=<?php echo $row_product['product_id']?>" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>
    &nbsp;
    
<?php } ?>

</div>
</html>