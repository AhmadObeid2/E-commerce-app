<?php
session_start();
require("connection.php");

if(!isset($_SESSION['id']) && !isset ($_SESSION['privilleged'])){
    header("location:login_page.php");
}
    
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu page</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="main">
        <div class="title">
            <h2>Hakuna Menu</h2>
            <div class="home">Return To <a href="index.php">Home</a></div>
        </div>
        <form action="addtoview.php" method="POST">
            <div class="menu">
                <div class="menu-column">
                    <h4>Happiness Box</h4>
                    <div class="order">
                        <img src="menu.jpg" width="150" height="150">
                        <div class="order-content">
                            <h5>Medium Box <span>4JD</span></h5>
                            <input type="checkbox" id="button1" value="mediumbox" name="meal1">
                            <label for="button1">Add to cart</label><br>
                            <input type="checkbox" id="button2" value="mediumbox" name="meal2">
                            <label for="button2">Add to cart</label>
                        </div>
                    </div>
                    <div class="order">
                        <img src="menu.jpg" width="150" height="150">
                        <div class="order-content">
                            <h5>Large Box <span>5JD</span></h5>
                            <input type="checkbox" id="button3" value="largebox" name="meal3">
                            <label for="button3">Add to cart</label><br>
                            <input type="checkbox" id="button4" value="largebox" name="meal4">
                            <label for="button4">Add to cart</label>
                        </div>
                    </div>
                    <div class="order">
                        <img src="menu.jpg" width="150" height="150">
                        <div class="order-content">
                            <h5>X-Large Box <span>6JD</span></h5>
                            <input type="checkbox" id="button5" value="xlargebox" name="meal5">
                            <label for="button5">Add to cart</label><br>
                            <input type="checkbox" id="button6" value="xlargebox" name="meal6">
                            <label for="button6">Add to cart</label>
                        </div>
                    </div>
                </div>
                <div class="menu-column">
                    <h4>Drinks</h4>
                    <div class="order">
                        <img src="co.jpg" width="150" height="150">
                        <div class="order-content">
                            <h5>Coca-Cola <span>0.5JD</span></h5>
                            <input type="checkbox" id="button7" value="cocacola" name="drink1">
                            <label for="button7">Add to cart</label><br>
                            <input type="checkbox" id="button8" value="cocacola" name="drink2">
                            <label for="button8">Add to cart</label>
                        </div>
                    </div>
                    <div class="order">
                        <img src="st.jpg" width="150" height="150">
                        <div class="order-content">
                            <h5>Sprite <span>0.5JD</span></h5>
                            <input type="checkbox" id="button9" value="sprite" name="drink3">
                            <label for="button9">Add to cart</label><br>
                            <input type="checkbox" id="button10" value="sprite" name="drink4">
                            <label for="button10">Add to cart</label>
                        </div>
                    </div>
                    <div class="order">
                        <img src="ar.jpg" width="100" height="100">
                        <div class="order-content">
                            <h5>Water<span>0.25JD</span></h5>
                            <input type="checkbox" id="button11" value="water" name="drink5">
                            <label for="button11">Add to cart</label><br>
                            <input type="checkbox" id="button12" value="water" name="drink6">
                            <label for="button12">Add to cart</label>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" class="continue" value="checkout" name="checkout">
        </form>
    </div>
</body>
</html>