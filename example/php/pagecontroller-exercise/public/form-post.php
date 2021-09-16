<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Form POST";
$data["main"] = renderView("../view/form/post.php");

render("../view/layout/base.php", $data);
