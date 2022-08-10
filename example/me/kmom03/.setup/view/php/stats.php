<?php

/**
 * Divide your view files into "two stages", start by coding PHP and preparing
 * the content into variables (1), then output the content/variables together
 * with HTML elements (2).
 * It is good practice to keep this in two stages, it makes your code cleaner
 * and easier to read, edit and develop.
 */

 // Calculate the time it took to process this page
$timestampFirst = $_SERVER["REQUEST_TIME_FLOAT"];
$timestampLast = microtime(true);
$diff = $timestampLast - $timestampFirst;
$loadTime = round($diff * 1000, 3);

// Get files included during the processing of this request
$filesIncluded = get_included_files();
$numFiles = count($filesIncluded);

// Get the memory used during processing
$memoryPeak = round(memory_get_peak_usage() / 1024 / 1024, 2);
$memoryCurrent = round(memory_get_usage() / 1024 / 1024, 2);
$memoryLimit = ini_get("memory_limit");

?>

<p>Sidans laddningstid är <?= $loadTime ?> ms.</p>

<p>Antalet filer som inkluderats <?= $numFiles ?> stycken.</p>

<p>Varje request får max nyttja minne <?= $memoryLimit ?>, denna processen använder för 
tillfället <?= $memoryCurrent ?> MB och peak var <?= $memoryPeak ?> MB.</p>