<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area</title>
</head>
<?php
if(isset($_POST['he']))
{


$height = $_POST['he'];
$base = $_POST['ba'];

$area = $height*$base;
}
?>
<body>

        <form action="" method="post">


        <input type="number" name="he" value="<?php echo $height ?>">
        <input type="number" name="ba" value="<?php echo $base ?>">
        <input type="submit" name="subbtn" >
        <input type="number" name="are" value="<?php echo $area ?>">

        </form>

</body>
</html>