<?php

declare(strict_types=1);

$a = [];
array_push($a, "a");
array_push($a, "b");
array_push($a, "c");

print_r($a);
echo array_shift($a) . "\n";
print_r($a);
