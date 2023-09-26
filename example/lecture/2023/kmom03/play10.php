<?php
//include('../config/config.php');

$date = $_GET["date"] ?? date('Y-m-d');

// This is the current date we are working on
$timestamp = strtotime($date);
$currentDate = date('Y-m-d', $timestamp);

// Get the first and last day of the month
$firstDayInMonth = date('Y-m-d', strtotime("first day of this month", $timestamp));
$lastDayInMonth  = date('Y-m-d', strtotime("last day of this month", $timestamp));
$startTimestamp  = strtotime("first day of this month", $timestamp);

// Get previous and next month
$previousMonth = date('Y-m-d', strtotime("first day of previous month", $timestamp));
$nextMonth     = date('Y-m-d', strtotime("first day of next month", $timestamp));


$year           = date('Y', $timestamp);
$monthStr       = date('F', $timestamp);
$daysInMonth    = date('t', $timestamp);
$weekStr        = date('W', $timestamp);
$dayStr         = date('l', $timestamp);

$firstDayInWeek  = date('Y-m-d', strtotime("Monday this week", $timestamp));
$lastDayInWeek  = date('Y-m-d', strtotime("Sunday this week", $timestamp));
$firstDayInMonth = date('Y-m-d', strtotime("first day of this month", $timestamp));
$lastDayInMonth = date('Y-m-d', strtotime("last day of this month", $timestamp));
$previousMonth = date('Y-m-d', strtotime("first day of previous month", $timestamp));
$nextMonth = date('Y-m-d', strtotime("first day of next month", $timestamp));

$calStr = "";
$timestamp = strtotime("first day of this month", $timestamp);

for ($i = 1; $i <= $daysInMonth; $i++) {
    $dayNum     = date('d', $timestamp);
    $dayStr     = date('l', $timestamp);
    $dayInyear  = date('z', $timestamp);
    $weekNum    = date('W', $timestamp);

    $calStr .= "<tr class=\"" . strtolower($dayStr) . "\">";
    $calStr .= "<td>$dayNum</td>";
    $calStr .= "<td>$dayStr</td>";
    $calStr .= "<td>$dayInyear</td>";

    if ($dayStr == "Monday" || $dayNum == 1) {
        $calStr .= "<td>$weekNum</td>";
    } else {
        $calStr .= "<td></td>";
    }
    $calStr .= "</tr>";

    $timestamp = strtotime("next day", $timestamp);
}

?><style>
table, tr, td {
    border: 1px solid #ccc;
}
.month {
    font-size: 2em;
    text-align: center;
}
.sunday {
    color: red;
}
</style>

<h2>Kalender</h2>

<form action="" method="get">
    <p>
        Datum:
        <input type="text" value="<?= $currentDate ?>" name="date" placeholder="Skriv in ett datum">
    </p>
    <p>
        <input type="submit" value="Skicka" name="doit">
        <input type="reset" value="Rensa">
    </p>
</form>

<ul>
    <li>Dagens datum: <?= $currentDate ?></li>
    <li>Första dagen i månaden: <?= $firstDayInMonth ?></li>
    <li>Sista dagen i månaden: <?= $lastDayInMonth ?></li>
    <li>Föregående månad: <?= $previousMonth ?></li>
    <li>Nästa månad: <?= $nextMonth ?></li>
</ul>

<p>
    <a href="?date=<?= $previousMonth ?>">Previous month</a> |
    <a href="?date=<?= $nextMonth ?>">Next month</a>
</p>
<!--
<table>
    <tr>
        <td colspan="4" class="month"><?= "$monthStr $year ($daysInMonth days)" ?></td>
    </tr>
    <?= $calStr ?>
</table>
-->