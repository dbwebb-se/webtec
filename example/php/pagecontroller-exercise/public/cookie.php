<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Cookie";
$data["main"] = renderView("../view/form/cookie.php");

render("../view/layout/base.php", $data);
