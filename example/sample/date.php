<?php

// Get incoming date and its timestamp
$incomingDate      = $_GET["date"] ?? date("Y-m-d");
$incomingTimestamp = strtotime($incomingDate);

// Find the first day in the month, and its timestamp
$firstDayInMonth = date("Y-m-01", $incomingTimestamp);
$firstDayInMonthTimestamp = strtotime($firstDayInMonth);

// Weekday for the first day in the month (just checking)
$firstDayInMonthWeekday = date("N", $firstDayInMonthTimestamp);

// The monday to start with, and its timestamp
$firstMondayTimestamp = strtotime("Monday this week", $firstDayInMonthTimestamp);
$firstMonday = date("Y-d-m", $firstMondayTimestamp);
$firstMondayWeekday = date("N", $firstMondayTimestamp);

// Previous and next month
$previousMonth = date('Y-m-d', strtotime("first day of previous month", $incomingTimestamp));
$nextMonth = date('Y-m-d', strtotime("first day of next month", $incomingTimestamp));


?><style>
th { text-align: left } 
</style>
<form>
    <input type="date" name="date" value="<?= htmlentities($date) ?>">
    <input type="submit" name="doit" value="Submit">
</form>
<table>
<tr><th>Inkommande (eller default) datum:</th><td><?= $incomingDate ?></td></tr>
<tr><th>Inkommande timestamp (antal sekunder sedan 1970-01-01):</th><td><?= $incomingTimestamp ?></td></tr>
<tr><th>Första dagen i månaden:</th><td><?= $firstDayInMonth ?></td></tr>
<tr><th>Första dagen i månaden (timestamp):</th><td><?= $firstDayInMonthTimestamp ?></td></tr>
<tr><th>Första dagen i månaden (veckodag):</th><td><?= $firstDayInMonthWeekday ?></td></tr>
<tr><th>Första måndagen:</th><td><?= $firstMonday ?></td></tr>
<tr><th>Första måndagen (timestamp):</th><td><?= $firstMondayTimestamp ?></td></tr>
<tr><th>Första måndagen (veckodag):</th><td><?= $firstMondayWeekday ?></td></tr>
</table>

<p>
    <a href="?date=<?= htmlentities($previousMonth) ?>">Previous month</a> |
    <a href="?date=<?= htmlentities($nextMonth) ?>">Next month</a>
</p>