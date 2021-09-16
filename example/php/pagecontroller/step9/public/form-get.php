<?php

declare(strict_types=1);

require "../config.php";
require "../src/functions.php";

$data["title"] = "Form GET";
$data["main"] = renderView("../view/form/get.php");

render("../view/layout/base.php", $data);
