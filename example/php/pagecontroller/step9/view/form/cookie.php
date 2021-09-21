<?php

$name = $_COOKIE["my_name_is"] ?? null;
$name = htmlentities($name);


?><h1>Remember my name with a cookie</h1>

<form method="post" action="cookie-process.php">
    <fieldset>
        <legend>Store your name in a cookie</legend>

        <p>
            <input type="text" name="name" placeholder="Write your name" value="<?= $name ?>">
        </p>

        <p>
            <input type="reset" value="Reset form input">
            <input type="submit" name="doit" value="Remember my name">
            <input type="submit" name="forget" value="Forget my name">
        </p>
    </fieldset>
</form>

<hr>

<h2>DEBUG IT</h2>

<p>The value of <code>var_dump($_COOKIE["my_name_is"])</code> is show below.</p>

<?= var_dump($_COOKIE["my_name_is"] ?? null) ?>

<p>The array $_COOKIE has the following output from <code>var_dump($_COOKIE)</code>.</p>

<?= var_dump($_COOKIE) ?>
