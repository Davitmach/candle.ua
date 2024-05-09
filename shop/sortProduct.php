<?php

include('../connect.php');
header("Access-Control-Allow-Origin: *");

if($_POST['status'] == 'lh') {
    $itemsPerPage = 6;

    // Fetch the total number of rows
    $totalRows = mysqli_query($connect, "SELECT COUNT(*) AS total FROM `product`");
    $totalRows = mysqli_fetch_assoc($totalRows)['total'];

    // Calculate the total number of pages
    $totalPages = ceil($totalRows / $itemsPerPage);

    // Current page number
    $pageNumber = $_POST['page'] ? (int)$_POST['page'] : 1;

    // Calculate the start index for the current page
    $start = ($pageNumber - 1) * $itemsPerPage;

    // Fetch products for the current page
    $sql = mysqli_query($connect, "SELECT * FROM `product` ORDER BY `price` ASC LIMIT $start, $itemsPerPage");
    while($row = mysqli_fetch_assoc($sql)) {
        echo '
        <div class="Product_box">
       <div class="Img_container">
       <div class="Img_box"><img src='.$row['img'].'></div>
       <div class="Add_cart_btn"><button id="Add_cart_btn" data-id='.$row['id'].'>ADD TO CART</button></div>
       </div>
       <div class="Info_box">
       <div id="Title_box"><h1 data-id='.$row['id'].' >'.$row['name'].'</h1></div>
       <div class="Price_box"><span>'.$row['price'].'</span></div>
       </div>
        </div>
        ';
    }
}
else if($_POST['status'] == 'hl') {
    $itemsPerPage = 6;

    // Fetch the total number of rows
    $totalRows = mysqli_query($connect, "SELECT COUNT(*) AS total FROM `product`");
    $totalRows = mysqli_fetch_assoc($totalRows)['total'];

    // Calculate the total number of pages
    $totalPages = ceil($totalRows / $itemsPerPage);

    // Current page number
    $pageNumber = $_POST['page'] ? (int)$_POST['page'] : 1;

    // Calculate the start index for the current page
    $start = ($pageNumber - 1) * $itemsPerPage;

    // Fetch products for the current page
    $sql = mysqli_query($connect, "SELECT * FROM `product` ORDER BY `price` DESC LIMIT $start, $itemsPerPage");
    while($row = mysqli_fetch_assoc($sql)) {
        echo '
        <div class="Product_box">
       <div class="Img_container">
       <div class="Img_box"><img src='.$row['img'].'></div>
       <div class="Add_cart_btn"><button id="Add_cart_btn" data-id='.$row['id'].'>ADD TO CART</button></div>
       </div>
       <div class="Info_box">
       <div id="Title_box"><h1 data-id='.$row['id'].' >'.$row['name'].'</h1></div>
       <div class="Price_box"><span>'.$row['price'].'</span></div>
       </div>
        </div>
        ';
    }
}
else {
    $itemsPerPage = 6;

    // Fetch the total number of rows
    $totalRows = mysqli_query($connect, "SELECT COUNT(*) AS total FROM `product`");
    $totalRows = mysqli_fetch_assoc($totalRows)['total'];

    // Calculate the total number of pages
    $totalPages = ceil($totalRows / $itemsPerPage);

    // Current page number
    $pageNumber = $_POST['page'] ? (int)$_POST['page'] : 1;

    // Calculate the start index for the current page
    $start = ($pageNumber - 1) * $itemsPerPage;

    // Fetch products for the current page
    $sql = mysqli_query($connect, "SELECT * FROM `product` LIMIT $start, $itemsPerPage");
    while($row = mysqli_fetch_assoc($sql)) {
        echo '
        <div class="Product_box">
       <div class="Img_container">
       <div class="Img_box"><img src='.$row['img'].'></div>
       <div class="Add_cart_btn"><button id="Add_cart_btn" data-id='.$row['id'].'>ADD TO CART</button></div>
       </div>
       <div class="Info_box">
       <div id="Title_box"><h1 data-id='.$row['id'].' >'.$row['name'].'</h1></div>
       <div class="Price_box"><span>'.$row['price'].'</span></div>
       </div>
        </div>
        ';
    }
}
    

?>