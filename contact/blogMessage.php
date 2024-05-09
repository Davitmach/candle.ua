<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");
if (isset($_POST['name'], $_POST['email'], $_POST['website'], $_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $message = $_POST['message'];
    if(!empty($name) && !empty($email) && !empty($website) && !empty($message)) {
        if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $sql = mysqli_query($connect,"INSERT INTO `message`(`id`, `name`, `email`, `website`, `phone`, `message`) VALUES (NULL,'$name','$email','$website','','$message')");
        if($sql) {
            echo 'true';
        }
        else {
            echo 'false';
        }
        }
        else {
            echo 'false';
        }
    }
    else {
        echo 'false';
    }


}
else {
    echo 'false';
}
