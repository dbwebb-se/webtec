<?php

/**
 * Divide your view files into "two stages", start by coding PHP and preparing
 * the content into variables (1), then output the content/variables together
 * with HTML elements (2).
 * It is good practice to keep this in two stages, it makes your code cleaner
 * and easier to read, edit and develop.
 */

$text = "Mumintrollet bor i det blå huset.";
$words = explode(" ", $text);

$result = "<ul>\n";
foreach ($words as $position => $word) {
    $len = strlen($word);
    $result .= "<li>'$word' med $len bokstäver på position $position.</li>\n";
}
$result .= "</ul>\n";
?>


<h2>Foreach</h2>

<p>Här kommer texten uppdelad i dess beståndsdelar.</p>

<blockquote>"<?= $text ?>"</blockquote>

<?= $result ?>
