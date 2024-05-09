<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");

$sql = mysqli_query($connect,"SELECT * FROM `product` ORDER BY RAND() LIMIT 4");
$data;
while($row = mysqli_fetch_assoc($sql)) {
   echo '
   
   <div class="Product_box">
   <div class="Img_box"><img src='.$row['img'].'>
   <button data-id='.$row['id'].'>ADD TO CART</button>
   </div>
   <div class="Info_box">
   <div class="Title_box" id="Title"><a data-id='.$row['id'].'>'.$row['name'].'</a></div>
   <div class="Price_box"><span>$'.$row['price'].'.00</span></div>
   </div>
   </div>
   ';
};

?>