<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");
if(isset($_POST['id'])) {
    $id = $_POST['id'];
 

   
    $sql1 = mysqli_query($connect,"SELECT * FROM `product` WHERE `id` = '$id'");
    $row1 = mysqli_fetch_assoc($sql1);
    $name= $row1['name'];
    $price = $row1['price'];
    $img = $row1['img'];
    $counter = end($explode);
    $sql2 = mysqli_query($connect,"SELECT * FROM `cart` WHERE `name` = '$name'");
    if(mysqli_num_rows($sql2) ==0) {
        $sql3 = mysqli_query($connect,"INSERT INTO `cart`(`id`, `img`, `name`, `price`, `counter`) VALUES (NULL,'$img','$name','$price','1')");

    }
    else {
        $sql4 = mysqli_query($connect,"SELECT * FROM `cart` WHERE `name` = '$name'");
        $row4 = mysqli_fetch_assoc($sql4);
        $oldCounter = $row4['counter'];
        $newCounter = $oldCounter+ 1;
        $sql5 = mysqli_query($connect,"UPDATE `cart` SET`counter`='$newCounter' WHERE `name` = '$name'");
     
    }
}
?>