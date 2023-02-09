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

$cnn=mysqli_connect("localhost","root","","dbdemo");
$qry="select * from employee";
$result=$cnn->query($qry);
$cnt=mysqli_num_rows($result);

$tbl="<table border='2'><tr><th>Eid</th><th>Empname</th><th>Salary</th></tr>";
while($row=$result->fetch_assoc())
{
    $eid=$row["EMpid"];
    $ename=$row["Emname"];
    $salary=$row["salary"];
    
    $tbl.="<tr><td>$eid</td><td>$ename</td><td>$salary</td></tr>";
}

$tbl.="</table>";


echo "$tbl  Total cnt $cnt";



?>    



</body>
</html>