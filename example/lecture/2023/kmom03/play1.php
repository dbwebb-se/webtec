<?php
include('../config/config.php');

// Float/double
$radius = 7.0;
$pi = 3.14159;

$circumference = 2 * $radius * $pi;
$area = $pi * $radius * $radius;

$formattedRadius = number_format($radius, 1);

// $formattedArea = number_format($area, 2);
$formattedArea = round($area, 4);

?>

<p>
    Cirkelns radie är <?= $formattedRadius ?> enheter, dess omkrets är <?= $circumference ?> enheter och dess area är <?= $formattedArea ?> enheter i kvadrat.
</p>


