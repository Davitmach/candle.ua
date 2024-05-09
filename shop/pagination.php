<?php

include('../connect.php');
header("Access-Control-Allow-Origin: *");

$itemsPerPage = 6;

    // Fetch the total number of rows
    $totalRows = mysqli_query($connect, "SELECT COUNT(*) AS total FROM `product`");
    $totalRows = mysqli_fetch_assoc($totalRows)['total'];

    // Calculate the total number of pages
    $totalPages = ceil($totalRows / $itemsPerPage);
  for ($i = 1; $i <= $totalPages; $i++) { 
    echo' <div data-page='.$i.'>'.$i.'</div>' ;
  } 
?>