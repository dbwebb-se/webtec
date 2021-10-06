<?php

/**
 * General functions.
 */

/**
 * Render the data onto a layout.
 *
 * @param string $tpl path to the template file, or parts of the path.
 *
 * @throws Exception if the path is not found.
 *
 * @return string string as the path to the file.
 *
 * @SuppressWarnings(PHPMD.MissingImport)
 */
function findTemplateFile(string $tpl): string
{
    $viewPath = __DIR__ . "/../view";

    $files = [
        $tpl,
        "$viewPath/$tpl",
        "$viewPath/$tpl.php",
    ];

    foreach ($files as $file) {
        if (is_readable($file)) {
            return $file;
        }
    }

    throw new Exception(
        "The template file '$tpl' does not exists or is not readable in"
        . " any way I know of. I even tried the paths '$viewPath/$tpl' and"
        . " '$viewPath/$tpl.php'."
    );
}



/**
 * Render the data onto a template file and output the results directly.
 *
 * @param string $tpl path to the template file
 * @param array<string, mixed> $data array with variables to extract
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
 * Render data onto a view and return the results.
 *
 * @param array<string, mixed> $data
 *
 * @deprecated to be replaced by renderToString which is a better name
 */
function renderView(string $view, array $data = []): string
{
    return renderToString($view, $data);
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
    return htmlentities($str ?? "", ENT_QUOTES, "UTF-8");
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



/**
 * Exception handler to print out a HTML message with details on the exception,
 * useful to deal with uncaught exceptions.
 */
function defaultHtmlExceptionHandler(Exception $e): void
{
    $class = get_class($e);

    echo <<< EOD
    <p>Uncaught exception:</p>
    <p>Line {$e->getLine()} in file '<code>{$e->getFile()}</code>'</p>
    <p>Type of exception:<br><code>{$class}</code></p>
    <p>Message:<br>{$e->getMessage()}</p>
    <p>Code: {$e->getCode()}</p>
    <p>Stacktrace:</p>
    <pre>{$e->getTraceAsString()}</pre>
    EOD;
}



/**
 * Connect to the database and return the connection object.
 *
 * @return object as the PDO database connection object.
 *
 * @SuppressWarnings(PHPMD.MissingImport)
 */
function connectToDatabase(string $dsn): object
{
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>'$dsn'<br>";
        throw $e;
    }

    return $db;
}
