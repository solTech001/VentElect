<?php
 require "../asset/config/dbconnect.php";
 require_once "../asset/include/session.php";
echo"Im an admin";
$uid = $_SESSION['user'];

    $sql = "SELECT * FROM users WHERE id = '$uid'";
    $query = mysqli_query($connectDB,$sql );
    $UserData = mysqli_fetch_assoc($query);
    var_dump($UserData);


?>