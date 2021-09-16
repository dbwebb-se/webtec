<!doctype html>
<meta charset="utf8">
<title>Measure it</title>

<h1>Showing how to measure details on the page load</h1>

<p>There is a <a href="https://dbwebb.se/kunskap/skapa-en-webbsida-med-html-css-och-php-steg-2#mat">section in an article providing some background to this</a>.</p>

<p>Reload the page and se if next page load gets faster or slower.</p>

<?php

$numFiles   = count(get_included_files());
$memoryUsed = memory_get_peak_usage(true);
$loadTime   = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];

?><p>Time to load page: <?= round($loadTime * 1000, 3) . "ms" ?>. Files included: <?= $numFiles ?>. Memory used: <?= $memoryUsed / 1024 . "KB" ?>.</p>
