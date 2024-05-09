<?php
header("Access-Control-Allow-Origin: *");
include('../connect.php');

$sql = mysqli_query($connect,"SELECT * FROM `cart` WHERE 1 ORDER BY id DESC LIMIT 3");
if(mysqli_num_rows($sql) == 0) {
    echo '<span>NO PRODUCTS IN THE CART.</span>';
}
else {
    while($row = mysqli_fetch_assoc($sql)) {
       $counter =$row['counter'];
       $price = $row['counter'] > 1? $row['price'] * $row['counter'] : $row['price'];
        echo '
    <div class="Product_box">
    <div class="Img_box"><img src='.$row['img'].'></div>
    <div class="Info_box">
    <div id="Title_box"><h2 data-name="'.$row['name'].'">'.$row['name'].'</h2></div>
    <div class="Price_box">
    <div><span>'.$counter.' x '. $price  .'$</span></div>
    </div>
    </div>
    </div>
        ';
    }
}
?>