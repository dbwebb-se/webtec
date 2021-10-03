<?php

$id         = htmlentities($res['rowid'] ?? null);
$name       = htmlentities($res['namn'] ?? null);
$date       = htmlentities($res['datum'] ?? null);
$nameLength = htmlentities($res['namnlangd'] ?? null);

$checked = $nameLength === "Ja" ? 'Checked="Checked"' : null;


?><h1>Delete row in database</h1>

<form method="post" action="delete-process.php">
    <fieldset>
        <legend>Row with id '<?= $id ?>'</legend>

        <input type="hidden" name="id" value="<?= $id ?>">

        <p>
            <label>Name:
                <input type="text" name="name" value="<?= $name ?>" readonly="readonly">
            </label>
        </p>

        <p>
            <label>Date:
                <input type="text" name="date" value="<?= $date ?>" readonly="readonly">
            </label>
        </p>

        <p>
            <label>Namnlängd:
                <input type="checkbox" name="nameLength" value="Ja" <?= $checked ?> disabled="disabled">
            </label>
        </p>

        <p>
            <input type="reset" value="Reset">
            <input type="submit" name="doit" value="Delete">
        </p>
    </fieldset>
</form>
