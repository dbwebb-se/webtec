<?php
include('../config/config.php');

$month = date('F');
$weekNum = date('W');
$dayNum = date('N');
$dayStr = date('l');

$dayNum = 7;

if ($dayNum == 5) {
    echo "IT IS fredag<br>";
} elseif ($dayNum == 4) {
    echo "IT IS torsdag<br>";
} elseif ($dayNum < 5) {
    $days = 5 - $dayNum;
    echo "Det är " . $days . " kvar till fredag.<br>";
} else {
    echo "Det är troligen helg nu (" . $dayNum . ")<br>";
}


?>

<ul>
    <li>Månad: <?= $month ?></li>
    <li>Veckonummer: <?= $weekNum ?></li>
    <li>Dagnummer (i veckan): <?= $dayNum ?></li>
    <li>Dag: <?= $dayStr ?></li>
</ul>




