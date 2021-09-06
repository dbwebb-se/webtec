<?php

declare(strict_types=1);

// phpcs:disable PSR1.Files.SideEffects

namespace Foo;

class Foo
{
    // Nothing
}

$a = [
    "fortytwo"  => 42,
    "name"      => "Mikael",
    "pi"        => 3.1415,
    "boolean"   => true,
    "noValue"   => null,
    "moreItems" => [1, 2, 3, 4],
    "fooObject" => new Foo(),
];

var_dump($a);
