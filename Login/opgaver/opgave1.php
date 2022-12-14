<!DOCTYPE html>
<html>
    <head>
        <title> opgave 1 </title>
    </head>
    <body>
        <form method="post" action="opgave1.php">
            <h1>Hvad er 2 + 2?</h1>
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
    $input=$_POST['input'];
    
    if($input == 4){
        echo "<script>
        alert('Correct');
    </script>";
    } else {
        echo "<script>
        alert('Wrong');
    </script>";
    }
}
?>