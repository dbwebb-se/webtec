<?php

/**
 * A Pagecontroller.
 */

declare(strict_types=1);

require "../vendor/autoload.php";

$data["title"] = "Form POST";
$data["main"]  = renderToString("form/post");

render("layout/base", $data);
