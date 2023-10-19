<?php
require_once "asset/include/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="asset/css/bootstrap5.min.css">
   <link rel="stylesheet" href="asset/lib/fontawsome/css/all.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body class = " posistion-relative">
    <!-- Navbar -->
    
    <section>
        <?php
        include_once "asset/include/navbar.php";
        ?>
    </section>

    <section>
        <div class="container  my-5">
        <?php
            echo errorMsg(); echo successMsg();
         ?>
            <form action="asset/config/login_config.php" method="post" class="card p-3 mx-auto shadow" style="max-width: 600px;">
                <h4 class="card-title text-center">Login</h4>
                <input type="email" class="form-control mb-3" name="email" placeholder="Email" required>
                <input type="password" class="form-control mb-3" name="pass" placeholder="Password" autocomplete="off" required>
                
                <button type="submit" name="Login" value="Login" class="btn btn-dark mb-3">Login</button>
                <p>
                    Don't have an account? <a href="register" class="text-decoration-none">Create</a>
                    <a href="setting" class="text-decoration-none">Forget Password</a>
                </p>
            </form>
        </div>
    </section>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <!-- <script>
        const message = document.querySelector("#messageAlert");

        if (message) {
            setTimeout(()=>{
               message.classList.add("animate__animated","animate__fadeOut");
                setTimeout(()=>{
                    message.classList.add('d-none')
                },1000)
           },3000)
        }
    </script> -->
</body>



</html>


