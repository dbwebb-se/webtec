<?php

declare(strict_types=1);

require "../config.php";
require "../src/functions.php";

$data["title"] = "Home";
$data["measure"] = true;
$data["main"] = file_get_contents("../content/me.txt");

render("../view/layout/base.php", $data);
