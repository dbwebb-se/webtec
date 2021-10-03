<?php

/**
 * A page controller to bootstrap, prepare and render the response.
 */

// Always use strict mote
declare(strict_types=1);

// Bootstrap the application and load the essentials
require "../config/bootstrap.php";

echo <<<EOD
<h1>The debug page controller</h1>

<p>This pagecontroller just outputs directly from the pagecontroller, without using a layout or views.</p>

<p>This is good for debugging and troubleshooting and testing code constructs.</p>
EOD;

echo "PHP version is " . PHP_VERSION;
