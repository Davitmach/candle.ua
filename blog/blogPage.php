<?php
include('../connect.php');
header("Access-Control-Allow-Origin: *");
$itemsPerPage = 3;

    // Fetch the total number of rows
    $totalRows = mysqli_query($connect, "SELECT COUNT(*) AS total FROM `blog`");
    $totalRows = mysqli_fetch_assoc($totalRows)['total'];

    // Calculate the total number of pages
    $totalPages = ceil($totalRows / $itemsPerPage);

    // Current page number
    $pageNumber = $_POST['page'] ? (int)$_POST['page'] : 1;

    // Calculate the start index for the current page
    $start = ($pageNumber - 1) * $itemsPerPage;

    // Fetch products for the current page
    $sql = mysqli_query($connect, "SELECT * FROM `blog` LIMIT $start, $itemsPerPage");
    while($row = mysqli_fetch_assoc($sql)) {
        echo '
        <div class="Blog_box">
        <div class="Img_box"><img src='.$row['img'].'></div>
        <div class="Info_box">
        <div class="Date_box"><p>POSTED AT '.$row['date'].'H IN CANDLES, HANDMADE BY ANNA GRAY</p></div>
        <div class="Title_box"><h1>'.$row['name'].'</h1></div>
        <div class="Description_box"><p>'.$row['description'].'</p></div>
        <div class="Read_more_btn"><button id="Read_more" data-id='.$row['id'].'>READ MORE</button></div>
        </div>
        </div>
        ';
    }



    
?>