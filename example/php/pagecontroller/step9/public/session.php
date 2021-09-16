<?php

declare(strict_types=1);

require "../config.php";
require "../src/functions.php";

$data["title"] = "Session";
$data["main"] = renderView("../view/form/session.php");

render("../view/layout/base.php", $data);
