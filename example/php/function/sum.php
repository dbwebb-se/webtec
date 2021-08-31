<?php

declare(strict_types=1);

// phpcs:disable PSR1.Files.SideEffects

function sum(int $a, int $b = 0, int $c = 0): int
{
    return $a + $b + $c;
}

echo sum(1);        // 1
echo sum(1, 2);     // 3
echo sum(1, 2, 3);  // 6
