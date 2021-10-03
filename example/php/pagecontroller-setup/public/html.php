<?php

/**
 * A page controller to bootstrap, prepare and render the response.
 */

// Always use strict mote
declare(strict_types=1);

// Bootstrap the application and load the essentials
require "../config/bootstrap.php";


// Load the content file
$html = file_get_contents("../content/html-part.txt");

// Prepare the data variables
$data["title"] = "Home";
$data["main"] = $html;

// Render data variables onto a page layout to create the web page
render("layout/base", $data);
