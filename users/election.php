<?php
require "../asset/config/dbconnect.php";
require_once "../asset/include/session.php";
$uid = $_SESSION['users'];
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
    <title>VentElect</title>
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



     <!-- post result -->

     <section class = "container py-5 shadow">
         <form action="../asset/config/election_result.php" method="post" enctype="multipart/form-data">
            <h4 class="card-title text-center">Elections Result</h4>
               <input type="text" class="form-control mb-3" name="FirstName" placeholder="First name" autocomplete="off" required>
               <input type="text" class="form-control mb-3" name="LastName" placeholder="Last name" autocomplete="off" required> 
               <!-- <input type="date" class="form-control mb-3" name="date" placeholder="date" autocomplete="off" required> -->
                <div class="form-group">
               <input type="text" class="form-control mb-3" name="pollingUnit" placeholder="polling unit" autocomplete="off" required>
               <input type="text" class="form-control mb-3" name="ward" placeholder="ward" autocomplete="off" required>
               <input type="text" class="form-control mb-3" name="LG" placeholder="LG" autocomplete="off" required>
               <input type="text" class="form-control mb-3" name="State" placeholder="State" autocomplete="off" required>
               </div>
               <input type="file" name="file" id="pic" class="form-control"> <br>

               <button type="submit" name="submit" value="submit" class="btn btn-primary mb-3">submit</button>

               </div>
            </form>
      </section>


      
</body>
<script src="../asset/js/bootstrap.bundle.min.js"></script>
</html>