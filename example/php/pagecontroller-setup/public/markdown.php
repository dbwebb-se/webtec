<?php

/**
 * A page controller to bootstrap, prepare and render the response.
 */

// Always use strict mote
declare(strict_types=1);

// Bootstrap the application and load the essentials
require "../config/bootstrap.php";

// Load the markdown file and parse it into HTML
$Parsedown = new ParsedownExtra();

$markdown = file_get_contents("../content/markdown.md");
$html = $Parsedown->text($markdown);

// Prepare the data variables
$data["title"] = "Markdown";
$data["main"]  = $html;

// Render data variables onto a page layout to create the web page
render("layout/base", $data);
