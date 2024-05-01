<?php
header('Content-Type: application/json');
include '../connect.php';

//$conn = mysqli_connect("localhost","root","","Adilahhijab");

$sqlQuery = "SELECT SUM(total_price) AS sumTotal, dateMonth FROM `order` GROUP BY dateMonth ORDER BY dateMonth";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>