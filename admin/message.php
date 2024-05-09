<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");
$sql = mysqli_query($connect,"SELECT * FROM `message` WHERE 1");
 echo '<tr><td>ID</td><td>NAME</td><td>EMAIL</td><td>MESSAGE</td></tr>';
    while($row = mysqli_fetch_assoc($sql)) {
        echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['message']}$</td></tr>";
    } 

?>