<?php

declare(strict_types=1);



/**
 * Render the data onto a layout.
 */
function render(string $layout, $data = []): void
{
    extract($data);
    if (!is_readable($layout)) {
        throw new Exception("The layout file '$layout' does not exists or is not readable.");
    }
    require $layout;
}
