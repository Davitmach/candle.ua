<?php

include('../connect.php');
header("Access-Control-Allow-Origin: *");
$message = $_POST['message'];
$sql = mysqli_query($connect,"INSERT INTO `message`(`id`, `name`, `email`, `website`, `phone`, `message`) VALUES (NULL,'Unknown','Unknown','Unknown','Unknown','$message')");



?>