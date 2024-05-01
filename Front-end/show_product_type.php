<?php 
$type_id = $_GET['type_id'];
//echo $type_id;
//exit;

// ทำการ query ข้อมูลจากตาราง product
$query_product_type = "SELECT * FROM product_type as p 
INNER JOIN product_type as t 
ON p.type_id = t.type_id
WHERE p.type_id = t.type_id
ORDER BY product_id ASC";
$result_pro = mysqli_query($conn, $query_product_type) or die("Error in query: $query_product_type" . mysqli_error($conn));

?>

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