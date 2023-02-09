<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAximum</title>
</head>
<?php
$max="";
$min="";
$ans="";

if(isset($_POST['input1']))
{

    $max=$_POST['input1'];
    $min=$_POST['input2'];
    if($max >$min)
    {
        $ans="$max is maximum";
    }
    else
    {
        $ans="$min is maximium";
    }
}
    

?>

<body>
<form action="" method="post">

    <input type="number" name="input1" value="<?php echo $max ?>" >
    <input type="text" name="input2" value="<?php echo $min ?>" >
    <input type="submit">
    <input type="text" name="ans" value="<?php echo $ans ?>">

</form>

    
</body>
</html>