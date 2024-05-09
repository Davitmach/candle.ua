<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = mysqli_query($connect,"SELECT * FROM `product` WHERE `id`= '$id'");
$row = mysqli_fetch_assoc($sql);

   

 
    $data = [
        'name'=> $row['name'],
        'price'=> $row['price'],
        'description'=> $row['description'],
        'img'=> $row['img'],
            'id'=> $row['id'],
            'liked'=>$row['liked']
    ];
    echo json_encode($data);
    
}
?>