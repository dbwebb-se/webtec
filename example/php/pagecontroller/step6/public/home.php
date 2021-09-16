<?php

declare(strict_types=1);

require "../config.php";
require "../src/functions.php";

$data["title"] = "Home";
$data["main"] = <<<EOD
<h1>Main page</h1>

<p>Hello main</p>
EOD;

render("../view/layout/base.php", $data);
