<?php

declare(strict_types=1);

// phpcs:disable PSR1.Files.SideEffects

/**
 * Supress phpmd due to https://github.com/phpmd/phpmd/issues/870
 * @SuppressWarnings(PHPMD.UndefinedVariable)
 */
function scopeWithStatic(): int
{
    static $value = 1;

    return $value++;
}

echo scopeWithStatic() . "\n";  // 1
echo scopeWithStatic() . "\n";  // 2
echo scopeWithStatic() . "\n";  // 3
