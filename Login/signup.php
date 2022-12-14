<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <form method="post" action="signup.php">
            <h1>Sign up</h1>
            <div class="textBoxdiv">
                <input type="text" placeholder="username" name="username">
            </div>
            <div class="textBoxdiv">
                <input type="password" placeholder="password" name="password">
            </div>
            <input type="submit" value="Sign up" class="loginBtn" name="login_Btn">
            <div class="signup">
                Already have an account ?
                </br>
                <a href="login.php">login</a>
            </div>
        </form>
    </body>
</html>

<?php
$conn = mysqli_connect("localhost", "root","");
if(isset($_POST['login_Btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql = "SELECT * FROM websitelogin.login WHERE Username = '$username'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<script>
        alert('user already exists');
    </script>";
    return;
    }
    $sql= "INSERT INTO websitelogin.login (Username,Password) VALUES('$username','$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New profile created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
?>