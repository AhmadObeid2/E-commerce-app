<?php

session_start();
Require("connection.php");

if(isset($_POST['login'])){
    $sql="SELECT * from signup where email=:email and password=:password";
    $statement=$pdo->prepare($sql);
    $email=$_POST['email'];
    $password=$_POST['password'];


    $statement->bindParam(":email",$email,PDO::PARAM_STR);
    $statement->bindParam(":password",$password,PDO::PARAM_STR);
    $statement->execute();
    error_reporting(E_ALL ^ E_WARNING);
    $row = $statement->fetch();
   

    $count=$statement->rowCount();
  
    if($count==1) {
      $ido=$row['id'];
        $_SESSION['id']=$ido;
        $_SESSION['privilleged']=$email;
        header("location:menupage.php");
    }
    else {
        echo "<h3 style='color:red'> Invalid username or password </h3>";
    }
    $pdo=null;

}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>HAKUNA MATATA</span></div>
        <form action="" method="POST">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email or Phone" name="email" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" value="Login" name="login">
          </div>
          <div class="signup-link"><h5>Not a family member?</h5> <a href="signup.php">Join Hakuna matata family</a></div>
        </form>
      </div>
    </div>
  </body>
</html>
