<?php

$numFiles   = count(get_included_files());
$memoryUsed = memory_get_peak_usage(true);
$loadTime   = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];

?><p>Time to load page: <?= round($loadTime * 1000, 3) . "ms" ?>. Files included: <?= $numFiles ?>. Memory used: <?= $memoryUsed / 1024 . "KB" ?>.</p>
