<?php
header("Access-Control-Allow-Origin: *");
include('../connect.php');
$sql = mysqli_query($connect,"SELECT * FROM `cart` WHERE 1");

while($row = mysqli_fetch_assoc($sql)) {
$price = $row['price'];
$counter = $row['counter'];
$total+=$price*$counter;

}
echo $total.'.00$';
?>