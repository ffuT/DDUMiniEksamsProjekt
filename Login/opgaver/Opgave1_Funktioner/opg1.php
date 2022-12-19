<!DOCTYPE html>
<html>
    <head>
        <title> opgave 1 </title>
    </head>
    <body>
        <form method="post" action="opg1.php">
            <h1>Bestem hældningen ud fra punkterne (3,-4) & (8,1)</h1>
            <div>
                <input autocomplete="off" type="number" placeholder = "ur answer" name="input">
            </div>
            <div>
                <input type="submit" value="ok" name="ok_Btn">
            </div>
        </form>
    </body>
</html>

<?php
session_start();
if(isset($_POST['ok_Btn'])){
    $input=$_POST['input'];
    $_SESSION['correct'] = 0;
    if($input == 1){
        $_SESSION['correct'] = $_SESSION['correct']+1;
    } 
    header('Location:opg2.php');
}
?>