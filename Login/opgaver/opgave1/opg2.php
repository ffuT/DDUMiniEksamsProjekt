<!DOCTYPE html>
<html>
    <head>
        <title> opgave 2 </title>
    </head>
    <body>
        <form method="post" action="opg2.php">
            <h1>Hvad er 3^2?</h1>
            <div>
                <input type="number" placeholder = "ur answer" name="input">
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
    $input = $_POST['input'];
    if($input == 9){
        $_SESSION['correct'] = $_SESSION['correct']+1;
    }
    header('Location:opgSlut.php');
}
?>