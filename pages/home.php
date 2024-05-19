<?php 
include '../includes/nav_bar.php';
include '../includes/footer.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../styles/nav_bar.css">
        <link type="text/css" rel="stylesheet" href="../styles/style.css">
        <title>Home Page</title>
    </head>

    <body>  

        <div class="landing_container">
            <div class="landing">
                <img src="../img/homepage.png" alt="Big Brew Logo" width="1200px" height="590px"></img>
                <div class="btn_order" id="btn_order"><span>Order Now</span></div>
            </div>
        </div>

        <?php 
            include '../includes/footer.php';
        ?>

        <script>
            $(document).ready(function() {
                $('#btn_order').click(function() {
                $.ajax({
                    url: 'menu.php', // Replace with the actual path to the target HTML file
                    type: 'GET', // or 'POST' depending on your needs
                    success: function(response) {
                    // On success, navigate to the target page
                    window.location.href = 'menu.php'; // Replace with the actual path to the target HTML file
                    },
                    error: function(xhr, status, error) {
                    // Handle errors
                    console.log(xhr.responseText);
                    }
                });
                });
            });
        </script>

    </body>
</html>