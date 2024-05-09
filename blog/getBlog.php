<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");

$sql = mysqli_query($connect,"SELECT * FROM `blog` WHERE 1    LIMIT 0,4");
while($row = mysqli_fetch_assoc($sql)) {
    $description = $row['description'];
    $name = $row['name'];
    if(strlen($description)>70) {
        $description = substr($description,0,70) . '...';
    }
    else {
        $description = $description;
    }
    if(strlen($name)>14) {
        $name = substr($name,0,14) . '...';
    }
    else {
        $name = $name;
    }
    echo '
    <div class="Blog_box">
    <div class="Img_box">
    <div class="Img"><img data-id='.$row['id'].' src='.$row['img'].'></div>
    <div class="Date_box"><h1>SEP 26</h1></div>
    </div>
    <div class="Info_box">
    <div class="Title_box"><span>CANDLES HANDMADE</span></div>
    <div class="Name_box" id="Btn"><h1 data-id='.$row['id'].'>'.$name.'</h1></div>
    <div class="Description_box"><p>'. $description .'</p></div>
    </div>
    </div>
    ';
}
?>