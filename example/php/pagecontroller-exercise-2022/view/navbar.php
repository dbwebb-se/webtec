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
    "DB status" => "db-status.php",
    "DB connect" => "db-connect.php",
    "DB select"  => "db-select.php",
    "DB search"  => "db-search.php",
    "DB single"  => "db-single.php",
    "DB show"    => "db-show.php",
    "DB insert"  => "db-insert.php",
];

$curPage = basename($_SERVER["REQUEST_URI"]);


?><nav>
<?php foreach ($items as $key => $val) :
    $selected = ($curPage === $val) ? "selected" : null;
    ?>
    <a class="<?= $selected ?>" href="<?= $val ?>"><?= $key ?></a>
<?php endforeach; ?>
</nav>
