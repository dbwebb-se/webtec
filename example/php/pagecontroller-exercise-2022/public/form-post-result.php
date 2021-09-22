<?php

/**
 * A Pagecontroller as a processing page to process a request, usually a
 * submitted form, and then redirect to a result page.
 */

declare(strict_types=1);

require "../vendor/autoload.php";

$data["title"] = "Form POST";
$data["main"]  = renderToString("form/post-result", [
    "debug" => false,
]);

render("layout/base", $data);
