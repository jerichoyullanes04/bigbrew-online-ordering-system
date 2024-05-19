<?php 
include '../includes/nav_bar.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../styles/nav_bar.css">
        <link type="text/css" rel="stylesheet" href="../styles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/login.css">
        <title>Login</title>
    </head>
    <body>  

        <div class="header">
        <h2>Login to your account</h2>
        </div>
        <form method="post" action="register.php">

            <?php // echo display_error(); ?>

            <div class="input-group">
                <label>Email</label>
                <input type="email" placeholder="Enter Email" name="email" value="<?php // echo $email; ?>">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" autocomplete="current-password" required="" id="id_password" placeholder="Enter Password">
                <i class="far fa-eye" id="togglePassword" style="margin-left: -35px; cursor: pointer;"></i>
            </div>
 
            <script>
                const togglePassword = document.querySelector('#togglePassword');
                const password = document.querySelector('#id_password');

                togglePassword.addEventListener('click', function (e) {
                    // toggle the type attribute
                    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                    password.setAttribute('type', type);
                    // toggle the eye slash icon
                    this.classList.toggle('fa-eye-slash');
                });
            </script>

            <div class="input-group">
                <button type="submit" class="btn_login" >Login</button>
            </div>
            <p>
            Don't have an account? <a href="signup.php">Sign up</a>
            </p>
        </form>

    </body>
</html>