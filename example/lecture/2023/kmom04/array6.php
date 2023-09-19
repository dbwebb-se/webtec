<?php
include('../config/config.php');

?><h1>Lek med POST formulär</h1>

<form method="post" action="array6_process.php">
    <p>
        <label>Name: <input type="text" name="name"></label>
    </p>

    <p>
        <label>Lösenord: <input type="password" name="pwd"></label>
    </p>

    <p>
        <label>Message: <input type="text" name="message"></label>
    </p>

    <p>
        <input type="submit" name="doit" value="Send">
    </p>
</form>

