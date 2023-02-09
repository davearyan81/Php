<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<?php

    $b = $_POST["input1"];
    $c = $_POST["input2"];
    $d=$b*$c;


?>
<body>
<form action="p18.php" method=>

<span>NUmber 1:</span><input type="text" name="input1" value="<?php echo $b;?>">
<span>Number 2:</ span><input type="text" name="input2" value="<?php echo $c;?>">
<input type="text" name="submit" value="<?php echo $d;?>">

</form>

</body>
</html>