<?php 
session_start();
require("connection.php");
if(!isset($_SESSION['privilleged'])){
    header("location:menupage.php");
}
$pdo=null;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart page</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
    <?php
    require 'connection.php';
            $sql="SELECT * FROM cart where email=:email";
            $statement=$pdo->prepare($sql);
            $statement->bindParam(":email",$_SESSION['privilleged'],PDO::PARAM_STR);
            $statement->execute();
            

            echo "<table class='history' style='width: 95%;
            border: 2px solid black;
            text-align: center;
            position: absolute;
            left: 2%;
            bottom: 30%;
            background-color: white;
            padding: 20px;
            font-size: 14px;'>";

            echo "<tr>";
            echo "<th> meal1 </th>";
            echo "<th> meal2 </th>";
            echo "<th> meal3 </th>";
            echo "<th> meal4 </th>";
            echo "<th> meal5 </th>";
            echo "<th> meal6 </th>";
            echo "<th> drink1 </th>";
            echo "<th> drink2 </th>";
            echo "<th> drink3 </th>";
            echo "<th> drink4 </th>";
            echo "<th> drink5 </th>";
            echo "<th> drink6 </th>";
            echo "<th> price </th>";
            echo "</tr>";
            $data=$statement->fetchAll();
                foreach ($data as $row) {
                    echo "<tr>
                    <td>" . $row['meal1']." </td>
                    <td>" . $row['meal2']." </td>
                    <td>" . $row['meal3']." </td>
                    <td>" . $row['meal4']." </td>
                    <td>" . $row['meal5']." </td>
                    <td>" . $row['meal6']." </td>
                    <td>" . $row['drink1']." </td>
                    <td>" . $row['drink2']." </td>
                    <td>" . $row['drink3']." </td>
                    <td>" . $row['drink4']." </td>
                    <td>" . $row['drink5']." </td>
                    <td>" . $row['drink6']." </td>
                    <td> ". $row['price'] . "</td> 
                    
                    <td> <a href=editpage.php?orderid=".$row['orderid']."> Edit </a>
                    </td>
                    <td> <a href=delete.php?orderid=".$row['orderid']."> Delete </a> </td>
                    </tr>";
                }

echo "</table>";
?>
    <div class="logo"><img src="logo1.jpg" width="100" height="100"></div>
    <form action="logout.php" method="POST">
        <div class="button"><a href='logout.php'>Logout</a></div>
    </form> 
</body>
</html>