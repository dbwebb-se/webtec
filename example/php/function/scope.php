<?php

declare(strict_types=1);

// phpcs:disable PSR1.Files.SideEffects

function scope(): void
{
    $name = "B";
    echo "$name\n";
    for ($i = 0; $i <= 0; $i++) {
        $name = "C";
        echo "$name\n";
    }
    echo "$name\n";
}

$name = "A";
echo "$name\n";
scope();
echo "$name\n";
