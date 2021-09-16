<!doctype html>
<meta charset="utf8">
<title>About | Style navbar</title>
<style>
nav {
    background-color: SeaShell;
    padding: 1em;
}
nav a {
    background-color: tomato;
    padding: 1em;
}
nav a:hover {
    background-color: SeaShell;
}
nav a.selected {
    color: tomato;
    background-color: SeaShell;
}
pre {
    background-color: #eee;
    border: 1px solid #ccc;
    padding: 1em;
}
</style>

<h1>Show how to style the active (selected) navbar item</h1>

<p>This is the navbar. Click it.</p>

<?php $curPage = basename($_SERVER["REQUEST_URI"]); ?>
<nav>
    <a class="<?= ($curPage === "home.php")   ? "selected" : null ?>" href="home.php">Home</a>
    <a class="<?= ($curPage === "report.php")   ? "selected" : null ?>" href="report.php">Report</a>
    <a class="<?= ($curPage === "about.php")   ? "selected" : null ?>" href="about.php">About</a>
</nav>

<p>Here are details about the current selected page, found by PHP code. Read more on the process in the article "<a href="https://dbwebb.se/guide/kom-igang-med-programmering-i-php/styla-nuvarande-lank-i-en-navbar">Styla nuvarande länk i en navbar</a>".</p>

<pre><?php

$uri = $_SERVER["REQUEST_URI"];
$curPage = basename($uri);

echo '$uri = $_SERVER["REQUEST_URI"] = ' . $_SERVER["REQUEST_URI"] . "\n";
echo "\n";
echo '$curPage = basename($uri) = ' . basename($uri) . "\n";
echo "\n";
echo "home.php   = " . (($curPage === "home.php")   ? "selected" : null) . "\n";
echo "about.php  = " . (($curPage === "about.php")  ? "selected" : null) . "\n";
echo "report.php = " . (($curPage === "report.php") ? "selected" : null) . "\n";
