<?php

// No PHP setup is needed for this view

// phpcs:disable Generic.Files.LineLength
?><h1>Try a form with POST</h1>

<form method="post" action="form-post-result.php">
    <fieldset>
        <legend>Submit your message</legend>

        <p>
            <input type="text" name="message" placeholder="Write some message">
        </p>

        <p>
            <input type="reset" value="Reset form input">
            <input type="submit" name="doit" value="Press to submit form">
        </p>
    </fieldset>
</form>

<p>Enter a message above and press a button to submit the message to the server and see it displayed in another page.</p>

<p>You can <a href="<?= basename($_SERVER["SCRIPT_FILENAME"]) ?>">click here to get a fresh pageload</a>.</p>

<hr>

<h2>DEBUG IT</h2>
<p>The array $_POST contains the following.</p>

<pre>
<?= print_r($_POST, true) ?>
</pre>
