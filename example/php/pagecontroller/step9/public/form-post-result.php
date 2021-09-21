<?php

declare(strict_types=1);

require "../config.php";
require "../src/functions.php";

$data["title"] = "Form POST";
$data["main"] = renderView("../view/form/post-result.php");

render("../view/layout/base.php", $data);
