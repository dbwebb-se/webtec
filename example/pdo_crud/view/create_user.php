<?php

https://imgur.com/a/TCs9hhn
?><h1>Create user</h1>

<?= getFlashMessage() ?>

<form method="post" action="create_user_process.php">
    <fieldset>
        <legend>Create user</legend>

        <p>
            <label>Acronym:<br>
                <input type="text" name="acronym" placeholder="Enter acronym">
            </label>
        </p>

        <p>
            <label>Password:<br>
                <input type="password" name="password1" placeholder="Enter the password">
            </label>
        </p>

        <p>
            <label>Password (again):<br>
                <input type="password" name="password2" placeholder="Enter the password again">
            </label>
        </p>

        <p>
            <input type="submit" name="doit" value="Create user">
        </p>

    </fieldset>
</form>
