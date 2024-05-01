<?php
include '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ไซต์สินค้า</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css/" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Fenix&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Fenix&family=Sarabun:wght@300&display=swap');
    /* styles.css */



.button-add-product:hover {
    background-color: darkgreen;
}

/* ปรับแต่งตาราง */
.table {
    width: 70%;
    margin: 20px auto 0;
    margin-bottom: 1rem;
    color: #212529;
    border-collapse: collapse;

}

.table th{
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
    font-family: 'Sarabun', sans-serif; 
    font-weight: Bold;
    
    
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #EBEDEF;
}

.table td{
    background-color: #EBEDEF;
    font-family: 'Sarabun', sans-serif; 
    text-align: center;
}


 
/* เพิ่มกรอบสีเข้มรอบตาราง */
.card {
    border: 2px solid #EBEDEF;
    border-radius: 8px;
    padding: 10px;
    
}


</style>

<body class="sb-nav-fixed">
<div id="layoutSidenav_content">
        <main>
                    <div class="card-body" style="margin: 190px;">
                    <table class="table table-striped">
    <thead>
        <tr>
            <th>ชื่อไซต์สินค้า</th>
            <th>รายละเอียดไซต์</th>
        </tr>
    </thead>
    <?php
include '../connect.php';

$sql = "SELECT * FROM product_size";
$result = mysqli_query($conn, $sql);
?>
<!-- HTML code -->
<body class="sb-nav-fixed">
    <table class="table table-striped">
        <tbody>
            <?php while ($row = mysqli_fetch_array($result)) : ?>
            <tr style="text-align: center;">
                <td><?=$row['size_name'] ?></td>
                <td><?=$row['size_detail']?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>  
                
     
    </table>
</body>

</table>
</main>
</body>
</html>