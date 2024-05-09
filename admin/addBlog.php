<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");



if (isset($_POST['name'], $_POST['img'], $_POST['date'], $_POST['description'])) {
   
    $name = $_POST['name'];
    $img = $_POST['img'];
$date  =$_POST['date'];
    $description = $_POST['description'];
   
    if (!empty($name) && !empty($img) && !empty($date)  && !empty($description)) {
    
       
      
    
            $sql = mysqli_query($connect, "INSERT INTO `blog`(`id`, `img`, `name`, `date`, `description`) VALUES (NULL,'$img','$name','$date','$description')");    
          if($sql) {
            echo "Successul";
          }
    
    } else {
        echo 'The fields is empty';
    }
} else {
    echo 'Information is not uploaded';
}