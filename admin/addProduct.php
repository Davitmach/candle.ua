<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");



if (isset($_POST['name'], $_POST['price'], $_POST['img'], $_POST['description'], $_POST['tags'])) {
   
    $name = $_POST['name'];
    $img = $_POST['img'];
    $price = $_POST['price'];
    $tags = $_POST['tags'];
    $description = $_POST['description'];
   
    if (!empty($name) && !empty($img) && !empty($price) && !empty($tags) && !empty($description)) {
    
       
      
    
            $sql = mysqli_query($connect, "INSERT INTO `product`(`id`, `img`, `name`, `tags`, `description`, `price`,`liked`) VALUES (NULL,'$img','$name','$tags','$description','$price','false')");    
          if($sql) {
            echo "Successul";
          }
    
    } else {
        echo 'The fields is empty';
    }
} else {
    echo 'Information is not uploaded';
}
