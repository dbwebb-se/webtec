<?php

$numFiles   = count(get_included_files());
$memoryUsed = memory_get_peak_usage(true);
$loadTime   = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];


// phpcs:disable Generic.Files.LineLength
?><p>Time to load page: <?= $loadTime ?>. Files included: <?= $numFiles ?>. Memory used: <?= $memoryUsed ?>.</p>
