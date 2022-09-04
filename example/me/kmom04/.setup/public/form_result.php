<?php
include('../config/config.php');

$title = 'Formulär resultatsida';

include('../view/header.php');

$flashMessage = $_SESSION["flash-message"] ?? null;
unset($_SESSION["flash-message"]);

?>

<main class="main">
    <h1><?= $title ?></h1>

    <?php if ($flashMessage) : ?>
        <div class="success"><?= $flashMessage ?></div>
    <?php endif; ?>

    <p>Tack för dina uppgifter, nu har vi "sparat" dem.</p>

</main>

<?php include('../view/footer.php') ?>
