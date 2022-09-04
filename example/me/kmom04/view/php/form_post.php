<?php

/**
 * Divide your view files into "two stages", start by coding PHP and preparing
 * the content into variables (1), then output the content/variables together
 * with HTML elements (2).
 * It is good practice to keep this in two stages, it makes your code cleaner
 * and easier to read, edit and develop.
 */

$flashMessage = $_SESSION["flash-message"] ?? null;
unset($_SESSION["flash-message"]);

?>


<h2 id="form">HTML formulär med POST</h2>

<?php if ($flashMessage) : ?>
    <div class="warning"><?= $flashMessage ?></div>
<?php endif; ?>

<form action="form_process.php" method="post">
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
