<?php
include('../config/config.php');

$title = 'Om mig själv';

// Set the timezone to use
date_default_timezone_set('Europe/Stockholm');

// The date of today
$today = date('Y-m-d H:i:s');

// Name of the week day
$weekday = date('l');

include('../view/header.php');
?>

<main>
    <h1>Om Mig Själv</h1>

    <p>Dagens datum är <?= $today ?> och idag är det <?= $weekday ?>.</p>

    <p>Här kommer snart min egen fina me-sida.</p>
    <img src="img/me.png" width="300" class="me" alt="Bild på mig">
</main>

<?php include('../view/footer.php') ?>
