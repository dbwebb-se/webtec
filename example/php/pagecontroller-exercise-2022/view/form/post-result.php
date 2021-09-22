<?php

/**
 * A template file, to use when rendering a view.
 */

// Check if the form is submitted
$formIsSubmitted = $_POST["doit"] ?? null;

// Get the message posted through the form and sanitize it to avoid
// security issues.
$message = $_POST["message"] ?? null;



// phpcs:disable Generic.Files.LineLength
?><h1>Receive the posted results</h1>

<?php if ($formIsSubmitted) : ?>
    <output>
        <p>The form was submitted into another pagecontroller.</p>
        <p>The message is: "<?= esc($message) ?>"</p>
    </output>

<?php else : ?>
    <p>You have entered this page without posting a form to it. Go to <a href="form-post.php">form-post.php</a> and submit the form to see the message displayed here.</p>

<?php endif; ?>



<?php if ($debug ?? null) : render("form/post-debug"); endif ?>
