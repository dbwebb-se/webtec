<?php

declare(strict_types=1);

$foo = "1";                     // $foo is string (ASCII 49)
$foo = $foo * 2;                // $foo is now an integer (2)
$foo = $foo * 1.3;              // $foo is now a float (2.6)

// These give Notice in PHP 80
$foo = 5 * "10 Little Piggies"; // $foo is integer (50)
$foo = 5 * "10 Small Pigs";     // $foo is integer (50)
