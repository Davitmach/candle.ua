<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");
$sql = mysqli_query($connect,"SELECT * FROM `cart` WHERE 1");
$total;
while($row = mysqli_fetch_assoc($sql)) {
    $total+=$row['price'] * $row['counter'];
}
echo $total;
?>