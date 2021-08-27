<?php

declare(strict_types=1);

function rollDice(): int
{
    return rand(1, 6);
}

echo rollDice();
