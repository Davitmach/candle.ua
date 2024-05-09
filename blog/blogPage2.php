<?php
include('../connect.php');

header("Access-Control-Allow-Origin: *");







if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = mysqli_query($connect,"SELECT * FROM `blog` WHERE `id`='$id'");
    $row = mysqli_fetch_assoc($sql);
    echo '
    <div class="Blog_page">
    <div class="Img_box"><img src='.$row['img'].'></div>
    <div class="Info_box">
    <div class="Date_box"><p>POSTED AT '.$row['date'].'H IN CANDLES, HANDMADE BY ANNA GRAY</p></div>
    <div class="Title_box"><h1>'.$row['name'].'</h1></div>
    <div class="Description_box"><p>'.$row['description'].'</p></div>
    <div class="Quite_box"><p>Lacinia quis vel eros donec. Dolor sit amet consectetur adipiscing elit duis tristique sollicisti tudin nibh. Lacus sed turpis tincidunt id aliquet risus feugiat in ante. Egestas quis ipsumeme suspendisse ultrices. Quis enim lobortis.</p></div>
    <div class="Description2_box"><p>Nunc scelerisque viverra mauris in aliquam sem fringilla ut. Auctor neque vitae tempus quam. At varius vel pharetra vel. Consec tetur adipiscing elit pellentesque habitant morbi tristique. Consectetur adipiscing elit ut aliquam purus sit amet luctus ven enatis. Imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada. Non diam phasellus vestibulum lorem sed. Nisi scelerisque eu ultrices vitae auctor eu. Et molestie ac feugiat sed. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat. Orci ac auctor augue mauris augue. Fringilla ut morbi tincidunt augue. Rhoncus aenean vel elit scelerisque mauris pellen tesque pulvinar. Platea dictumst quisque sagittis purus sit amet volutpat. Malesuada proin libero nunc consequat interdum varius sit amet mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada pellentesque.</p></div>
    <div class="Img_box">
    <div><img src="https://bridge492.qodeinteractive.com/wp-content/uploads/2021/05/blog-single-img-01.jpg"></div>
    <div><img src="https://bridge492.qodeinteractive.com/wp-content/uploads/2021/05/blog-single-img-02.jpg"></div>
    </div>
    <div class="Description3_box"><p>Nunc scelerisque viverra mauris in aliquam sem fringilla ut. Auctor neque vitae tempus quam. At varius vel pharetra vel. Consec tetur adipiscing elit pellentesque habitant morbi tristique. Consectetur adipiscing elit ut aliquam purus sit amet luctus ven enatis. Imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada. Non diam phasellus vestibulum lorem sed. Nisi scelerisque eu ultrices vitae auctor eu. Et molestie ac feugiat sed. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat. Orci ac auctor augue mauris augue. Fringilla ut morbi tincidunt augue. Rhoncus aenean vel elit scelerisque mauris pellen tesque pulvinar. Platea dictumst quisque sagittis purus sit amet volutpat. Malesuada proin libero nunc consequat interdum varius sit amet mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada pellentesque.</p></div>
    
    </div>

  
    </div>
    </div>
    ';
    
}


?>