<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p22</title>
</head>
<?php

session_start();
$_SESSION["no2"]=$_POST["input2"];
?>
<body>

<form action="p22.php" method="post">
    
            <select type name="list">
                <option value="Addition">Addition</option>
                <option value="Subtraction">Subtraction</option>
                <option value="Division">Division</option>
                <option value="Multiplication">Multiplication</option>
            </select>
            <input type="submit" value="Next">
</form>

</body>
</html>