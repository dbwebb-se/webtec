<?php

declare(strict_types=1);

// phpcs:disable PSR1.Files.SideEffects

function scopeWithStatic(): int
{
    static $value = 1;

    return $value++;
}

echo scopeWithStatic() . "\n";  // 1
echo scopeWithStatic() . "\n";  // 2
echo scopeWithStatic() . "\n";  // 3
