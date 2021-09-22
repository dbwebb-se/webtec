<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Home";
$data["main"] = file_get_contents("../content/me.txt");

render("../view/layout/base.php", $data);
