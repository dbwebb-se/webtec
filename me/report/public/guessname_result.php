<?php
include('../config/config.php');

$title = 'Gissa namns resultatsida';

include('../view/header.php');

$flashMessage = $_SESSION["flashMessage"] ?? "";

$guessedName = $_SESSION["guessedName"] ?? "";

?>

<main class="main">
    <h1><?= $title ?></h1>

    <?php if ($flashMessage) : ?>
        <div class="success"><?= $flashMessage ?></div>
    <?php endif; ?>

    <p>Bra gissning! <?= $guessedName ?> är rätt svar!</p>

</main>

<?php
// Clean session för att kunna gissa på ett nytt namn och gissa om vid fel
unset($_SESSION["randomName"]);
unset($_SESSION["flashMessage"]);
?>
<?php include('../view/footer.php') ?>
