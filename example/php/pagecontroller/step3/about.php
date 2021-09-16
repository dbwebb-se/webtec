<?php

declare(strict_types=1);

require "config.php";
require "src/functions.php";

$data["title"] = "About";
$data["main"] = <<<EOD
<h1>About page</h1>

<p>Hello about</p>
EOD;

render("view/layout/base.php", $data);
