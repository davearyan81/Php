<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkbox</title>
</head>
<?php
$a = '';
if (isset($_POST['btn'])) {
    if (isset($_POST['Add'])) {
        $a .= "Addition";
    }
    if (isset($_POST['Sub'])) {
        $a .= "Subtraction";
    }
    if (isset($_POST['Div'])) {
        $a .= "Division";
    }
    if (isset($_POST['Multiplication'])) {
        $a .= "Multipliation";
    }
}

?>

<body>
    <form action="" method="post">
        <span>Addition</span><input type="checkbox" name="Add" value="Addition">
        <span>Subtraction</span><input type="checkbox" name="Sub" value="Subtraction">
        <span>Division</span><input type="checkbox" name="Div" value="Division">
        <span>Multiplication</span><input type="checkbox" name="Mul" value="Multiplication">
        <input type="submit" name="btn">
        <input type="text" name="ans" value="<?php echo $a; ?>">
    </form>
</body>

</html>