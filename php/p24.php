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
    $z=$_POST['list'];

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

    

<select name="list">

<option value="Addition">Addition</option>
<option value="Subtraction">Subtraction</option>
<option value="Multiplication">Multiplication</option>
<option value="Division">Division</option>
</select>
<br>
<input type="submit" name="btn">
<span>Ans:</span><input type="text" value="<?php echo $ans;?>">

</form>

</body>
</html>