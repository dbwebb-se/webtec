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
 * Set the flash message.
 *
 * @return void.
 */
function setFlashMessage(
    string $type,
    string $message
): void {
    $flashMessage = <<<EOD
    <div class="$type">
        <p>$message</p>
    </div>
    EOD;
    $_SESSION["flash-message"] = $flashMessage;
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



/**
 * Check if the user is logged in and return the user acronym or redirect to
 * the login page.
 *
 * @return string the user acronym.
 */
function checkIfUserLoggedInOrRedirectToLogin(): string
{
    $user = $_SESSION["user"] ?? null;
    if (!$user) {
        setFlashMessage("warning", "Only a logged in user can access the page user.php!");
        header("Location: login.php");
        exit();
    }
    return $user;
}



/**
 * Check if the user is logged in and return the user acronym or an empty
 * string.
 *
 * @return string the user acronym or an empty string when the user is not
 *                logged in.
 */
function checkIfUserLoggedIn(): string
{
    $user = $_SESSION["user"] ?? "";
    return $user;
}



/**
 * Redirect to a page.
 *
 * @return void
 */
function redirectTo(string $url): void
{
    header("Location: $url");
    exit();
}
