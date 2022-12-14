<!DOCTYPE html>
<html>
    <head>
        <title>Tilslut klasse</title>
    </head>
    <body>
        <form method="post" action="joinClass.php">
        <div>
            Indsæt klasse ID¨
            <input type="text", placeholder="klasse id" name="input">    
        </div>
        <div>
            <input type="submit" value="ok" name="ok_Btn">
        </div>


        </form>
    </body>
</html>



<?php 
session_start();
$conn = mysqli_connect("localhost", "root","");
if(isset($_POST['ok_Btn'])){
    $input = $_POST['input'];
    $sql "SELECT * FROM websitelogin.classq where ClassID = $input";
}
?>