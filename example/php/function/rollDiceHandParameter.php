<?php

declare(strict_types=1);

// phpcs:disable PSR1.Files.SideEffects

function rollDiceHand(int $number = 5): array
{
    $dice = [];
    for ($i = 1; $i <= $number; $i++) {
        $dice[] = rand(1, 6);
    }
    return $dice;
}

echo implode(", ", rollDiceHand()) . "\n";
echo implode(", ", rollDiceHand(3)) . "\n";
