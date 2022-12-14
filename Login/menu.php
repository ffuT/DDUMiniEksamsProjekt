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
                Første Førsøg | Andet Førsøg <br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <?php 
                    session_start();
                    $conn = mysqli_connect("localhost", "root","");
                    $userid = $_SESSION['UserID'];
                    $sql= "SELECT * FROM websitelogin.final WHERE ID = '$userid'";
                    $resultset = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($resultset)){
                        $result = $row['opg1F']; 
                        if($result == null){
                                echo "";
                            } else{
                                echo "$result%";
                            }
                        $result = $row['opg1A']; 
                        if($result == null){
                            echo "";
                        } else{
                            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$result%";
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
    header('Location:opgaver/opgave1/opg1.php');
}
if(isset($_POST['opg2'])){  
    echo "<script>
            alert('nej');
        </script>";
}
?>  