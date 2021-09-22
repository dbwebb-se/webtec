<?php

/**
 * A template file, to use when rendering a view.
 */



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

<p>Enter a message above and press a button to submit the message to the server and see it displayed in the result page.</p>
