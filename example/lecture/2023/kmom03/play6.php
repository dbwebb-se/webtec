<?php
include('../config/config.php');

//play6.php?date=2023-06-01
$date = $_GET["date"] ?? date('Y-m-d');

$timestamp = strtotime($date);

$dateStr        = date('Y-m-d', $timestamp);
$monthStr       = date('F', $timestamp);
$monthDaysStr   = date('t', $timestamp);
$weekStr        = date('W', $timestamp);
$dayStr         = date('l', $timestamp);


?>

<h3>The incoming date is <?= htmlentities($date) ?></h3>

<ul>
    <li><?= $dateStr ?></li>
    <li><?= $monthStr ?></li>
    <li><?= $monthDaysStr ?></li>
    <li><?= $weekStr ?></li>
    <li><?= $dayStr ?></li>
</ul>