<!DOCTYPE html>
<html>
    <head>
        <title>menu</title>

    </head>
    <body>        
        <h1>menu</h1>

        <div>
        <p>
            <form method="post" action="menu.php">
                <input type="submit" name="opg1" value="opgave 1"></input>
                <?php 
                    session_start();
                    $conn = mysqli_connect("localhost", "root","");
                    $userid = $_SESSION['UserID'];
                    $sql= "SELECT Correct FROM websitelogin.login WHERE ID = '$userid'";
                    $resultset = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($resultset)){
                        $result = $row['Correct']; 
                        if($result == null){
                                echo "";
                            } else{
                                echo "$result%";
                            }
                        }
                ?>
            </form>
        </p>
        <p>
            <form method="post" action="menu.php">
                <input type="submit" name="opg2" value="opgave 2">            
            </form>
        </p>


        </div>
    </body>


</html>

<?php
if(isset($_POST['opg1'])){ 
    header('Location:opgaver/opgave1.php');
}
if(isset($_POST['opg2'])){  
    echo "<script>
            alert('nej');
        </script>";
}


?>  