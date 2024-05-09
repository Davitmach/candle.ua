<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = mysqli_query($connect,"SELECT * FROM `product` WHERE `id`='$id'");
    $row = mysqli_fetch_assoc($sql);

    $name = $row['name'];
    $img = $row['img'];
    $price = $row['price'];
    $liked = $row['liked'];
    if($liked == 'true') {
        echo 'liked';
    }
    else {
        echo 'false';
    }
    $sql2 = mysqli_query($connect,"SELECT * FROM `liked` WHERE `name`='$name'");
    if(mysqli_num_rows($sql2)==0) {
        $sql3 = mysqli_query($connect,"INSERT INTO `liked`(`id`, `img`, `name`, `status`, `price`) VALUES (NULL,'$img','$name','IN STOCK','$price')");
        if($sql3) {
            $sql4 = mysqli_query($connect,"UPDATE `product` SET `liked`='true' WHERE `id`='$id'");
        }
    }
    else {
        $sql5 = mysqli_query($connect,"UPDATE `product` SET `liked`='false' WHERE `name`='$name'");
        $sql6 = mysqli_query($connect,"DELETE FROM `liked` WHERE `name`='$name'");
    }
}
?>