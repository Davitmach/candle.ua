<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");
if(isset($_POST['name'])) {
    $name = $_POST['name'];
    $sql1 = mysqli_query($connect,"SELECT * FROM `product` WHERE `name` = '$name'");
    $row1 = mysqli_fetch_assoc($sql1);
    $insertName = $row1['name'];
    $insertPrice = $row1['price'];
    $insertImg = $row1['img'];
    $sql2 = mysqli_query($connect,"SELECT * FROM `cart` WHERE `name` = '$name'");
if(mysqli_num_rows($sql2) == 0) {
    $sql3 = mysqli_query($connect,"INSERT INTO `cart`(`id`, `img`, `name`, `price`, `counter`) VALUES (NULL,'$insertImg','$insertName','$insertPrice','1')");
}
   else {
    $row2 = mysqli_fetch_assoc($sql2);
    $counter = $row2['counter'];
    $newCounter  = $counter +1;
    $sql3 = mysqli_query($connect,"UPDATE `cart` SET `counter`='$newCounter' WHERE `name` = '$name'");
   }
   $sql4 = mysqli_query($connect,"UPDATE `product` SET `liked`='false' WHERE `name` = '$name'");
$sql5 = mysqli_query($connect,"DELETE FROM `liked` WHERE `name` = '$name'");

}
?>