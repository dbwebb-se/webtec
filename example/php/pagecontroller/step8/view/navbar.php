<?php

$items = [
    "Home"      => "home.php",
    "Report"    => "report.php",
    "About"     => "about.php",
    "Server"    => "server.php",
    "Form GET"  => "form-get.php",
    "Form POST" => "form-post.php",
];

?><nav>
<?php foreach ($items as $key => $val) : ?>
    <a href="<?= $val ?>"><?= $key ?></a>
<?php endforeach; ?>
</nav>
