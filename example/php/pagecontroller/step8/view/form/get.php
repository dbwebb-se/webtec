<?php

$formIsSubmitted = $_GET["doit"] ?? null;

$message = $_GET["message"] ?? null;
$message = htmlentities($message);


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
        <p>The message is: "<?= $message ?>"</p>
    </output>
<?php else : ?>
    <p>Enter a message above and press a button to submit the message to the server and see it here.</p>
<?php endif; ?>


<p>You can <a href="<?= basename($_SERVER["SCRIPT_FILENAME"]) ?>">click here to get a fresh pageload</a>.</p>

<hr>

<h2>DEBUG IT</h2>
<p>The array $_GET has the following output from <code>var_dump($_GET)</code>.</p>

<?= var_dump($_GET) ?>
