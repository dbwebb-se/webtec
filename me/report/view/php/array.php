<?php

$mikael = [
    "Mikael",
    "Roos",
    1968,
    "Teacher",
    78.2
];

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

$text = "Mumintrollet bor i det blå huset.";
$words = explode(" ", $text);

$result = "<ul>\n";
foreach ($words as $position => $word) {
    $len = strlen($word);
    $result .= "<li>'$word' med $len bokstäver på position $position.</li>\n";
}
$result .= "</ul>\n";
?>

<h2>Array som datastrukturer</h2>

<p>Låt oss testa att använda en array.</p>

<pre><?= print_r($mikael, true) ?></pre>

<pre><?= var_dump($mikael) ?></pre>

<p>Här är en array med veckodagar på position 0 till 6.</p>

<pre><?= print_r($weekday, true) ?></pre>

<p>Idag är det veckodag: '<?= $dayToday ?>' (veckodag nummer <?= $dayNumToday ?>).</p>

<p>Vi har en array med månadernas namn, vi kan använda "implode()" på den för att skriva ut den som en sträng.</p>

<p><?= $monthNames ?>.</p>

<p>Idag är det månad: '<?= $monthToday ?>' (månadens nummer <?= $monthNumToday ?>).</p>

<h2>Foreach</h2>

<p>Här kommer texten uppdelad i dess beståndsdelar.</p>

<blockquote>"<?= $text ?>"</blockquote>

<?= $result ?>
