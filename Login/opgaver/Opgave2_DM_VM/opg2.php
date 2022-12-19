<!DOCTYPE html>
<html>
    <head>
        <title> opgave 2 </title>
    </head>
    <body>
        <form method="post" action="opg2.php">
            <h1>Hvad er Værdimængden for f?</h1>
            <div>
                <p>
                    [
                    <input autocomplete="off" type="text" name="input" size="1">
                    :    
                    <input autocomplete="off" type="text" name="input2" size="1">
                    ]
                </p>
                <p>
                    <img src="DM.png" alt="">
                </p>
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
    $input2=$_POST['input2'];
    if($input == 4 && $input2 == 12){
        $_SESSION['correct'] = $_SESSION['correct']+1;
    } 
    header('Location:opg3.php');
}
?>