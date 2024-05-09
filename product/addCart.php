<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");
if(isset($_POST['idCart'])) {
    $id = $_POST['idCart'];
$sql = mysqli_query($connect,"SELECT * FROM `product` WHERE `id` = '$id'");
if($sql) {
    $row = mysqli_fetch_assoc($sql);
    $img = $row['img'];
    $name = $row['name'];
    $price = $row['price'];
    $sql2 = mysqli_query($connect,"SELECT * FROM `cart` WHERE `name` = '$name'");
    if(mysqli_num_rows($sql2) > 0) {
        echo 1;
        $row2 = mysqli_fetch_assoc($sql2);
        $counter = $row2['counter'];
        $newCounter = $counter+1;
        $sql4 = mysqli_query($connect,"UPDATE `cart` SET `counter`='$newCounter' WHERE `name`='$name'");
    }
    else {
        $sql3 = mysqli_query($connect,"INSERT INTO `cart`(`id`, `img`, `name`, `price`, `counter`) VALUES (NULL,'$img','$name','$price','1')");
    }
   
   
}

}
?>