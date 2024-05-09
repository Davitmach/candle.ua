<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");

if(isset($_POST['id'])) {
   
    $id = $_POST['id'];
    $sql = mysqli_query($connect,"DELETE FROM `product` WHERE `id` ='$id'");
  
}
?>