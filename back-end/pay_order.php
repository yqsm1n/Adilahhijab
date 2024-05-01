<?php include '../connect.php'; 
$ids=$_GET['id'];

$sql = "UPDATE `order` SET order_status = 2 WHERE orderID='$ids'";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('ปรับสถานะการชำระเงินเรียบร้อย');</script>";
    echo "<script>window.location = 'show_order.php';</script>";
}else{
    echo "<script> alert('ไม่สามารถปรับสถานะการชำระเงินได้');</script>";
}
mysqli_close($conn);
?>