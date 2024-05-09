<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");
if(isset($_POST['name'])) {
    $name=  $_POST['name'];
    $sql1 = mysqli_query($connect,"SELECT * FROM `product` WHERE `name`='$name'");
    $row1 = mysqli_fetch_assoc($sql1);
    if($row1['liked'] == 'true') {
        $sql2 = mysqli_query($connect,"DELETE FROM `liked` WHERE `name` = '$name'");
        if($sql2) {
            $sql3 = mysqli_query($connect,"UPDATE `product` SET `liked`='false' WHERE `name`='$name'");
        }
    }
    else {
        $sql4 = mysqli_query($connect,"SELECT * FROM `product` WHERE `name`= '$name'");
        $row4 = mysqli_fetch_assoc($sql4);
        $sql5 = mysqli_query($connect,"UPDATE `product` SET`liked`='true' WHERE `name`='$name'");
        $price = $row4['price'];
        $img = $row4['img'];
        $sql6 = mysqli_query($connect,"INSERT INTO `liked`(`id`, `img`, `name`, `status`, `price`) VALUES (NULL,'$img','$name','IN STOCK','$price')");
    }
}
?>