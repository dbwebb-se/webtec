<?php

/**
 * A Pagecontroller.
 */

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Session";
$data["main"] = renderView("../view/form/session.php");

render("../view/layout/base.php", $data);
