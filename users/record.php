<?php
require "../asset/config/dbconnect.php";
require_once "../asset/include/session.php";
$uid = $_SESSION['users'];
//print_r($uid);
   $sql = "SELECT * FROM users WHERE id = '$uid'";
   $query = mysqli_query($connectDB,$sql );
   $UserData = mysqli_fetch_assoc($query);
    //var_dump($UserData);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- links -->
     <link rel="stylesheet" href="../asset/css/bootstrap5.min.css">
    <link rel="stylesheet" href="../asset/lib/fontawsome/css/all.css">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/css/navbar.css">
</head>
<body>
    <section>
    <?php
       include "../asset/include/dash_nav.php";
      ?>
    </section>

    <section class = "container shadow  py-5">
    <form action="../asset/config/pic_witness.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <div id="my_camera"></div>
            <input type="button" class= "btn btn-primary mt-2" value = "take snap" onClick = "take_snapshot()"> <br>
        </div>
        <div class="col-md-6">
            <div id="results" name = "image"></div>
           
           
         </div>
        <div class = "text-center"> <input type="submit" name="image" class="btn btn-danger"> </div>
    </div>
   </form>
    </section>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="../asset/js/bootstrap.bundle.min.js"></script>
<script>
 
    
</script>
<!-- CSS -->
<style>
 #my_camera{
     width: 320px;
     height: 240px;
     border: 1px solid black;
}
</style>


 


<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
 Webcam.set({
     width: 320,
     height: 240,
     image_format: 'jpeg',
     jpeg_quality: 180
 });
 Webcam.attach( '#my_camera' );

// Code to handle taking the snapshot and displaying it locally 
function take_snapshot() {
 
   // take snapshot and get image data
   Webcam.snap( function(data_uri) {
       // display results in page
       document.getElementById('results').innerHTML = 
        '<img src="'+data_uri+'"/>';
    } );
}
</script>