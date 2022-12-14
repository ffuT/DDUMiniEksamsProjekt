<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <form method="post" action="login.php">
            <h1>Login</h1>
            <div class="textBoxdiv">
                <input type="text" placeholder="username" name="username">
            </div>
            <div class="textBoxdiv">
                <input type="password" placeholder="password" name="password">
            </div>
            <input type="submit" value="Login" class="loginBtn" name="login_Btn">
            <div class="signup">
                Don't have an account ?
                </br>
                <a href="signup.php">Sign up</a>
            </div>
        </form>
    </body>
</html>

<?php
session_start();
$conn = mysqli_connect("localhost", "root","");
if(isset($_POST['login_Btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql= "SELECT * FROM websitelogin.login WHERE Username = '$username'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $resultPassword = $row['Password'];
        if($password == $resultPassword){
            $_SESSION['UserID'] = $row['ID'];
            $_SESSION['Username'] = $username;
            $_SESSION['Password'] = $password;
            header('Location:menu.php');
        }else{
            echo "<script>
                alert('Login unsuccessful');
            </script>";
        }
        return;
    }
    echo "<script>
        alert('user: \"$username\" doesn\'t exist');
    </script>";
}
?>