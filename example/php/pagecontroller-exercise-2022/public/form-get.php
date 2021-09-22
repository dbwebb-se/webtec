<?php

/**
 * A Pagecontroller.
 */

declare(strict_types=1);

require "../vendor/autoload.php";

$data["title"] = "Form GET";
$data["main"]  = renderToString("form/get", [
    "debug" => true,
]);

render("layout/base", $data);
