<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");
echo '
<tr>
<td><h3>PRODUCT NAME</h3></td>
<td><h3>UNIT PRICE</h3></td>
<td><h3>STOCK STATUS</h3></td>
</tr>';
$sql = mysqli_query($connect, "SELECT * FROM `liked` WHERE 1");
while ($row = mysqli_fetch_assoc($sql)) {
    echo '
    <tr>
    <td>
    <div id="Delete_like_btn" ><i class="fa-solid fa-xmark" data-delId='.$row['id'].'></i></div>
    <div><img src='.$row['img'].'></div>
    <div><h1>'.$row['name'].'</h1></div>
    <div><button id="Open_mini_product_btn" data-id='.$row['id'].'>QUICK VIEW</button></div>
    </td>
    <td><span>$'.$row['price'].'</span></td>
    <td><h2>'.$row['status'].'</h2></td>
    <td><button id="Add_cart_btn" data-name="'.$row['name'].'">ADD TO CART</button></td>
    </tr>
    ';
}
