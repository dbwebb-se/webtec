<?php

$id         = htmlentities($res['rowid'] ?? "");
$acronym    = htmlentities($res['acronym'] ?? "");
$name       = htmlentities($res['name'] ?? "");
$role       = htmlentities($res['role'] ?? "");
$avatar     = htmlentities($res['avatar'] ?? "");
$signature  = htmlentities($res['signature'] ?? "");

?><h1>User profile for: '<?= $acronym ?>'</h1>

<p>
    <a href="change_password.php">Change password</a> |
    <a href="delete_user.php">Delete user</a>
</p>

<?= getFlashMessage() ?>

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
                <input type="text" name="name" value="<?= $name ?>">
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
                <input type="text" name="avatar" value="<?= $avatar ?>">
            </label>
        </p>


        <p>
            <label>Signature:
                <input type="text" name="signature" value="<?= $signature ?>">
            </label>
        </p>
    </fieldset>
</form>
