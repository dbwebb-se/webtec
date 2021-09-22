<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Form GET";
$data["main"] = renderView("../view/form/get.php");

render("../view/layout/base.php", $data);
