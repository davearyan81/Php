<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square & Cube</title>
</head>
<?php
$bt="";
$btx="";
$btx2="";

if(isset($_POST['input']))
{
    $bt = $_POST['input'];
    $btx = $bt*$bt;

    $btx2 = $bt*$bt*$bt;


}


?>
<body>
  
<form action="" method="post">

<input type="text" name="input" value="">
<input type="submit" name="subbtn" value="">
<input type="text" name="btx" value="<?php echo $btx;?>">
<input type="text" name="btx2" value="<?php echo $btx2;?>">
</form>

</body>
</html>