<?php

declare(strict_types=1);

class Foo {

};

$a = [
    2 => 42,
    4 => "Mikael",
    6 => 3.1415,
    8 => true,
    10 => false,
    12 => null,
    14 => [],
    16 => rand(1, 6),
    1337 => new Foo(),
];

var_dump($a);
