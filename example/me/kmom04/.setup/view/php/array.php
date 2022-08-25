<?php

/**
 * Divide your view files into "two stages", start by coding PHP and preparing
 * the content into variables (1), then output the content/variables together
 * with HTML elements (2).
 * It is good practice to keep this in two stages, it makes your code cleaner
 * and easier to read, edit and develop.
 */

$mikael = [
    "Mikael",
    "Roos",
    1968,
    "Teacher",
    78.2
];

$items = count($mikael);

$pos0HasValue = array_key_exists(0, $mikael);
$pos10HasValue = array_key_exists(10, $mikael);

?>


<h2>Array som datastrukturer</h2>

<p>Låt oss testa att använda en array.</p>

<p>På position 0 finns följande värde: '<?= $mikael[0] ?>' och på position 4 finns värdet: '<?= $mikael[4] ?>'.</p>

<p>Arrayen innehåller <?= $items ?> värden.</p>

<p>På position 0 finns ett värde: '<?= $pos0HasValue ? "TRUE" : "FALSE" ?>' och på position 10 finns ett värde: '<?= $pos10HasValue ? "TRUE" : "FALSE" ?>'.</p>

<pre><?= print_r($mikael, true) ?></pre>

<pre><?= var_dump($mikael) ?></pre>
