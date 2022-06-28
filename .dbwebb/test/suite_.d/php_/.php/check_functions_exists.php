<?php

require "src/functions.php";

$functions = [
    "about",
    "exitProgram",
    "notValidChoice",
    "printPhpVersion",
    "printTimeAndDate",
    "printString",
    "printNumberArrays",
    "printStringArrays",
];

$total = 0;
$found = 0;
foreach ($functions as $function) {
    $total++;
    $found++;
    if (!function_exists($function)) {
        echo "Function '$function()' is not defined.\n";
        $found--;
    }
}

echo "($found/$total)";

exit($total - $found);
