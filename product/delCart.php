<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = mysqli_query($connect,"DELETE FROM `cart` WHERE `id`='$id'");
    if($sql) {
        echo 1;
    }
}
?>