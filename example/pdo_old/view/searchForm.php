<?php

$query = htmlentities($query) ?? null;

?><h1>Search the name database</h1>

<form>
    <fieldset>
        <legend>Search for a name or a date</legend>

        <p>
            <label>Search:
                <input type="text" name="query" placeholder="What to search for, % is wildcard" value="<?= $query ?>">
            </label>
        </p>

        <p>
            <input type="submit" name="doit" value="Search">
        </p>
    </fieldset>
</form>
