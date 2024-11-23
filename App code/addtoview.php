<?php
session_start();
require 'connection.php';


if(isset($_POST['checkout'])){
    $sql="INSERT INTO cart (email,meal1,meal2,meal3,meal4,meal5,meal6,drink1,drink2,drink3,drink4,drink5,drink6,price) values 
    (:email,:meal1,:meal2,:meal3,:meal4,:meal5,:meal6,:drink1,:drink2,:drink3,:drink4,:drink5,:drink6,:price)";
    $statement=$pdo->prepare($sql);

    
    

    
    
    if(isset($_POST['meal1'])){
        $meal1=$_POST['meal1'];
    }else{
        $meal1="";
    }
    
    if(isset($_POST['meal2'])){
        $meal2=$_POST['meal2'];
    }else{
        $meal2="";
    }

    if(isset($_POST['meal3'])){
        $meal3=$_POST['meal3'];
    }else{
        $meal3="";
    }

    if(isset($_POST['meal4'])){
        $meal4=$_POST['meal4'];
    }else{
        $meal4="";
    }

    if(isset($_POST['meal5'])){
        $meal5=$_POST['meal5'];
    }else{
        $meal5="";
    }

    if(isset($_POST['meal6'])){
        $meal6=$_POST['meal6'];
    }else{
        $meal6="";
    }

    if(isset($_POST['drink1'])){
        $drink1=$_POST['drink1'];           
    }else{
        $drink1="";
    }
    if(isset($_POST['drink2'])){
        $drink2=$_POST['drink2'];
    }else{
        $drink2="";
    }
    if(isset($_POST['drink3'])){
        $drink3=$_POST['drink3'];
    }else{
        $drink3="";
    }
    if(isset($_POST['drink4'])){
        $drink4=$_POST['drink4'];
    }else{
        $drink4="";
    }
    if(isset($_POST['drink5'])){
        $drink5=$_POST['drink5'];
    }else{
        $drink5="";
    }
    if(isset($_POST['drink6'])){
        $drink6=$_POST['drink6'];
    }else{
        $drink6="";
    }
    
    
              
    
    $cost=0;
    if($meal1=="mediumbox"){
        $cost=$cost+4;
    }
    if($meal2=="mediumbox"){
        $cost=$cost+4;
    }
    if($meal3=="largebox"){
        $cost=$cost+5;
    }
    if($meal4=="largebox"){
        $cost=$cost+5;
    }
    if($meal5=="xlargebox"){
        $cost=$cost+6;
    }
    if($meal6=="xlargebox"){
        $cost=$cost+6;
    }
    if($drink1=="cocacola"){
        $cost = $cost + 1;
    }
    if($drink2=="cocacola"){
        $cost = $cost + 1;
    }
    if($drink3=="sprite"){
        $cost = $cost + 1;
    }
    if($drink4=="sprite"){
        $cost = $cost + 1;
    }
    if($drink5=="water"){
        $cost = $cost + 1;
    }
    if($drink6=="water"){
        $cost = $cost + 1;
    }
    $price=$cost;


    $statement->bindParam(":email",$_SESSION['privilleged'],PDO::PARAM_STR);

    $statement ->bindParam(":meal1",$meal1,PDO::PARAM_STR);
    $statement ->bindParam(":meal2",$meal2,PDO::PARAM_STR);
    $statement ->bindParam(":meal3",$meal3,PDO::PARAM_STR);
    $statement ->bindParam(":meal4",$meal4,PDO::PARAM_STR);
    $statement ->bindParam(":meal5",$meal5,PDO::PARAM_STR);
    $statement ->bindParam(":meal6",$meal6,PDO::PARAM_STR);

    $statement ->bindParam(":drink1",$drink1,PDO::PARAM_STR);
    $statement ->bindParam(":drink2",$drink2,PDO::PARAM_STR);
    $statement ->bindParam(":drink3",$drink3,PDO::PARAM_STR);
    $statement ->bindParam(":drink4",$drink4,PDO::PARAM_STR);
    $statement ->bindParam(":drink5",$drink5,PDO::PARAM_STR);
    $statement ->bindParam(":drink6",$drink6,PDO::PARAM_STR);
    $statement ->bindParam("price",$price,PDO::PARAM_STR);
    $statement->execute();
header("location:viewpage.php");
}
?>