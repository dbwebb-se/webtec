<?php

$id         = htmlentities($res['rowid'] ?? "");
$acronym    = htmlentities($res['acronym'] ?? "");
$name       = htmlentities($res['name'] ?? "");
$role       = htmlentities($res['role'] ?? "");
$avatar     = htmlentities($res['avatar'] ?? "");
$signature  = htmlentities($res['signature'] ?? "");

?><h1>User profile for: '<?= $acronym ?>'</h1>

<form>
    <fieldset>
        <legend>User '<?= $acronym ?>'</legend>

        <p>
            <label>Id:
                <input type="text" name="id" value="<?= $id ?>" readonly="readonly">
            </label>
        </p>


        <p>
            <label>Acronym:
                <input type="text" name="acronym" value="<?= $acronym ?>" readonly="readonly">
            </label>
        </p>

        <p>
            <label>Name:
                <input type="text" name="name" value="<?= $name ?>" readonly="readonly">
            </label>
        </p>

        <p>
            <label>Role:
                <input type="text" name="role" value="<?= $role ?>" readonly="readonly">
            </label>
        </p>

        <figure class="right">
            <img src="<?= $avatar ?>" alt="Avatar for <?= $acronym ?>">
        </figure>

        <p>
            <label>Avatar:
                <input type="text" name="avatar" value="<?= $avatar ?>" readonly="readonly">
            </label>
        </p>


        <p>
            <label>Signature:
                <input type="text" name="signature" value="<?= $signature ?>" readonly="readonly">
            </label>
        </p>
    </fieldset>
</form>
