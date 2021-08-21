<?php

declare(strict_types=1);

function maxValue (array $values) : float
{
    $max = null;
    foreach ($values as $value) {
        $max = $max < $value ? $value : $max;
    }
    return (float) $max;
}

echo maxValue([99, 42, 13, 1]);
echo maxValue([1, 99, 13, 42]);
echo maxValue([1, 13, 42, 99]);
