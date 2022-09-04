<?php

/**
 * Divide your view files into "two stages", start by coding PHP and preparing
 * the content into variables (1), then output the content/variables together
 * with HTML elements (2).
 * It is good practice to keep this in two stages, it makes your code cleaner
 * and easier to read, edit and develop.
 */

$weekday = [
    "Måndag",
    "Tisdag",
    "Onsdag",
    "Torsdag",
    "Fredag",
    "Lördag",
    "Söndag"
];

$dayNumToday = date("N");

$dayToday = $weekday[$dayNumToday - 1];

// Months
$monthName = [];
$monthName[1] = "Januari";
$monthName[] = "Februari";
$monthName[] = "Mars";
$monthName[] = "April";
$monthName[] = "Maj";
$monthName[] = "Juni";
$monthName[] = "Juli";
$monthName[] = "Augusti";
$monthName[] = "September";
$monthName[] = "Oktober";
$monthName[] = "November";
$monthName[] = "December";

$monthNames = implode(", ", $monthName);

$monthNumToday = date("n");

$monthToday = $monthName[$monthNumToday];

?>


<h2>Array med datum</h2>

<p>Här är en array med veckodagar på position 0 till 6.</p>

<pre><?= print_r($weekday, true) ?></pre>

<p>Idag är det veckodag: '<?= $dayToday ?>' (veckodag nummer <?= $dayNumToday ?>).</p>


<p>Vi har en array med månadernas namn, vi kan använda "implode()" på den för att skriva ut den som en sträng.</p>

<p><?= $monthNames ?>.</p>

<p>Idag är det månad: '<?= $monthToday ?>' (månadens nummer <?= $monthNumToday ?>).</p>
