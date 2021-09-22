<?php

declare(strict_types=1);

require "../config/config.php";

$Parsedown = new ParsedownExtra();
$reports = ["intro", "kmom01", "kmom03", "kmom05", "kmom10"];
$reportText = "";

foreach ($reports as $report) {
    $filename = "../content/$report.md";

    if (is_readable($filename)) {
        $reportText .= $Parsedown->text(file_get_contents($filename));
    }
}


$data["title"] = "Report";
$data["main"]  = $reportText;

render("../view/layout/base.php", $data);
