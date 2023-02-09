<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p19</title>
</head>

<?php

session_start();
$a = $_SESSION["no1"];
$b = $_SESSION["no2"];
$vam = $_POST["list"];

if ($vam == "Addition") {
    $vam = $a + $b;
    $i = "Addition";
} elseif ($vam == "Subtraction") {
    $vam = $a - $b;
    $i = "Subtraction";
} elseif ($vam == "Division") {
    $vam = $a % $b;
    $i = "Division";
} else {
    $vam = $a * $b;
    $i = "Multiplication";
}


?>


<body>

    <form action="p22.php">

        <span>Number 1:</span><input type="text" name="inputar" value="<?php echo $a; ?>"><br>
        <span>Number 1:</span><input type="text" name="inputar" value="<?php echo $b; ?>"><br>
        <input type="text" value="<?php echo $i; ?>"><br>
        <input type="number" value="<?php echo $vam; ?>">


    </form>


</body>

</html>