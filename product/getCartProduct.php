<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");
echo '
<tr>
<td><h3>PRODUCT NAME</h3></td>
<td><h3>UNIT PRICE</h3></td>
<td><h3>QUANTITY</h3></td>
<td><h3>SUBTOTAL</h3></td>
</tr>';
$sql = mysqli_query($connect, "SELECT * FROM `cart` WHERE 1");
while ($row = mysqli_fetch_assoc($sql)) {
    $total = $row['counter'] ==0? $row['price'] : $row['counter'] * $row['price'];
    echo '
    <tr>
    <td>
    <div id="Delete_like_btn" ><i class="fa-solid fa-xmark" data-cartDelId='.$row['id'].'></i></div>
    <div><img src='.$row['img'].'></div> 
    </td>
    <td><h1>'.$row['name'].'</h1></td>
    <td><span>'.$row['price'].'.00$</span></td>
    <td>
    <div class="Counter_box">
    <div id="Minus_counter" ><span data-id='.$row['id'].'>-</span></div>
    <div id="Counter"><span>'.$row['counter'].'</span></div>
    <div id="Plus_counter" ><span data-id='.$row['id'].'>+</span></div>
    </div>
    </td>
    <td>'.$total.'.00$</td>
    </tr>
    ';
}
