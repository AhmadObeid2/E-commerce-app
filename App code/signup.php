<?php
require("connection.php");

if($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    $sql="INSERT INTO signup (name,gender,address,email,password) values (:name,:gender,:address,:email,:password)";
    $statement=$pdo->prepare($sql);
    

    $statement->bindParam(":name",$name,PDO::PARAM_STR);
    $statement->bindParam(":gender",$gender,PDO::PARAM_STR);
    $statement->bindParam(":address",$address,PDO::PARAM_STR);
    $statement->bindParam(":email",$email,PDO::PARAM_STR);
    $statement->bindParam(":password",$password,PDO::PARAM_STR);
    $statement->execute();
    header("location:login_page.php");
    
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Signup page</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>HAKUNA MATATA Family</span></div>
        <form action="" method="POST">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Full name" name="name" required>
          </div>
          <div class="row">
            <i class="fas fa-"></i>
            <input type="text" placeholder="Email" name="email" required>
          </div>
          <div class="row">
            <i class="fas fa-"></i>
            <input type="text" placeholder="Address" name="address" required>
          </div>
          <div class="row">
            <i class="fas fa-"></i>
            <input type="text" placeholder="Gender" name="gender" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <div class="row button">
            <input type="submit" value="Signup">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>