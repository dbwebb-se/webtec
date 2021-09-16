<?php

$dice  = $_SESSION["dice"]  ?? null;
$sum   = $_SESSION["sum"]   ?? null;
$rolls = $_SESSION["rolls"] ?? null;

$diceClass = "dice-$dice";
$average = $rolls ? round($sum / $rolls, 2) : 0;


?><h1>Throw a dice, and remember it</h1>

<form method="post" action="session-process.php">
    <fieldset>
        <legend>Throw the dice</legend>

        <p>
            <input type="submit" name="doit" value="Roll the dice">
            <input type="submit" name="reset" value="Restart">
            <input type="submit" name="kill" value="Kill session">
        </p>

        <?php if ($dice) : ?>
            <output>
                <p class="dice <?= $diceClass ?>"></p>
                <p>The sum of all thrown dices are: <?= $sum ?></p>
                <p>The average is: <?= $average ?></p>
            </output>
        <?php endif; ?>

    </fieldset>
</form>

<hr>

<h2>DEBUG IT</h2>

<p>The array $_SESSION contains the following.</p>

<pre>
<?= print_r($_SESSION, true) ?>
</pre>
