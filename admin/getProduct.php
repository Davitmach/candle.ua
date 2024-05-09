<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");

$sql = mysqli_query($connect,"SELECT * FROM `product` WHERE 1");

if($sql) {
    echo '<tr><td>ID</td><td>IMG</td><td>NAME</td><td>TAGS</td><td>DESCRIPTION</td><td>PRICE</td><td>ACTIONS</td></tr>';
    while($row = mysqli_fetch_assoc($sql)) {
        echo "<tr><td>{$row['id']}</td><td><img src={$row['img']}></td><td>{$row['name']}</td><td>{$row['tags']}</td><td>{$row['description']}</td><td>{$row['price']}$</td><td><button id='Delete_btn' data-iddel={$row['id']}>Delete</button><button id='Edit_btn' data-idedit={$row['id']}>Edit</button></td><input id='Id_product' type='hidden' value={$row['id']}></tr>";
    }
}   

?>