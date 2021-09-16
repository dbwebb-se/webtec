<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Home";
$data["measure"] = true;
$data["main"] = "<pre>" . print_r($_SERVER, true) . "</pre>";

render("../view/layout/base.php", $data);
