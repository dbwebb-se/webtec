<?php

/**
 * A page controller to bootstrap, prepare and render the response.
 */

// Always use strict mote
declare(strict_types=1);

// Bootstrap the application and load the essentials
require "../config/bootstrap.php";

// Load content from a view that renders a list of links
$links = [
    "W3C Cheatsheet" => "https://www.w3.org/2009/cheatsheet/",
    "Unicorn validator" => "https://validator.w3.org/unicorn/",
    "PHP documentation" => "https://www.php.net/manual/en/",
];
$aside = renderToString("link-list", [
    "title" => "A list of useful links",
    "items" => $links
]);

// Create additional content into the sidebar
$aside1 = renderToString("block", [
    "title" => "Block of text",
    "content" => "<p>This is to show how data and views can be put together as"
        . " small bits and pieces.</p>",
]);

// Create content from a view that creates an article
$main = renderToString("article", [
    "title" => "This is the title",
    "content" => "<p>This is the content of the article, to show how one can"
        . "use views to render page content from variables and views.</p>",
]);


// Prepare the data variables
$data["title"] = "Markdown";
$data["main"]  = $main;
$data["aside"] = $aside . $aside1;
$data["measure"] = true;

// Render data variables onto a page layout to create the web page
render("layout/base", $data);
