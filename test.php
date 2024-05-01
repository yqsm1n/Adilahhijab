<?php 
//เช็คว่ามีรหัสนี้อยู่ในตาราง product หรือไม่
$check = "SELECT * product WHERE product_id = '$p_id' ";
// เช็คตารางไหน เช็คด้วยอะไร
$hand = mysqli_query($conn,$check);
$num = mysqli_num_rows($hand);
if($num > 0){
    echo "<script> alert('รหัสสินค้ามีอยู่แล้ว!'); </script>" ;
    echo "<script> window.location = 'form_product_insert.php'; </script>" ;
}

?>

<?php
//$sql = "SELECT * product WHERE amount > 0 ORDER BY product_id";
$sql = "SELECT * FROM product ORDER BY product_id";
$result = mysqli_query($conn,$sql);
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
    $amount1=$row['amount'];
}
?>

<?php 
if($amount1 <= 0){ ?>
    <a class="btn btn-danger mt-3" href="#" >สินค้าหมด</a>
<?php }else{ ?>
    <a class="btn btn-outline-success mt-3" href="sh_product_detail.php?id=<?$row['product_id']?>" >สินค้าหมด</a>
<?php } ?>