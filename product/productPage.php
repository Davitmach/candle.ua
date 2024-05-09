<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM `product` WHERE `id` ='$id'");
    $row = mysqli_fetch_assoc($sql);
    $name = $row['name'];
    $price = $row['price'];
    $description = $row['description'];
    $img = $row['img'];
    $liked = $row['liked'];
    $data = [
        "name" => $name,
        "price" => $price,
        "description" => $description,
        "img" => $img,
        "liked"=> $liked,
        "id"=>$id
    ];
    echo json_encode($data);
}
else {
    $name = $_POST['name'];
    $sql = mysqli_query($connect, "SELECT * FROM `product` WHERE `name` ='$name'");
    $row = mysqli_fetch_assoc($sql);
    $name = $row['name'];
    $price = $row['price'];
    $description = $row['description'];
    $img = $row['img'];
    $liked = $row['liked'];
    $data = [
        "name" => $name,
        "price" => $price,
        "description" => $description,
        "img" => $img,
        "liked"=> $liked,
        "id"=>$id
    ];
    echo json_encode($data);  
}
