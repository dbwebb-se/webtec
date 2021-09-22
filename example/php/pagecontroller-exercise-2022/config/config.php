<?php


error_reporting(-1);                // Report all type of errors
ini_set('display_errors', '1');     // Display all errors

// Start the named session,
// the name is based on the path to this file.
$name = preg_replace("/[^a-z\d]/i", "", __DIR__);
session_name($name);
session_start();

// Set a default exception handler
set_exception_handler(function ($e) {
    echo "<p>Uncaught exception:</p><p>Line "
        . $e->getLine()
        . " in file <code>"
        . $e->getFile()
        . "</code></p><p>Type of exception:<br><code>"
        . get_class($e)
        . "</code></p><p>Message:<br>"
        . $e->getMessage()
        . "</p><p>Code: "
        . $e->getCode()
        . "</p><p>Stacktrace:</p><pre>"
        . $e->getTraceAsString()
        . "</pre>";
});
