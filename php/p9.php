<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if(isset($_POST['btn']))
{
    $a=$_POST['txtno1'];
    $b=$_POST['txtno2'];
        $num = $a+$b;
}
?>
<body>

<form method="post">
    <input type="number" name="txtno1" value="<?php echo $a;?>">
    <input type="number" name="txtno2" value="<?php echo $b;?>">
    <input type="submit" name="btn">
    <input type="number" name="txtans" value="<?php echo $num;?>">
</form>
    
</body>
</html>