<!DOCTYPE html>
<html>
    <head>
        <title>menu</title>
    </head>
    <body>        
        <h1>menu</h1>
        <div>
        <p>
            <div>
                <form method="post" action="menu.php">
                    <input type="submit" name="opg1" value="opgave 1 Funktioner"></input>
                    <br> Første Førsøg | Andet Førsøg <br>
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
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$result%";
                            }
                        }
                    ?>
                </form>
                <br>
            </div>
            <div>
                <form method="post" action="menu.php">
                    <input type="submit" name="opg2" value="opgave 2 DM & VM"></input>
                    <br> Første Førsøg | Andet Førsøg <br>
                    <?php 
                        $conn = mysqli_connect("localhost", "root","");
                        $userid = $_SESSION['UserID'];
                        $sql= "SELECT * FROM websitelogin.final WHERE ID = '$userid'";
                        $resultset = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($resultset)){
                            $result = $row['opg2F']; 
                            if($result == null){
                                    echo "";
                                } else{
                                    echo "$result%";
                                }
                            $result = $row['opg2A']; 
                            if($result == null){
                                echo "";
                            } else{
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$result%";
                            }
                        }
                    ?>
                </form>
                <br>
            </div>
            <div>
                <form method="post" action="menu.php">
                    <input type="submit" name="opg3" value="opgave 3 Regneregler"></input>
                    <br> Første Førsøg | Andet Førsøg <br>
                    <?php 
                        $conn = mysqli_connect("localhost", "root","");
                        $userid = $_SESSION['UserID'];
                        $sql= "SELECT * FROM websitelogin.final WHERE ID = '$userid'";
                        $resultset = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($resultset)){
                            $result = $row['opg3F']; 
                            if($result == null){
                                    echo "";
                                } else{
                                    echo "$result%";
                                }
                            $result = $row['opg3A']; 
                            if($result == null){
                                echo "";
                            } else{
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$result%";
                            }
                        }
                    ?>
                </form>
                <br>
            </div>
        </p>
    </body>
</html>

<?php
if(isset($_POST['opg1'])){ 
    header('Location:opgaver/Opgave1_Funktioner/opg1.php');
}
if(isset($_POST['opg2'])){  
    header('Location:opgaver/Opgave2_DM_VM/opg1.php');
}
if(isset($_POST['opg3'])){  
    header('Location:opgaver/Opgave3_Regneregler/opg1.php');
}
?>  