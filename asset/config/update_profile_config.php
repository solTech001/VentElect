<?php
    require_once "../include/session.php";
    require "dbconnect.php";


    if (!isset($_POST["Update"])) {
        header("Location: ../../users/profile");
    }
    else {
        $uid = $_SESSION['users'];
        $about = $_POST["About"];
        
        $sql = "UPDATE users SET about = ? WHERE id = '$uid'";
        $stmt = mysqli_stmt_init($connectDB);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"s",$about);
        $execute = mysqli_stmt_execute($stmt);

        if (!$execute) {
            $_SESSION['error_msg'] = "Opps! Something went wrong";
            header("Location: ../../users/profile");
        }else{
            $_SESSION['success_msg'] = "Update Successful!";
            header("Location: ../../users/profile");
        }
    }
    










?>