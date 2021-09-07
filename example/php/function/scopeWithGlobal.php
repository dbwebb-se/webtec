<?php

declare(strict_types=1);

// phpcs:disable PSR1.Files.SideEffects

function scopeWithGlobal(): void
{
    global $name;

    $name = "B"; // Referencing global scope
    echo "$name\n";     // B
}

$name = "A";            // Global scope
echo "$name\n";         // A

scopeWithGlobal();
echo "$name\n";         // B
