<?php

/**
 * Divide your view files into "two stages", start by coding PHP and preparing
 * the content into variables (1), then output the content/variables together
 * with HTML elements (2).
 * It is good practice to keep this in two stages, it makes your code cleaner
 * and easier to read, edit and develop.
 */

// Get incoming arguments from querystring
$date = $_GET['date'] ?? null;

$dateStr = "";
if ($date) {
    $dateStr = htmlentities($date);
}

?>


<h2>HTML formulär med GET</h2>

<form action="" method="get">
    <p>
        Datum:
        <input type="text" value="<?= $dateStr ?>" name="date" placeholder="Skriv in ett datum">
    </p>

    <p>
        <input type="submit" value="Skicka" name="doit">
        <input type="reset" value="Rensa">
    </p>

    <output>
        <?php if ($dateStr) : ?>
            <p>You have submitted the date: <code><?= $dateStr ?></code>.</p>
        <?php endif; ?>
    </output>
</form>

<p>This is how you can debug the content of the incoming <code>$_GET</code> variable.</p>
<pre><?= var_dump($_GET) ?></pre>