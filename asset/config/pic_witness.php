<?php
require_once "../include/session.php";
require "dbconnect.php";
$uid = $_SESSION['users'];
print_r($uid);
   $sql = "SELECT * FROM users WHERE id = '$uid'";
   $query = mysqli_query($connectDB,$sql );
   $UserData = mysqli_fetch_assoc($query);
   $uid = $UserData["account_uid"];
//    var_dump($uid);


if (isset($_POST["image"]))
{
    $img = $_POST['image'];
    $folderPath = "../img/upload/";
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);

    $image_type = $image_type_aux[0];
  
    $image_base64 = base64_decode($image_parts[0]);
    $fileName = uniqid() . '.png';
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);

        $sql = "UPDATE tbl_record SET pro_wit = ? WHERE userId = '$uid'";
        $stmt = mysqli_stmt_init($connectDB);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"s",$fileName);
        $execute = mysqli_stmt_execute($stmt);

        
        if (!$execute) {
            $_SESSION['error_msg'] = "Opps! Something went wrong";
            header("Location: ../../users/eyewitness");
        }else{
            $_SESSION['success_msg'] = "Update Successful!";
            header("Location: ../../users/dashboard");
        }
    

}



?>