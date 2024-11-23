<?php
Require("connection.php");
$sql="DELETE FROM cart WHERE orderid=:orderid";
$orderid=$_GET['orderid'];
$statement=$pdo->prepare($sql);
$statement->bindParam(":orderid",$orderid, PDO::PARAM_INT);
$statement->execute();
$pdo=null;
header("location:viewpage.php");
?>