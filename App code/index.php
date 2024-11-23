<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta name="google-site-verification" content="9DwQqC-GjNYmgHXgIN69rvX-9HWiVhCXooqYNHTdjC8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Home page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="restyle.css">
</head>
<body>
        <div class="main">
            <div class="logo"><img src="logo1.jpg" width="100" height="100"></div>
            <ul class="nav">
                <li><a href="#">Home</a></li>
                <li><a href="menupage.php">Menu</a></li>
                <li><a href="Contactpage.html">Contact Us</a></li>
                <?php
                if(!isset($_SESSION['privilleged'])){
                    echo            "<li><a href='login_page.php'>Login</a></li>";

                }
                else echo            "<li><a href='logout.php'>Logout</a></li>";

                ?>
            </ul>
        </div>
        <div class="text">
            <h1>HAKUNA MATATA</h1>
            <p>KEEP CALM, AND HAKUNA MATATA</p>
        </div>
        <footer>
            <div class="footer-content">
                <h3>HAKUNA MATATA</h3>
                <p>Lets mix the chicken pieces and fries together in the Happiness Box</p>
                <ul class="social-media">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy;2023 HAKUNA MATATA. All rights reserved</p>
            </div>
        </footer>
</body>
</html>