<?php

/**
 * A page controller to bootstrap, prepare and render the response.
 */

// Always use strict mote
declare(strict_types=1);

// Bootstrap the application and load the essentials
require "../config/bootstrap.php";

// Create the content
$html = <<<EOD
<h1>Choose your layout</h1>

<p>This page uses a different layout to render the page.</p>

<p>The layout files are stored in <code>view/layout/</code> and are responsible
to build up a page from the bits and pieces found in the <code>\$data</code>
variable.</p>
EOD;

// Prepare the data variables
$data["title"] = "Layout";
$data["main"]  = $html;

// Render data variables onto a page layout to create the web page
//render("layout/base", $data);
render("layout/different", $data);
