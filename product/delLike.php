<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");

if(isset($_POST['delId'])) {
    
    $id = $_POST['delId'];
  
  $sql = mysqli_query($connect,"SELECT * FROM `liked` WHERE `id`= '$id'");
  $row = mysqli_fetch_assoc($sql);
  $name = $row['name'];
  $sql2 = mysqli_query($connect,"UPDATE `product` SET `liked`='false' WHERE `name`= '$name'");
if($sql2) {
    $sql3 = mysqli_query($connect,"DELETE FROM `liked` WHERE `id` = '$id'");
}
}
?>