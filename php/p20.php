<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p20</title>
</head>
<?php

session_start();
$_SESSION["no1"]=$_POST["inputar"];

?>
<body>

<form action="p21.php" method="post">
    <span>NUmber 2:</span><input type="text" name="input2">
    <input type="submit" value="next">
</form>
    
</body>
</html>