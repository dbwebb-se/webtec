<?php

$formIsSubmitted = $_POST["doit"] ?? null;

$message = $_POST["message"] ?? null;
$message = htmlentities($message);


// phpcs:disable Generic.Files.LineLength
?><h1>Receive the posted results</h1>

<?php if ($formIsSubmitted) : ?>
    <output>
        <p>The form was submitted.</p>
        <p>The message is: "<?= $message ?>"</p>
    </output>
<?php else : ?>
    <p>You have entered this page without posting a form to it. Go to <a href="form-post.php">form-post.php</a> and submit the form to see the message displayed here.</p>
<?php endif; ?>


<p>You can <a href="<?= basename($_SERVER["SCRIPT_FILENAME"]) ?>">click here to get a fresh pageload</a>.</p>

<hr>

<h2>DEBUG IT</h2>
<p>The array $_POST contains the following.</p>

<pre>
<?= print_r($_POST, true) ?>
</pre>
