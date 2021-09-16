<?php

$items = [
    "Home"      => "home.php",
    "Report"    => "report.php",
    "About"     => "about.php",
    "Server"    => "server.php",
    "Form GET"  => "form-get.php",
    "Form POST" => "form-post.php",
    "Cookie"    => "cookie.php",
    "Session"   => "session.php",
];

$curPage = basename($_SERVER["REQUEST_URI"]);

?><nav>
<?php foreach ($items as $key => $val) :
    $selected = ($curPage === $val) ? "selected" : null;
    ?>
    <a class="<?= $selected ?>" href="<?= $val ?>"><?= $key ?></a>
<?php endforeach; ?>
</nav>
