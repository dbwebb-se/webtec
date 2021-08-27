<?php

declare(strict_types=1);

function swap(mixed &$a, mixed &$b): void
{
    $c = $a;
    $a = $b;
    $b = $c;
}

$a = "Yo";
$b = "tiger";
echo swap($a, $b);
echo "$a $b\n";
echo swap($a, $b);
echo "$a $b\n";
