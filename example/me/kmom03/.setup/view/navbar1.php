<?php

$requestUri = $_SERVER["SCRIPT_NAME"];
$pageController = basename($requestUri);

?>

<nav class="navbar">
    <ul>
        <li class="<?= $pageController === "me.php" ? "active" : "" ?>"><a href="me.php">Me</a></li>
        <li class="<?= $pageController === "play.php" ? "active" : "" ?>"><a href="play.php">Play</a></li>
        <li class="<?= $pageController === "report.php" ? "active" : "" ?>"><a href="report.php">Report</a></li>
        <li class="<?= $pageController === "about.php" ? "active" : "" ?>"><a href="about.php">About</a></li>
    </ul>
</nav>
