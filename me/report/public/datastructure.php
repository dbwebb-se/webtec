<?php
include('../config/config.php');

$title = 'PHP datastrukturer';

include('../view/header.php');

// $flashMessage = $_SESSION["flash-message"] ?? null;
// unset($_SESSION["flash-message"]);
$flashMessage = getFlashMessage();
?>

<main class="main">
    <h1><?= $title ?></h1>

    <p>Exempelprogram för att prova PHP datastrukturer och hur de används för 
        att bygga webbplatser.</p>

    <?php include('../view/php/array.php') ?>

    <?php if ($flashMessage) : ?>
        <div class="warning"><?= $flashMessage ?></div>
    <?php endif; ?>
    
    <form method="post" action="form_process.php"  id="form">
        <fieldset>
            <legend>Anmäl dig!</legend>

            <p>
                <label>Namn:<br>
                    <input type="text" name="name" placeholder="Skriv in ditt namn...">
                </label>
            </p>

            <p>
                <label>Adress:<br>
                    <textarea name="address" placeholder="Skriv in din adress..."></textarea>
                </label>
            </p>

            <p>
                <label>
                    Jag samtycker till allt, på heder och samvete.
                    <input type="checkbox" name="check">
                </label>
            </p>

            <p>
                <input type="submit" value="Skicka" name="doit">
                <input type="reset" value="Rensa">
            </p>
        </fieldset>
    </form>

</main>

<?php include('../view/footer.php') ?>
