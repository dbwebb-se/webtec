<?php

declare(strict_types=1);

require "../config.php";
require "../src/functions.php";

$data["title"] = "Session process";
$data["main"] = renderView("../view/form/session-process.php");

render("../view/layout/base.php", $data);
