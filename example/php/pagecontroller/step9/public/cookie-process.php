<?php

declare(strict_types=1);

require "../config.php";
require "../src/functions.php";

$data["title"] = "Cookie process";
$data["main"] = renderView("../view/form/cookie-process.php");

render("../view/layout/base.php", $data);
