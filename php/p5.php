<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max between 3</title>
</head>
<body>

<!-- 5) max between 3 -->
<?php
$j=40;
$k=20;
$l=10;

if($j>$k && $j>$l)
{
    echo"The J is greater than all numbers";
}
elseif($k>$l && $k>$j)
{
    echo"The K is greater than all numbers";
}
elseif($l>$j && $l>$k)
{
    echo"The L is greater than all numbers";
}
elseif($j=$k=$l)
{
    echo"ALl the three terms are euqal";
}


?>

</body>
</html>