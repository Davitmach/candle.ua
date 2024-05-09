<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");

if(isset($_POST['name'],$_POST['img'],$_POST['description'],$_POST['date'],$_POST['id'])) {
  if(!empty($_POST['name']) && !empty($_POST['img'])  &&$_POST['id'] && !empty($_POST['description']) && !empty($_POST['date'])) {
    $name = $_POST['name']; 
    $id = $_POST['id'];
    $img = $_POST['img'];
    $date = $_POST['date'];
    $description = $_POST['description'];
  

    $sql = mysqli_query($connect,"UPDATE `blog` SET `img`='$img',`name`='$name',`date`='$date',`description`='$description' WHERE `id`='$id'");
   
  }
}
?>