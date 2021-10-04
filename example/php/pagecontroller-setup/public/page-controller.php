<?php

/**
 * A page controller to bootstrap, prepare and render the response.
 */

// Always use strict mote
declare(strict_types=1);

// Bootstrap the application and load the essentials
require "../config/bootstrap.php";


// Create content in a variable
$html = <<<EOD
<h1>Page controller</h1>

<p>This is a sample page controller. It produces a web page by adding content into the \$data variable which then is rendered onto a HTML layout.</p>

<p>It starts by reading its setup and configuration from a botstrapping file called <code>config/bootstrap.php</code>. That file contains som essential and useful setup to make it easier to work with the page controller and to build websites and web applications. However, the page controller will work without the bootstrap file, so it is "fine" to exclude it and build up your own codebase.</p>

<p>You could also exclude the rendering part and just require files as you wish, its fine to do so also. That would then be a plain and vanilla "page controller" that does its best to create a web page.</p>

<p>If you stick with the bootstrap and rendering part, you then have a small and tiny web framework where you can build your page controllers to create a website or web application. In the end, when you become a web programmer, you will use larger frameworks and code bases which use a similair structure as this. This structure is just as small as it can be, without being to advanced or complicated. Use it as a solid base to learn from.</p>

EOD;

// Prepare the data variables
$data["title"] = "Page controller";
$data["main"] = $html;

// Render data variables onto a page layout to create the web page
render("layout/base", $data);
