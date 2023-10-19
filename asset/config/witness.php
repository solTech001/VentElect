<?php

require_once "../include/session.php";
require "dbconnect.php";
date_default_timezone_set("Africa/Lagos");

 //current user
 $uid = $_SESSION['users'];
 $sql = "SELECT * FROM users WHERE id = '$uid'";
 $query = mysqli_query($connectDB,$sql );
 $UserData = mysqli_fetch_assoc($query);
 $id = $UserData['account_uid'];

 
 if (!isset($_POST["submit"])){
    header("Location: ../../users/eyewitness");
 }
 else {

    $flexRadioDefault = $_POST["flexRadioDefault"];
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $dates = $_POST["dates"];
    $street = $_POST["street"];
    $ward = $_POST["ward"];
    $LG = $_POST["LG"];
    $State = $_POST["State"];
    $Describe = $_POST["Describe"];
    $Unit = $_POST["Unit"];
    $date = date("Y-m-d");

var_dump($flexRadioDefault);
$sql = "INSERT INTO tbl_record (userId,flexRadioDefault, FirstName,LastName,dates,street,ward,LG,States,Describes,Unit,data_created)  VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";

    // Initialize connection with database
    $stmt = mysqli_stmt_init($connectDB);

    // Prepare Connection with SQL
    mysqli_stmt_prepare($stmt,$sql);
   
   
    // Bind the values that will be sent to the database
    mysqli_stmt_bind_param($stmt,"ssssssssssis",$id,$flexRadioDefault,$FirstName,$LastName,$dates,$street,$ward,$LG,$State, $Describe,$Unit,$date);

    $execute = mysqli_stmt_execute($stmt);

    if (!$execute) {
        $_SESSION['error_msg'] = "Opps! Something went wrong";
        header("Location: ../../users/eyewitness");
     }
     else{  
        $_SESSION['success_msg'] = "Registration Successful!";
        header("Location: ../../users/record");
    }       

 }
?>