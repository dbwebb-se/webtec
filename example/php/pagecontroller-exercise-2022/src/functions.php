<?php



/**
 * Render the data onto a layout.
 *
 * @param string $tpl path to the template file, or parts of the path.
 *
 * @throws Exception if the path is not found.
 *
 * @return string string as the path to the file.
 */
function findTemplateFile(string $tpl): ?string
{
    $viewPath = __DIR__ . "/../view";

    $files = [
        $tpl,
        "$viewPath/$tpl",
        "$viewPath/$tpl.php",
    ];

    $target = null;
    foreach ($files as $file) {
        if (is_readable($file)) {
            return $file;
        }
    }

    throw new Exception("The template file '$tpl' does not exists or is not readable in any way I know of.");
}



/**
 * Render the data onto a template file and output the results directly.
 *
 * @param string $tpl path to the template file
 * @param array<string, mixed> $data array with variables to extract
 *
 * @SuppressWarnings(PHPMD.MissingImport)
 */
function render(string $tpl, array $data = []): void
{
    $file = findTemplateFile($tpl);
    extract($data);
    require $file;
}



/**
* Render the data onto a template file and return the results.
 *
 * @param string $tpl path to the template file
 * @param array<string, mixed> $data array with variables to extract
 *
 * @SuppressWarnings(PHPMD.MissingImport)
 */
function renderToString(string $tpl, array $data = []): string
{
    ob_start();

    render($tpl, $data);
    $html = ob_get_contents();

    ob_end_clean();

    return $html ? $html : "";
}



/**
 * Escape string to make it secure to output unsecure user data to a web page.
 *
 * @param string|null $str to escape
 *
 * @return string the esacepd string
 */
function esc(?string $str): string
{
    return htmlentities($str, ENT_QUOTES, "UTF-8");
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
