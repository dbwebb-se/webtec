<?php

/**
 * A Pagecontroller.
 */

declare(strict_types=1);

require "../vendor/autoload.php";

$data["title"] = "Cookie";
$data["main"]  = renderToString("form/cookie", [
    "debug" => false,
]);

render("layout/base", $data);
