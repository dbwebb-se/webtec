<?php

?><h1>Login</h1>

<?= getFlashMessage() ?>

<form method="post" action="login_process.php">
    <fieldset>
        <legend>Login</legend>

        <p>
            <label>Acronym:
                <input type="text" name="acronym" placeholder="Enter your acronym">
            </label>
        </p>

        <p>
            <label>Password:
                <input type="password" name="password" placeholder="Enter the password">
            </label>
        </p>

        <p>
            <input type="submit" name="login" value="Login">
        </p>
    </fieldset>
</form>

<p>
    <a href="create_user.php">Create user</a>
</p>
