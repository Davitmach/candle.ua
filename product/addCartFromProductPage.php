<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");
if (isset($_POST['totalInfo'])) {
    $totalInfo = $_POST['totalInfo'];
    $explode = explode('.', $totalInfo);
    $counter = end($explode);
    $name = $explode[0];
    $sql = mysqli_query($connect, "SELECT * FROM `cart` WHERE `name`= '$name'");
    if (mysqli_num_rows($sql) == 0) {
        $sql2 = mysqli_query($connect, "SELECT * FROM `product` WHERE `name`= '$name'");
        $row2 = mysqli_fetch_assoc($sql2);
        $price = $row2['price'];
        $img = $row2['img'];
        $sql3 = mysqli_query($connect,"INSERT INTO `cart`(`id`, `img`, `name`, `price`, `counter`) VALUES (NULL,'$img','$name','$price','$counter')");
    }
    else {
        $sql4 = mysqli_query($connect,"SELECT * FROM `cart` WHERE `name` = '$name'");
        $row4 = mysqli_fetch_assoc($sql4);
        $oldCounter = $row4['counter'];
        $newCounter = $oldCounter+$counter;
        $sql5 = mysqli_query($connect,"UPDATE `cart` SET `counter`='$newCounter' WHERE `name`= '$name'");
    }
}
