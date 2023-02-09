<?php
require 'config.php';
if(isset($_POST["submit"]))
{
    $usernamemail=$_POST["usernamemail"];
    $password=$_POST["password"];
    $result = mysqli_query($conn , "SELECT * FROM tb_user WHERE username = '$usernamemail' OR email = '$usernamemail'");
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result)>0)
    {
        if($password == $row["password"])
        {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location:index.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <h2>Login</h2>
    <br>
        <form action="" method="post" autocomplete="off">

        <label for="usernamemail">Username or mail :</label>
        <input type="text" name="usernamemail" id="usernamemail" required value="">
        <br>
        
        <label for="password">Password :</label>
        <input type="text" name="password" id="password" required value="">
        <br>
        <button type="submit" name="submit">Login</button>

        </form>
    <br>

    <a href="registration.php">Registration</a>

</body>
</html>