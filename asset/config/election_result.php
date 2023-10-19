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
   //  var_dump($id);



    if (isset($_POST["submit"]))
        {
            $FirstName = $_POST["FirstName"];
            $LastName = $_POST["LastName"];
            $pollingUnit = $_POST["pollingUnit"];
            $ward = $_POST["ward"];
            $LG = $_POST["LG"];
            $State = $_POST["State"];
            $date = date("Y-m-d");
             // file
             $file = $_FILES["file"];
            
             $fileName = $file['name'];
             $fileTmpName = $file['tmp_name'];
             $fileError = $file['error'];
             $fileSize = $file['size'];


             // Type of Allowed Files
             $allowed = array("jpg","jpeg","png");
    
             // Get the file Extension
             $ext = explode('.',$fileName);
             $ext = end($ext);
             $ext = strtolower($ext);

             if (!in_array($ext,$allowed)) {
               $_SESSION['error_msg'] = "Invalid File Format valid(jpg, jpeg, png, gif)";
               header("Location: ../../users/election_result");
           }else{
               if ($fileError !=  0) {
                   $_SESSION['error_msg'] = "File is corrupted";
                   header("Location: ../../users/election_result");
               }else{
                   if($fileSize > 4000000){
                       $_SESSION['error_msg'] = "File to large max: 4mb";
                       header("Location: ../../users/election_result");
                   }else{
                       // Generate a new name for the file
                       $fileNewName = "results".$uid.'.'.$ext;
                       $location = "../img/results/";
                       move_uploaded_file($fileTmpName,$location.$fileNewName);

                       var_dump( $fileNewName);
                   }
               }
           }
            //Prepare SQL Statement
    $sql = "INSERT INTO result (userId, FirstName,LastName,pollingUnit,ward,LG,States,electionImg,data_created)  VALUES(?,?,?,?,?,?,?,?,?)";

    // Initialize connection with database
    $stmt = mysqli_stmt_init($connectDB);

    // Prepare Connection with SQL
    mysqli_stmt_prepare($stmt,$sql);
   
   
    // Bind the values that will be sent to the database
    mysqli_stmt_bind_param($stmt,"sssssssss",$id,$FirstName,$LastName,$pollingUnit,$ward,$LG,$State,$fileNewName,$date);

    $execute = mysqli_stmt_execute($stmt);

    if (!$execute) {
        $_SESSION['error_msg'] = "Opps! Something went wrong";
        header("Location: ../../users/election_result");
     }
     else{  
        $_SESSION['success_msg'] = "Result summited!";
        header("Location: ../../register");
    }       

 }
 ?>