<!DOCTYPE html>
<html>
    <head>
        <title> opgave slut </title>
    </head>
    <body>
        <a href="../menu.php">tilbage til menu</a>
    </body>
</html>

<?php
session_start();

$conn = mysqli_connect("localhost", "root","");
$userid = $_SESSION['UserID'];
$sql= "SELECT Correct FROM websitelogin.login WHERE ID = '$userid'";
$resultset = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($resultset)){
    $result = $row['Correct']; 
    if($result == null){
        } else{
            $correcprc = $_SESSION['correct'] / 2 * 100;
            echo "<p>Første gang fik du $result% rigtige svar denne gang fik du $correcprc%.</p>";
            if($result < $correcprc || $correcprc == 100){
                echo "<p> Godt gået!</p>";
            }
            $ID =  $_SESSION['UserID']; 
            $correcprc = $_SESSION['correct'] / 2 * 100;
            $sql = "UPDATE websitelogin.login SET Correct = '$correcprc' WHERE ID = '$ID'";
            mysqli_query($conn,$sql);
            return;
        }
    }
$ID =  $_SESSION['UserID']; 
$correcprc = $_SESSION['correct'] / 2 * 100;
$conn = mysqli_connect("localhost", "root","");
$sql = "UPDATE websitelogin.login SET Correct = '$correcprc' WHERE ID = '$ID'";
mysqli_query($conn,$sql);
header("Location:../menu.php")
?>