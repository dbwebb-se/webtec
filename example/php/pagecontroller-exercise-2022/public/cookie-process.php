<?php

/**
 * A Pagecontroller as a processing page to process a request, usually a
 * submitted form, and then redirect to a result page.
 */

declare(strict_types=1);

require "../vendor/autoload.php";

// Check what button was used to post the form
$rememberMyName = $_POST["doit"]    ?? null;
$forgetMyName   = $_POST["forget"]  ?? null;

// Get the values from the posted form
$name = $_POST["name"] ?? null;
$key = "my_name_is";

if ($rememberMyName) {
    // Set a new value to the cookie
    setCookie($key, $name);
} elseif ($forgetMyName) {
    // Forget the cookie by unsetting it and providing a time  that has passed
    setCookie($key, '', time() - 3600);
}

// Redirect to a result page
header("Location: cookie.php");
