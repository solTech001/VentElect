<?php
require "../asset/config/dbconnect.php";
require_once "../asset/include/session.php";
$uid = $_SESSION['users'];
//print_r($uid);
   $sql = "SELECT * FROM users WHERE id = '$uid'";
   $query = mysqli_query($connectDB,$sql );
   $UserData = mysqli_fetch_assoc($query);
   //  var_dump($UserData);
    $userID = $UserData["account_uid"];
    

   $sql = "SELECT * FROM result WHERE userId = '$userID'";
   $query = mysqli_query($connectDB,$sql );
   $Userdata = mysqli_fetch_assoc($query);
   //var_dump($Userdata);
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

   <section class = "container py-5 shadow">
   
   <div>
      <h4 class = "bold"> Uploaded Result </h4>
   <img src="../asset/img/results/<?php
          $img = $Userdata['electionImg'];
          echo "$img?".mt_rand();
         ?>
         alt="profile_img" class="img-thumbnail d-block mx-auto">
   </div>
   </section>













  

   <!-- post picture -->
      <section class = "d-none">
      <h5>Eye Witness</h5>
      <form action="" method="post">
         <label for="">
            <h6>Capture live events</h6>
            <input type="file" class="form-control mb-3" name="picture" placeholder="picture" required >
            <button type="submit" name="uploadPic" value="uploadPic" class="btn btn-primary mb-3">add picture</button>
         </label>
      </form>
      <form action="" method="post">
         <label for="">
            <h6>Video live events</h6>
            <input type="file" class="form-control mb-3" name="picture" placeholder="picture" required >
            <button type="submit" name="uploadPVid" value="uploadPVid" class="btn btn-primary mb-3">add Video</button>
         </label>
      </form>
      </section>
   <!-- post video -->

 


      <!-- post result -->

      <section class = "d-none">
         <form action="../asset/config/election_result.php" method="post">
            <h4 class="card-title text-center">Elections Result</h4>
               <input type="text" class="form-control mb-3" name="FirstName" placeholder="First name" autocomplete="off" required>
               <input type="text" class="form-control mb-3" name="LastName" placeholder="Last name" autocomplete="off" required>
               <input type="date" class="form-control mb-3" name="date" placeholder="date" autocomplete="off" required>
               <div class="form-group">
               <input type="text" class="form-control mb-3" name="polling unit" placeholder="polling unit" autocomplete="off" required>
               <input type="text" class="form-control mb-3" name="ward" placeholder="ward" autocomplete="off" required>
               <input type="text" class="form-control mb-3" name="LG" placeholder="LG" autocomplete="off" required>
               <input type="text" class="form-control mb-3" name="State" placeholder="State" autocomplete="off" required>
               </div>
               <input type="file" value="upload result" class="form-control mb-3" name="upload_file" placeholder="upload file" autocomplete="off" required>
               
               <button type="submit" name="submit" value="submit" class="btn btn-primary mb-3">submit</button>

               </div>
            </form>
      </section>

</body>
<script src="../asset/js/bootstrap.bundle.min.js"></script>
</html>


