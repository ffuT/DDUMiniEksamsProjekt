<!DOCTYPE html>
<html>
    <head>
        <title> opgave 4 </title>
    </head>
    <body>
        <form method="post" action="opg4.php">
            <h1>Hvad er b i funktionen f? f har nulpunkt for x=8, f(x)= 4,5x + b</h1>
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
    $input = $_POST['input'];
    if($input == -36){
        $_SESSION['correct'] = $_SESSION['correct']+1;
    }
    header('Location:opgSlut.php');
}
?>