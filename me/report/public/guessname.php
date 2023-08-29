<?php
include('../config/config.php');

$title = 'Gissa dagens namn';

include('../view/header.php');

// Get all the namedays and their meaning
$namedays = getNameDaysByName();
$nameExplanations = getNameExplanation();
// var_dump($nameExplanations);

$randomName = $_SESSION["randomName"] ?? array_rand($nameExplanations, 1);

// $randomName = array_rand($nameExplanations, 1);
$randomExplanation = $nameExplanations[$randomName];
$_SESSION["randomName"] = $randomName;

$flashMessage = $_SESSION["flashMessage"] ?? "";

?>

<main class="main">
    <h1><?= $title ?></h1>

    <h3>Namnets betydelse:</h3>
    <p> <?= $randomExplanation ?> </p>
    <!-- <p> <?= $randomName ?> </p> -->

    <?php if ($flashMessage) : ?>
        <div class="warning"><?= $flashMessage ?></div>
    <?php endif; ?>

    <h3>Vilket namn har den betydelsen?</h3>

    <form method="post" action="guessname_process.php"  id="form" style="margin-bottom:2em;">
        <fieldset>
            <legend>Gissa!</legend>

            <p>
                <label>Namn:<br>
                    <input type="text" name="name" placeholder="Gissa namn...">
                </label>
            </p>

            <p>
                <input type="submit" value="Skicka" name="doit">
                <input type="reset" value="Rensa">
                <input type="submit" value="Fuska" name="cheat">
            </p>
        </fieldset>
    </form>

</main>

<?php include('../view/footer.php') ?>
