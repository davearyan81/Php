<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop</title>
</head>

<?php
$h='';
$loop='';
$anse='';

if(isset($_POST['inputfield']))
{
    $h=$_POST["inputfield"];

    for ($loop = 1;$loop<=$h;$loop++)
    {
           $anse .= $loop;
    }

}
?>
<body>

  <form action="" method="post">

    <input type="number" name="inputfield" value="<?php echo $h; ?>">
    <input type="submit" name="btnsub">
    <input type="number" name="output" value="<?php echo $anse; ?>">

  </form>  
    
</body>
</html>