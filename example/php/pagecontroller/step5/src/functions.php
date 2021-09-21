<?php

/**
 * Render the data onto a layout.
 */
function render(string $layout, $data = []): void
{
    if (!is_readable($layout)) {
        throw new Exception("The layout file '$layout' does not exists or is not readable.");
    }

    extract($data);
    require $layout;
}



/**
 * Render data onto a view and return the results.
 */
function renderView(string $view, $data = []): string
{
    if (!is_readable($view)) {
        throw new Exception("The layout file '$view' does not exists or is not readable.");
    }

    extract($data);
    ob_start();
    require $view;
    $html = ob_get_contents();
    ob_end_clean();

    return $html;
}
