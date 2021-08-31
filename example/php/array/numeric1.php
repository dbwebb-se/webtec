<?php

declare(strict_types=1);

$a = [42, 1337];

$a[] = 3.1415;
$a[] = "Mikael";
$a[20] = " likes PHP.";
$a[10] = true;
$a[] = null;

echo count($a) . "\n";
var_dump($a);
