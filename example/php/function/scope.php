<?php

declare(strict_types=1);

// phpcs:disable PSR1.Files.SideEffects

function scope(): void
{
    $name = "B";        // Function block scope
    echo "$name\n";     // B
    
    for ($i = 0; $i <= 0; $i++) {
        $name = "C";
        echo "$name\n"; // C
    }
    echo "$name\n";     // C
}

$name = "A";            // Global scope
echo "$name\n";         // A

scope();
echo "$name\n";         // A
