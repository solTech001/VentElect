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
    <!-- post eye witness -->
  
    <section>
    <div class="container shadow py-5">
   <form action="../asset/config/witness.php" method="post" class ="px-2">
   <div class = "row">
      <div class="col-6">
      <h6>You are require to tick each box that applies</h6>
       <h6>Upload Type</h6>
      </div>
      <div class="col-6 d-flex">
      <div class="form-check pe-5">
         <input class="form-check-input" type="radio" value = "Video" name="flexRadioDefault" id="flexRadioDefault1">
         <label class="form-check-label" for="flexRadioDefault1">
            Video
         </label>
         </div>
         <div class="form-check">
         <input class="form-check-input" type="radio"  value = "Picture" name="flexRadioDefault" id="flexRadioDefault2" checked>
         <label class="form-check-label" for="flexRadioDefault2">
            Picture
         </label>
         </div>
      </div>
  </div>
      <div class="row">
         <div class="col-6">
            <h6>Name of the person reporting the incident</h6>
         </div>
         <div class="col-6">
            <div class="d-flex">
            <input type="text" class="form-control mb-3" name="FirstName" placeholder="First name" autocomplete="off" required>
            <input type="text" class="form-control mb-3" name="LastName" placeholder="Last name" autocomplete="off" required>   
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-6">
            <h6>Date you witness the incident</h6>
         </div>
         <div class="col-6">
            <input type="date" class="form-control mb-3" name="dates" placeholder="date" autocomplete="off" required>
         </div>
      </div>
      <div class="row">
      <div class="col-6">
         <h6>Location where incident occured</h6>
      </div>
      <div class="col-6">
         <input type="text" class="form-control mb-3" name="street" placeholder="Street Adress" autocomplete="off" required>         </div>
      </div>
      <div class="row">
      <div class="col-6">
         <!-- <h6>Location where incident occured</h6> -->
      </div>
      <div class="col-6 d-flex">
               <input type="text" class="form-control mb-3" name="ward" placeholder="ward" autocomplete="off" required>
               <input type="text" class="form-control mb-3" name="LG" placeholder="LG" autocomplete="off" required>
               <input type="text" class="form-control mb-3" name="State" placeholder="State" autocomplete="off" required>
       </div>
       <div class="row">
         <div class="col-6">
            <h6>Describe the incident that occured</h6>
         </div>
         <div class="col-6">
             <textarea name="Describe" class="form-control mb-3" style = "height:100px;"></textarea>
         </div>
      </div>
       <div class="row">
         <div class="col-6">
            <h6>How many people were injured during incident</h6>
         </div>
         <div class="col-6">
         <input type="number" class="form-control mb-3" name="Unit" placeholder="Unit" autocomplete="off" required>
         </div>
      </div>
      <div class = "text-center">
      <input type="submit" class="btn btn-primary mb-3" name="submit">

      </div>
   </form>
   </div>
    </section>
 
</body>
</html>
<script src="../asset/js/bootstrap.bundle.min.js"></script>