<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql2 = mysqli_query($connect,"SELECT * FROM `product` WHERE `id`= '$id'");
$row2 = mysqli_fetch_assoc($sql2);

   

 
    $data2 = [
        'name'=> $row2['name'],
        'price'=> $row2['price'],
        'description'=> $row2['description'],
        'img'=> $row2['img'],
    'id'=> $row2['id'],
  
    ];
    echo json_encode($data2);
  
}
?>