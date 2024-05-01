<?php
ob_start();
session_start();

if(isset($_GET["Line"]))
{
    $Line = $_GET["Line"];
    $_SESSION["strProduct_id"][$Line] = "";
    $_SESSION["strQty"][$Line] = "";
}
header("location:product_cart.php");
?>

<!-- ลบสินค้าในตะกร้า -->