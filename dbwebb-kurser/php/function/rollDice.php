<?php

declare(strict_types=1);

// phpcs:disable PSR1.Files.SideEffects

function rollDice(): int
{
    return rand(1, 6);
}

echo rollDice();
