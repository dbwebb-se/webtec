<?php

$items = [
    "Home"      => "home.php",
    "Report"    => "report.php",
    "About"     => "about.php",
];

?><nav>
<?php foreach ($items as $key => $val) : ?>
    <a href="<?= $val ?>"><?= $key ?></a>
<?php endforeach; ?>
</nav>
