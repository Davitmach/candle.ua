<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = mysqli_query($connect,"SELECT * FROM `blog` WHERE `id` = '$id'");
    if($sql) {
        $row = mysqli_fetch_assoc($sql);
        $name = $row['name'];
        echo '
        <form id="Edit_form">
        <div class="Img_box"><img src="'.$row['img'].'"></div>
        <input name="img" type="text" placeholder="Img" value="' . $row['img'] . '">
        <input name="name" type="text" placeholder="Name" value="'.$name.'">
        <input name="date" type="text" placeholder="Date" value="'.$row['date'].'">
        <input name="description" type="text" placeholder="Description" value="'.$row['description'].'">
        <input name="id" type="hidden" value="'.$row['id'].'">
        <button id="Edit_product_btn">ADD</button>
        </form>
        ';
    }
}
?>
