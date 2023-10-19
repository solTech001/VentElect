<?php
require "../asset/config/dbconnect.php";
require_once "../asset/include/session.php";
$uid = $_SESSION['users'];
//print_r($uid);
   $sql = "SELECT * FROM users WHERE id = '$uid'";
   $query = mysqli_query($connectDB,$sql );
   $UserData = mysqli_fetch_assoc($query);
   //  var_dump($UserData);
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
<!-- profile -->
<section>
      <?php
       include "../asset/include/dash_nav.php";
      ?>
   </section>
 

<section class = " container mx-auto pt-5 shadow">
<h4 class="card-title text-center">Profile</h4>
   <form action="../asset/config/pic_update_config.php" method="post" enctype="multipart/form-data">
      <label for="pic">
         <img src="../asset/img/avatars/<?php
          $img = $UserData['pro_pic'];
          echo "$img?".mt_rand();
         ?>
         alt="profile_img" class="img-thumbnail d-block w-75 mx-auto">
      </label>
      <input type="file" name="file" id="pic" class="form-control d-none"> <br>
      <!-- <input type="submit" name="resetPicture" value="Reset Picture" class="btn btn-primary ms-3 mt-3"> -->
      <input type="submit" name="updatePicture" value="Update Picture" class="btn btn-success ms-3 mt-3"> 
   </form>
   <form action="../asset/config/update_profile_config.php" method="post" style="max-width: 600px;>
          <label for="">
            <div class = "form-group">
               <h6>Legal Name</h6>
               <input type="text" class="form-control mb-3" name="Legal_Name" value = "<?php echo  $UserData ['first_name'] .' '.$UserData ['last_name'] ?>" placeholder="Legal Name" autocomplete="off"  readonly required>
            </div>
         </label>
          <label for="">
            <div class = "form-group">
               <h6>Phone Number</h6>
               <input type="tel" class="form-control mb-3" name="Phone" value = "<?php echo  $UserData ['mobile']?>" placeholder="Phone Number" autocomplete="off" readonly required>
            </div>
         </label>
          <label for="">
            <div class = "form-group">
               <h6>About</h6>
               <input type="text" class="form-control mb-3" name="About" value = "<?php echo  $UserData ['about']?>" placeholder="About" autocomplete="off" required>
            </div>
         </label>
         <div class="d-flex">
         <!-- <button type="submit" name="Edit" value="Edit" class="btn btn-danger mb-3">Edit</button> -->
         <button type="submit" name="Update" value="Save" class="btn btn-primary mb-3">Update</button>

         </div>
      </form>
</section>  
</body>
</html>
<script src="../asset/js/bootstrap.bundle.min.js"></script>
