<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
$x="";
$y="";
$ans="";
if(isset($_POST['btn']))
{
    $x=$_POST["txtno1"];
    $y=$_POST["txtno2"];
    $z=$_POST['fav_language'];

    if($z=="Addition")
    {
        $ans=$x+$y;
    }
    elseif($z=="Subtraction")
    {
        $ans=$x-$y;
    }
    elseif($z=="Multiplication")
    {
        $ans=$x*$y;
    }
    else
    {
        $ans = $x/$y;
    }
}
?>
    

<form action="" method="post">


<span>Number 1:</span> <input type="text" name="txtno1" value="<?php echo $x; ?>"><br>
<span>Number 2:</span><input type="text" name="txtno2" value="<?php echo $y ?>"><br>

<span>+</span><input type="radio" id="html" name="fav_language" value="Addition">
<span>-</span><input type="radio" id="html" name="fav_language" value="Subtraction">
<span>*</span><input type="radio" id="html" name="fav_language" value="Multiplication">
<span>/</span><input type="radio" id="html" name="fav_language" value="Division">
<input type="submit" name="">
<br>
<span>Ans:</span><input type="text" name="btn" value="<?php echo $ans;?>">

</form>

</body>
</html>