<?php

declare(strict_types=1);

function rollDiceHand(): array
{
    $dice = [];
    for ($i = 1; $i <= 5; $i++) {
        $dice[] = rand(1, 6);
    }
    return $dice;
}
echo implode(", ", rollDiceHand());
