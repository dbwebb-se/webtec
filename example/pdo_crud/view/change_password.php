<?php


?><h1>User profile for: '<?= $user ?>'</h1>

<?= getFlashMessage() ?>

<form method="post" action="change_password_process.php">
    <fieldset>
        <legend>Change password '<?= $user ?>'</legend>

        <!--
        <p>
            <label>Password (current):<br>
                <input type="password" name="password_current" placeholder="Enter current password">
            </label>
        </p>
        -->

        <p>
            <label>Password (new):<br>
                <input type="password" name="password_new1" placeholder="The new password">
            </label>
        </p>

        <p>
            <label>Password (new again):<br>
                <input type="password" name="password_new2" placeholder="The new password again">
            </label>
        </p>

        <p>
            <input type="submit" name="doit" value="Update password">
        </p>

    </fieldset>
</form>
