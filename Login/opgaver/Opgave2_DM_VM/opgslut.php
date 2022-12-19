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
$correcprc = $_SESSION['correct'] / 4 * 100;
$sql= "SELECT * FROM websitelogin.final WHERE ID = '$userid'";
$resultset = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($resultset)){
    if($row['opg2F'] == null){
        $sql = "UPDATE websitelogin.final SET opg2F = '$correcprc' WHERE ID = '$ID'";
        mysqli_query($conn,$sql);
    } elseif ($row['opg2A'] == null){
        $sql = "UPDATE websitelogin.final SET opg2A = '$correcprc' WHERE ID = '$ID'";
        mysqli_query($conn,$sql);
    }
}
?>