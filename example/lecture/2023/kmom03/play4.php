<?php
include('../config/config.php');

$num = 1;
$sum = 0;

// start from 1 and increment by one
// sum all numbers until the sum is more than 42

// loop until the sum is above 42
while ( $sum <= 42 ) {
    // print out the number to sum
    //echo "$num<br>";

    // add on to the sum
    $sum = $sum + $num;
    //echo "($sum)<br>";

    // increment the number
    $num = $num + 1;
}


?>

<h1>The sum is <?= $sum ?></h1>
