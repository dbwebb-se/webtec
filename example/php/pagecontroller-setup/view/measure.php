<?php

/**
 * A template file, to use when rendering a view.
 * Use as little as possible logic here, only render the
 * variables that are "sent" to the view. Programming logic
 * should be done in the page controller.
 */

$numFiles   = count(get_included_files());
$memoryUsed = memory_get_peak_usage(true);
$loadTime   = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];


// phpcs:disable Generic.Files.LineLength
?><p>Time to load page: <?= $loadTime ?>. Files included: <?= $numFiles ?>. Memory used: <?= $memoryUsed ?>.</p>
