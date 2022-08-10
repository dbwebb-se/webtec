<?php
include('../config/config.php');

$title = 'Träna på PHP';

include('../view/header.php');
?>

<main class="main">
    <h1><?= $title ?></h1>

    <p>Här bygger vi kod för att träna på PHP och dess olika konstruktioner som skall hjälpa oss att generera webbsidor.</p>

    <?php include('../view/php/hello.php') ?>
</main>

<?php include('../view/footer.php') ?>
