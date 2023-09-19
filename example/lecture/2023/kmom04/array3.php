<?php
include('../config/config.php');

$weekday = [
    "Måndag",
    "Tisdag",
    "Onsdag",
    "Torsdag",
    "Fredag",
    "Lördag",
    "Söndag"
];

$allDays = "";
foreach ($weekday as $key => $value) {
    $allDays .= "<li>$value ($key)</li>";
}


?><h1>Lek med arrayer</h1>

<ul>
    <?= $allDays ?>
</ul>

<pre>
<?= print_r($weekday, true) ?>
</pre>

<pre>
<?= var_dump($weekday) ?>
</pre>
