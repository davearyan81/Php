<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

if(isset($_POST["subbtn"]))

{
    $b=$_POST["txtno1"];
    $c=$_POST["txtno2"];
    // $d=$b*$c;
}



?>
<body>
            <form action="" method="post">
                <input type="number" name="txtno1" value="<?php echo $b;?>">
                <input type="number" name="txtno2" value="<?php echo $c;?>">
                <input type="submit" name="subbtn">
                <input type="number" name="ans" value="<?php echo $b*$c ;?>">
            </form>    
</body>
</html>