<?php
header("Access-Control-Allow-Origin: *");
include('../connect.php');
$sql = mysqli_query($connect,"SELECT * FROM `liked` WHERE 1");
$row = mysqli_fetch_all($sql);
echo count($row);
?>