<?php

/**
 * Various functions for improved code structure.
 */

/**
 * Destroy the session
 */
function destroySession(): void
{
    // Unset all of the session variables.
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
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



/**
 * Get the flash message and return it, if any.
 *
 * @return string with flash message, empty string of no message exists.
 */
function getFlashMessage(): string
{
    $flashMessage = $_SESSION["flash-message"] ?? "";
    unset($_SESSION["flash-message"]);

    return $flashMessage;
}
