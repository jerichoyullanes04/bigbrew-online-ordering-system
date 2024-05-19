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
    <title>Menu List Navigation Bar</title>

    <style>
        .menunavcontainer {
            width: 150px;
            margin-top: 100px;
            margin-left: 80px;
        }

        .items {
            display: list-item;
            margin: 10px;
            background-color: yellow;
        }

        .items:hover {
            color: white;
        }

    </style>

</head>
<body>
    
    <div class="menunavcontainer">
        <div class="menunav">
            <div class="items" id="milktea">MILK TEA</div>
            <div class="items" id="fruittea">FRUIT TEA</div>
            <div class="items" id="icedcoffee">ICED COFFEE</div>
            <div class="items" id="hotbrew">HOT BREW</div>
            <div class="items" id="snacks">SNACKS</div>
            <div class="items" id="addons">ADD-ONS</div>
    </div>


    <script>
            $(document).ready(function() {
                $('#milktea').click(function() {
                $.ajax({
                    url: '../php/menu/milktea.php', // Replace with the actual path to the target HTML file
                    type: 'GET', // or 'POST' depending on your needs
                    success: function(response) {
                    // On success, navigate to the target page
                    window.location.href = '../php/menu/milktea.php'; // Replace with the actual path to the target HTML file
                    },
                    error: function(xhr, status, error) {
                    // Handle errors
                    console.log(xhr.responseText);
                    }
                });
                });

                $('#fruittea').click(function() {
                $.ajax({
                    url: '../php/menu/milktea.php', // Replace with the actual path to the target HTML file
                    type: 'GET', // or 'POST' depending on your needs
                    success: function(response) {
                    // On success, navigate to the target page
                    window.location.href = '../php/menu/milktea.php'; // Replace with the actual path to the target HTML file
                    },
                    error: function(xhr, status, error) {
                    // Handle errors
                    console.log(xhr.responseText);
                    }
                });
                });

                $('#icedcoffee').click(function() {
                $.ajax({
                    url: '../php/menu/milktea.php', // Replace with the actual path to the target HTML file
                    type: 'GET', // or 'POST' depending on your needs
                    success: function(response) {
                    // On success, navigate to the target page
                    window.location.href = '../php/menu/milktea.php'; // Replace with the actual path to the target HTML file
                    },
                    error: function(xhr, status, error) {
                    // Handle errors
                    console.log(xhr.responseText);
                    }
                });
                });

                $('#hotbrew').click(function() {
                $.ajax({
                    url: '../php/menu/milktea.php', // Replace with the actual path to the target HTML file
                    type: 'GET', // or 'POST' depending on your needs
                    success: function(response) {
                    // On success, navigate to the target page
                    window.location.href = '../php/menu/milktea.php'; // Replace with the actual path to the target HTML file
                    },
                    error: function(xhr, status, error) {
                    // Handle errors
                    console.log(xhr.responseText);
                    }
                });
                });

                $('#snacks').click(function() {
                $.ajax({
                    url: '../php/menu/milktea.php', // Replace with the actual path to the target HTML file
                    type: 'GET', // or 'POST' depending on your needs
                    success: function(response) {
                    // On success, navigate to the target page
                    window.location.href = '../php/menu/milktea.php'; // Replace with the actual path to the target HTML file
                    },
                    error: function(xhr, status, error) {
                    // Handle errors
                    console.log(xhr.responseText);
                    }
                });
                });

                $('#addons').click(function() {
                $.ajax({
                    url: '../php/menu/milktea.php', // Replace with the actual path to the target HTML file
                    type: 'GET', // or 'POST' depending on your needs
                    success: function(response) {
                    // On success, navigate to the target page
                    window.location.href = '../php/menu/milktea.php'; // Replace with the actual path to the target HTML file
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