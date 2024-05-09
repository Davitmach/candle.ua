<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");

$totalInfo = $_POST['total'];
$explode = explode('.',$totalInfo);
$id = $explode[0];
if($explode[1] == 'minus') {
    
$sql1 = mysqli_query($connect,"SELECT * FROM `cart` WHERE `id` = '$id'");
$row = mysqli_fetch_assoc($sql1);
$counter = $row['counter'];
if($counter >1) {
    $newCounter = $counter-1;
  $sql2 = mysqli_query($connect,"UPDATE `cart` SET `counter`='$newCounter' WHERE `id`='$id'");
  echo 'CART UPDATED.';
}

}
else {
    $sql1 = mysqli_query($connect,"SELECT * FROM `cart` WHERE `id` = '$id'");
    $row = mysqli_fetch_assoc($sql1);
    $counter = $row['counter'];
   
        $newCounter = $counter+1;
      $sql2 = mysqli_query($connect,"UPDATE `cart` SET `counter`='$newCounter' WHERE `id`='$id'");
      echo 'CART UPDATED.';
    
}
?>