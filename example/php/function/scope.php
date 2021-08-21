<?php

declare(strict_types=1);

function scope () : void
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
