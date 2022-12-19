<!DOCTYPE html>
<html>
    <head>
        <title> opgave 3 </title>
    </head>
    <body>
        <form method="post" action="opg3.php">
            <h1>Hvad er 3 + 5*2(3 - 3)?</h1>
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
    if($input == 3){
        $_SESSION['correct'] = $_SESSION['correct']+1;
    }
    header('Location:opg4.php');
}
?>