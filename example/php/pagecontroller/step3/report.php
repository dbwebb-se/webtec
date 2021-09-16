<?php

declare(strict_types=1);

require "config.php";
require "src/functions.php";

$data["title"] = "Report";
$data["main"] = <<<EOD
<h1>Report page</h1>

<p>Hello report</p>
EOD;

render("view/layout/base.php", $data);
