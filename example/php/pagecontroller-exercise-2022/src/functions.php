<?php

/**
 * Render the data onto a layout.
 *
 * @param array<string, mixed> $data
 *
 * @SuppressWarnings(PHPMD.MissingImport)
 */
function render(string $layout, array $data = []): void
{
    if (!is_readable($layout)) {
        throw new Exception("The layout file '$layout' does not exists or is not readable.");
    }

    extract($data);
    require $layout;
}



/**
 * Render data onto a view and return the results.
 *
 * @param array<string, mixed> $data
 *
 * @SuppressWarnings(PHPMD.MissingImport)
 */
function renderView(string $view, array $data = []): string
{
    if (!is_readable($view)) {
        throw new Exception("The layout file '$view' does not exists or is not readable.");
    }

    extract($data);
    ob_start();
    require $view;
    $html = ob_get_contents();
    ob_end_clean();

    return $html ? $html : "";
}



/**
 * Destroy a session, the session must be started.
 *
 * @SuppressWarnings(PHPMD.Superglobals)
 */
function sessionDestroy(): void
{
    // Unset all of the session variables.
    $_SESSION = [];

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        $name = session_name();
        setcookie(
            $name ? $name : "",
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();
}
