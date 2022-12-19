<!DOCTYPE html>
<html>
    <head>
        <title> opgave 3 </title>
    </head>
    <body>
        <form method="post" action="opg3.php">
            <h1>Skærer funktionerne f & g? <br> f(x) = 3x + 3, &nbsp&nbsp g(x) = -5x + 1</h1>
            <div>
                <br>
                <input type="submit" value="Ja" name="ok_Btn">
                &nbsp&nbsp
                <input type="submit" value="Nej" name="ok_Btn2"> 
            </div>
        </form>
    </body>
</html>

<?php
session_start();
if(isset($_POST['ok_Btn'])){
    $input = $_POST['input'];
        $_SESSION['correct'] = $_SESSION['correct']+1;
    header('Location:opg4.php');
}elseif(isset($_POST['ok_Btn2'])){
    header('Location:opg4.php');
}
?>