<!DOCTYPE html>
<html>
    <head>
        <title> opgave slut </title>
    </head>
    <body>
        <a href="../../menu.php">tilbage til menu</a>
    </body>
</html>

<?php
session_start();
$ID =  $_SESSION['UserID']; 
$conn = mysqli_connect("localhost", "root","");
$userid = $_SESSION['UserID'];
$correcprc = $_SESSION['correct'] / 2 * 100;
$sql= "SELECT * FROM websitelogin.final WHERE ID = '$userid'";
$resultset = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($resultset)){
    if($row['opg1F'] == null){
        $sql = "UPDATE websitelogin.final SET opg1F = '$correcprc' WHERE ID = '$ID'";
        mysqli_query($conn,$sql);
    } elseif ($row['opg1A'] == null){
        $sql = "UPDATE websitelogin.final SET opg1A = '$correcprc' WHERE ID = '$ID'";
        mysqli_query($conn,$sql);
    }
}
?>