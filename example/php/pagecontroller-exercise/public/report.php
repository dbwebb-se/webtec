<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "Report";
$data["main"] = <<<EOD
<h1>Report page</h1>

<p>Here comes the reports.</p>
EOD;

$Parsedown = new Parsedown();
$reports = ["kmom01", "kmom03", "kmom05", "kmom10"];
foreach ($reports as $report) {
    $filename = "../content/$report.md";
    if (is_readable($filename)) {
        $data["main"] .= $Parsedown->text(file_get_contents($filename));
    }
}

render("../view/layout/base.php", $data);
