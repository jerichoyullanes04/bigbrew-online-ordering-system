<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link type="text/css" rel="stylesheet" href="../styles/nav_bar.css">
        <link type="text/css" rel="stylesheet" href="../styles/cart.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="../img/favicon.png">
        <title>Big Brew Ordering System</title>
    </head>

    <body>
        <div class="navbar"> 
            <div class="navbar-left">
                <a href="../pages/home.php"><img src="../img/logo.png" alt="Big Brew Logo" class="logo"></a>
                <a href="../pages/home.php" class="home"><div class="home">Big Brew Palmera Branch</div></a>
            </div>
            <div class="navbar-right">
                <div class="navbar-right-container">
                    <a href="#cart" class="shopping"><img src="../img/cart.png" alt="Your Cart" class="cart"></img></a>
                    <span class="quantity">0</span>
                    <a href="../pages/login.php" class="loginlink"><div class="login">Login</div></a>
                    <a href="../pages/signup.php" class="signuplink"><div class="sign-up">Sign Up</div></a>
                </div>
            </div>
        </div>

        <script src="app.js"></script>
    </body>

</html>