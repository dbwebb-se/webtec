<?php

declare(strict_types=1);

require "../config/config.php";

$data["title"] = "About";
$data["main"] = <<<EOD
<h1>About page</h1>

<p>Hello about</p>
EOD;

// Create content for the aside, by rendering a view creating a listo of links
$linkList = [
    "W3C Cheatsheet" => "https://www.w3.org/2009/cheatsheet/",
    "Unicorn validator" => "https://validator.w3.org/unicorn/",
    "PHP documentation" => "https://www.php.net/manual/en/",
];
$data["aside"] = renderView("../view/link-list.php", [
    "items" => $linkList
]);


$data["measure"] = true;

render("../view/layout/base.php", $data);
