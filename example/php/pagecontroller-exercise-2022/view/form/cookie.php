<?php

/**
 * A template file, to use when rendering a view.
 */

$key = "my_name_is";
$name = $_COOKIE[$key] ?? null;



?><h1>Remember my name in a cookie</h1>

<form method="post" action="cookie-process.php">
    <fieldset>
        <legend>Store your name in a cookie</legend>

        <p>
            <input type="text" name="name" placeholder="Write your name" value="<?= esc($name) ?>">
        </p>

        <p>
            <input type="reset" value="Reset form input">
            <input type="submit" name="doit" value="Remember my name">
            <input type="submit" name="forget" value="Forget my name">
        </p>
    </fieldset>

    <output>
        <p>The cookie with the key '<?= $key ?>' is
            <?= esc(($name) ? "set to the value '$name'" : "not set") ?>.
        </p>
    </output>
</form>



<?php if ($debug ?? null) : render("form/cookie-debug"); endif ?>
