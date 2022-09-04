<?php
include('../config/config.php');

$title = 'PHP datastrukturer';

include('../view/header.php');
?>

<main class="main">
    <h1><?= $title ?></h1>

    <p>Exempelprogram för att prova PHP datastrukturer och hur de används för att bygga webbplatser.</p>

    <?php include('../view/php/array.php') ?>
    <?php include('../view/php/array_date.php') ?>
</main>

<?php include('../view/footer.php') ?>
