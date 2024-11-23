<?php
require 'connection.php';
session_start();

if(isset($_POST['edit'])){
$edit="UPDATE cart SET meal1=:meal1, meal2=:meal2, meal3=:meal3, meal4=:meal4, meal5=:meal5, meal6=:meal6,
drink1=:drink1, drink2=:drink2, drink3=:drink3, drink4=:drink4, drink5=:drink5, drink6=:drink6, price=:price WHERE orderid=:orderid";
$statement=$pdo->prepare($edit);

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
            //////////////////////////
            if($meal1=="largebox"){
                $cost=$cost+5;
            }
            if($meal2=="largebox"){
                $cost=$cost+5;
            }
            if($meal3=="xlargebox"){
                $cost=$cost+6;
            }
            if($meal4=="xlargebox"){
                $cost=$cost+6;
            }
            if($meal5=="mediumbox"){
                $cost=$cost+4;
            }
            if($meal6=="mediumbox"){
                $cost=$cost+4;
            }
            if($drink1=="sprite"){
                $cost = $cost + 1;
            }
            if($drink2=="sprite"){
                $cost = $cost + 1;
            }
            if($drink3=="water"){
                $cost = $cost + 1;
            }
            if($drink4=="water"){
                $cost = $cost + 1;
            }
            if($drink5=="cocacola"){
                $cost = $cost + 1;
            }
            if($drink6=="cocacola"){
                $cost = $cost + 1;
            }
/////////////////////////////////////////////////////
if($meal1=="xlargebox"){
    $cost=$cost+6;
}
if($meal2=="xlargebox"){
    $cost=$cost+6;
}
if($meal3=="mediumbox"){
    $cost=$cost+4;
}
if($meal4=="mediumbox"){
    $cost=$cost+4;
}
if($meal5=="largebox"){
    $cost=$cost+5;
}
if($meal6=="largebox"){
    $cost=$cost+5;
}
if($drink1=="water"){
    $cost = $cost + 1;
}
if($drink2=="water"){
    $cost = $cost + 1;
}
if($drink3=="cocacola"){
    $cost = $cost + 1;
}
if($drink4=="cocacola"){
    $cost = $cost + 1;
}
if($drink5=="sprite"){
    $cost = $cost + 1;
}
if($drink6=="sprite"){
    $cost = $cost + 1;
}
            $price=$cost;


            $statement ->bindParam(":orderid",$_GET['orderid'],PDO::PARAM_STR);

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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart page</title>
    <link rel="stylesheet" href="style6.css">
</head>
<body>
    <?php
    require 'connection.php';
            $sql="SELECT * FROM cart where orderid=:orderid";
            $statement=$pdo->prepare($sql);
            $statement->bindParam(":orderid",$_GET['orderid'],PDO::PARAM_STR);
            $statement->execute();
            $data=$statement->fetchAll();

            echo "<table class='history' style='width: 95%;
            border: 2px solid black;
            text-align: center;
            position: absolute;
            left: 2%;
            bottom: 30%;
            background-color: rgba(0, 0, 0, 0.1);
            padding: 20px;
            font-size: 18px;'>";

            echo "<tr>";
            foreach ($data as $row){
                if($row['meal1']!=''){
                    echo "<th> meal </th>";
                }
                if($row['meal2']!=''){
                    echo "<th> meal </th>";
                }
                if($row['meal3']!=''){
                    echo "<th> meal </th>";
                }
                if($row['meal4']!=''){
                    echo "<th> meal </th>";
                }
                if($row['meal5']!=''){
                    echo "<th> meal </th>";
                }
                if($row['meal6']!=''){
                    echo "<th> meal </th>";
                }
                if($row['drink1']!=''){
                    echo "<th> drink </th>";
                }
                if($row['drink2']!=''){
                    echo "<th> drink </th>";
                }
                if($row['drink3']!=''){
                    echo "<th> drink </th>";
                }
                if($row['drink4']!=''){
                    echo "<th> drink </th>";
                }
                if($row['drink5']!=''){
                    echo "<th> drink </th>";
                }
                if($row['drink6']!=''){
                    echo "<th> drink </th>";
                }
            }
            echo "<th> price </th>";
            echo "</tr>";
                foreach ($data as $row) {
                    echo "<tr>
                    <form action='' method='post' >";
                    if($row['meal1']!=''){
                        echo "<td>  <select id='Select' name='meal1'>
                        <option value=".$row['meal1'].">" .$row['meal1']. "</option>
                        <option value='mediumbox'> Meduim box</option>
                        <option value='largebox'> Large box</option>
                        <option value='xlargebox'> X-Large box</option>
                        <option value=''>Remove order</option>
                     </select> </td>";
                    }
                    if($row['meal2']!=''){
                        echo "<td>  <select id='Select' name='meal2'>
                        <option value=".$row['meal2'].">" .$row['meal2']. "</option>
                        <option value='mediumbox'> Meduim box</option>
                        <option value='largebox'> Large box</option>
                        <option value='xlargebox'> X-Large box</option>
                        <option value=''>Remove order</option>
                     </select> </td>";                    }
                    if($row['meal3']!=''){
                        echo "<td>  <select id='Select' name='meal3'>
                        <option value=".$row['meal3'].">" .$row['meal3']. "</option>
                        <option value='mediumbox'> Meduim box</option>
                        <option value='largebox'> Large box</option>
                        <option value='xlargebox'> X-Large box</option>
                        <option value=''>Remove order</option>
                     </select> </td>";                    }
                    if($row['meal4']!=''){
                        echo "<td>  <select id='Select' name='meal4'>
                        <option value=".$row['meal4'].">" .$row['meal4']. "</option>
                        <option value='mediumbox'> Meduim box</option>
                        <option value='largebox'> Large box</option>
                        <option value='xlargebox'> X-Large box</option>
                        <option value=''>Remove order</option>
                     </select> </td>";                    }
                    if($row['meal5']!=''){
                        echo "<td>  <select id='Select' name='meal5'>
                        <option value=".$row['meal5'].">" .$row['meal5']. "</option>
                        <option value='mediumbox'> Meduim box</option>
                        <option value='largebox'> Large box</option>
                        <option value='xlargebox'> X-Large box</option>
                        <option value=''>Remove order</option>
                     </select> </td>";                    }
                    if($row['meal6']!=''){
                        echo "<td>  <select id='Select' name='meal6'>
                        <option value=".$row['meal6'].">" .$row['meal6']. "</option>
                        <option value='mediumbox'> Meduim box</option>
                        <option value='largebox'> Large box</option>
                        <option value='xlargebox'> X-Large box</option>
                        <option value=''>Remove order</option>
                     </select> </td>";                    }
                    if($row['drink1']!=''){
                        echo "<td>  <select id='Select' name='drink1'>
                        <option value=".$row['drink1'].">" .$row['drink1']. "</option>
                        <option value='cocacola'> Cocacola</option>
                        <option value='sprite'> Sprite </option>
                        <option value='water'> Water</option>
                        <option value=''>Remove order</option>
                     </select> </td>";                    }
                    if($row['drink2']!=''){
                        echo "<td>  <select id='Select' name='drink2'>
                        <option value=".$row['drink2'].">" .$row['drink2']. "</option>
                        <option value='cocacola'> Cocacola</option>
                        <option value='sprite'> Sprite </option>
                        <option value='water'> Water</option>
                        <option value=''>Remove order</option>
                     </select> </td>";                    }
                    if($row['drink3']!=''){
                        echo "<td>  <select id='Select' name='drink3'>
                        <option value=".$row['drink3'].">" .$row['drink3']. "</option>
                        <option value='cocacola'> Cocacola</option>
                        <option value='sprite'> Sprite </option>
                        <option value='water'> Water</option>
                        <option value=''>Remove order</option>
                     </select> </td>";                    }
                    if($row['drink4']!=''){
                        echo "<td>  <select id='Select' name='drink4'>
                        <option value=".$row['drink4'].">" .$row['drink4']. "</option>
                        <option value='cocacola'> Cocacola</option>
                        <option value='sprite'> Sprite </option>
                        <option value='water'> Water</option>
                        <option value=''>Remove order</option>
                     </select> </td>";                    }
                    if($row['drink5']!=''){
                        echo "<td>  <select id='Select' name='drink5'>
                        <option value=".$row['drink5'].">" .$row['drink5']. "</option>
                        <option value='cocacola'> Cocacola</option>
                        <option value='sprite'> Sprite </option>
                        <option value='water'> Water</option>
                        <option value=''>Remove order</option>
                     </select> </td>";                    }
                    if($row['drink6']!=''){
                        echo "<td>  <select id='Select' name='drink6'>
                        <option value=".$row['drink6'].">" .$row['drink6']. "</option>
                        <option value='cocacola'> Cocacola</option>
                        <option value='sprite'> Sprite </option>
                        <option value='water'> Water</option>
                        <option value=''>Remove order</option>
                     </select> </td>";                    }
                    echo "<td> ". $row['price'] . "</td> 
                    </tr>
                    <input type='submit' class='button' name='edit' value='EDIT' style='width: 10rem;
                    padding: .5rem;
                    border-radius: 100px;
                    position: relative;
                    margin-left: 35%;
                    bottom: -650px;
                    background-color: #ffe066;'>
                    </form>";
                }

echo "</table>";
?>
    <div class="logo"><img src="logo1.jpg" width="100" height="100"></div>

</body>
</html>