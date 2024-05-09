<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");
$sql = mysqli_query($connect,"SELECT * FROM `liked` WHERE 1");
 echo '<tr><td>ID</td><td>IMG</td><td>NAME</td><td>PRICE</td></tr>';
    while($row = mysqli_fetch_assoc($sql)) {
        echo "<tr><td>{$row['id']}</td><td><img src={$row['img']}></td><td>{$row['name']}</td><td>{$row['price']}$</td></tr>";
    } 
?>