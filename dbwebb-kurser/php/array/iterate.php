<?php

declare(strict_types=1);

$items = [1, 2, 3];

foreach ($items as $value) {
    echo $value . "\n";
}

foreach ($items as $key => $value) {
    echo "$key => $value\n";
}
