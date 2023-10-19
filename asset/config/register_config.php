<?php
require_once "../include/session.php";
require "dbconnect.php";
date_default_timezone_set("Africa/Lagos");

// Check if the button is clicked or set
if (!isset($_POST['register'])) {  
    header("Location: ../../register.php");
}else {
$uid = "VE".rand(2000000,9999799);
$mobile = $_POST["mobile"];
$Fname = $_POST["Fname"];
$Lname = $_POST["Fname"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$pass = $_POST["pass"];
$conPassword = $_POST["conPassword"];
$role = "user";
$date = date("Y-m-d");
$hash = password_hash($pass, PASSWORD_DEFAULT);

echo "$dob";


$sql = "SELECT * FROM users WHERE email = ?";
$stmt = mysqli_stmt_init($connectDB);
mysqli_stmt_prepare($stmt,$sql);
mysqli_stmt_bind_param($stmt,"s",$email);
$execute = mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$numRows = mysqli_num_rows($result);

if ($numRows > 0) {
    $_SESSION['error_msg'] = "This email already exists!";
    header("Location: ../../login");
}
elseif (strlen($pass) < 8) {
   $_SESSION['error_msg'] = "Password must be at least 8 characters!";
   header("Location: ../../register");
}
elseif($pass != $conPassword){
    $_SESSION['error_msg'] = "Passwords do not match!";
    header("Location: ../../register");
}else{
    //Prepare SQL Statement
    $sql = "INSERT INTO users(account_uid,mobile,first_name,last_name,email,gender,dob,passwords,date_created,user_role) VALUES(?,?,?,?,?,?,?,?,?,?)";

    // Initialize connection with database
    $stmt = mysqli_stmt_init($connectDB);

    // Prepare Connection with SQL
    mysqli_stmt_prepare($stmt,$sql);
   
    // Bind the values that will be sent to the database
    mysqli_stmt_bind_param($stmt,"ssssssssss",$uid,$mobile,$Fname,$Lname,$email,$gender,$dob,$hash,$date,$role);

    $execute = mysqli_stmt_execute($stmt);

    if (!$execute) {
        $_SESSION['error_msg'] = "Opps! Something went wrong";
        header("Location: ../../register");
    }else{  
        $_SESSION['success_msg'] = "Registration Successful!";
        header("Location: ../../register");
    }
}


}
    





?>