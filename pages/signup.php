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
        <link rel="stylesheet" type="text/css" href="../styles/register.css">
        <title>Sign up</title>
    </head>
    <body>  

        <div class="header">
        <h2>Create Your Account</h2>
        </div>
        <form method="post" action="register.php">

            <?php // echo display_error(); ?>

            <div class="input-group">
                <label>Firstname</label>
                <input type="text" placeholder="Enter Firstname" name="firstname" value="<?php // echo $username; ?>">
            </div>
            <div class="input-group">
                <label>Lastname</label>
                <input type="text" placeholder="Enter Lastname" name="lastname" value="<?php // echo $username; ?>">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" placeholder="Enter Email" name="email" value="<?php // echo $email; ?>">
            </div>
            <div class="input-group">
                <label>Mobile Contact Number</label>
                <input type="number" placeholder="Enter Contact Number" name="email" value="<?php // echo $email; ?>">
            </div>

            <div class="input-group">
            <label>Password</label>
                    <input type="password" name="password_1" autocomplete="current-password" required="" id="id_password" placeholder="Enter Password">
                    <i class="far fa-eye" id="togglePassword" style="margin-left: -35px; cursor: pointer;"></i>
            </div>
            <div class="input-group">
                <label>Confirm password</label>
                    <input type="password" name="password_2" autocomplete="current-password" required="" id="id_password2" placeholder="Confirm Password">
                    <i class="far fa-eye" id="togglePassword2" style="margin-left: -35px; cursor: pointer;"></i>
            </div>

            <script>
                        const togglePassword = document.querySelector('#togglePassword');
                        const togglePassword2 = document.querySelector('#togglePassword2');
                        const password = document.querySelector('#id_password');
                        const password2 = document.querySelector('#id_password2');

                        togglePassword.addEventListener('click', function (e) {
                            // toggle the type attribute
                            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                            password.setAttribute('type', type);
                            // toggle the eye slash icon
                            this.classList.toggle('fa-eye-slash');
                        });

                        togglePassword2.addEventListener('click', function (e) {
                            // toggle the type attribute
                            const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
                            password2.setAttribute('type', type);
                            // toggle the eye slash icon
                            this.classList.toggle('fa-eye-slash');
                        });
                </script>

            <div class="input-group">
                <button type="submit" class="btn_signup" >Register Account</button>
            </div>
            <p>
            Have an account? <a href="login.php">Sign in</a>
            </p>
        </form>

    </body>
</html>