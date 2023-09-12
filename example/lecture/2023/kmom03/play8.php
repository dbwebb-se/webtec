<?php
//include('../config/config.php');

$date = $_GET["date"] ?? date('Y-m-d');

$timestamp = strtotime($date);

$dateStr        = date('Y-m-d', $timestamp);
$monthStr       = date('F', $timestamp);
$monthDaysStr   = date('t', $timestamp);
$weekStr        = date('W', $timestamp);
$dayStr         = date('l', $timestamp);

$firstDayInWeek  = date('Y-m-d', strtotime("Monday this week", $timestamp));
$lastDayInWeek  = date('Y-m-d', strtotime("Sunday this week", $timestamp));
$firstDayInMonth = date('Y-m-d', strtotime("first day of this month", $timestamp));
$lastDayInMonth = date('Y-m-d', strtotime("last day of this month", $timestamp));
$previousMonth = date('Y-m-d', strtotime("first day of previous month", $timestamp));
$nextMonth = date('Y-m-d', strtotime("first day of next month", $timestamp));

?>

<h2>HTML formulär med GET</h2>

<form action="" method="get">
    <p>
        Datum:
        <input type="text" value="<?= $dateStr ?>" name="date" placeholder="Skriv in ett datum">
    </p>
    <p>
        <input type="submit" value="Skicka" name="doit">
        <input type="reset" value="Rensa">
    </p>
</form>


<h3>The incoming date is <?= htmlentities($date) ?></h3>

<ul>
    <li><?= $dateStr ?></li>
    <li><?= $monthStr ?></li>
    <li><?= $monthDaysStr ?></li>
    <li><?= $weekStr ?></li>
    <li><?= $dayStr ?></li>
</ul>


<h3>Date manipulation with strtotime</h3>

<ul>
    <li>Monday this week: <?= $firstDayInWeek ?></li>
    <li>Sunday this week: <?= $lastDayInWeek ?></li>
    <li>First day in month: <?= $firstDayInMonth ?></li>
    <li>Last day in month: <?= $lastDayInMonth ?></li>
    <li>Previous month: <?= $previousMonth ?></li>
    <li>Next month: <?= $nextMonth ?></li>
</ul>