<?php
include('../config/config.php');

$sum = 0;
for ($i = 1; $i < 10; $i++) {
    echo "$i<br>";
    //$sum = $sum + $i; 
    $sum += $i; 
}



?>

<h1>The sum is <?= $sum ?></h1>
