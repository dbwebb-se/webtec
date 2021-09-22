<?php

/**
 * A template file, to use when rendering a view.
 */

// Check if form was submitted
$formIsSubmitted = $_GET["doit"] ?? null;

// Get the submitted data
$message = $_GET["message"] ?? null;



?><h1>Try a form with GET</h1>

<form>
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

<?php if ($formIsSubmitted) : ?>
    <output>
        <p>The form was submitted.</p>
        <p>The message is: "<?= esc($message) ?>"</p>
    </output>
<?php else : ?>
    <p>Enter a message above and press a button to submit the message to the server and see it here.</p>
<?php endif; ?>


<p>You can <a href="<?= esc(basename($_SERVER["SCRIPT_FILENAME"])) ?>">click here to get a fresh pageload</a>.</p>



<?php if ($debug ?? null) : render("form/get-debug"); endif ?>
