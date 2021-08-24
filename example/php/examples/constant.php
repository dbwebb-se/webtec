<?php

declare(strict_types=1);

define("CONSTANT", "Hello world.");
echo CONSTANT;          // outputs "Hello world."

const CONSTANT_MORE = 'Hello World';
const ANOTHER_CONST = CONSTANT . " - Goodbye World";
const ANIMALS = array('dog', 'cat', 'bird');

print_r(get_defined_constants());
