<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positive</title>

</head>
<?php
$var='';
$A='';
if(isset($_POST['text1']))

{

    $var=$_POST['text1'];
    if($var>0)
    {
        $A="$var is an positive number";
    }
    else
    {
        $A = "$var an negative number";
    }
}

?>


<body>

    <form action="" method="post">
        <input type="number" name="text1" value="<?php echo $var;?>">
        <input type="submit">
        <input type="text" name="answer" value="<?php echo $A;?>">
    </form>

</body>
</html>