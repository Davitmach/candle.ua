<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");

if(isset($_POST['name'],$_POST['img'],$_POST['price'],$_POST['description'],$_POST['tags'],$_POST['id'])) {
  if(!empty($_POST['name']) && !empty($_POST['img']) && !empty($_POST['price']) &&$_POST['id'] && !empty($_POST['description']) && !empty($_POST['tags'])) {
    $name = $_POST['name']; 
    $id = $_POST['id'];
    $img = $_POST['img'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $tags = $_POST['tags'];

    $sql = mysqli_query($connect,"UPDATE `product` SET `img`='$img',`name`='$name',`tags`='$tags',`description`='$description',`price`='$price' WHERE `id` = '$id'");
   
  }
}
?>