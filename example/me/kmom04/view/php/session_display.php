<?php

/**
 * Divide your view files into "two stages", start by coding PHP and preparing
 * the content into variables (1), then output the content/variables together
 * with HTML elements (2).
 * It is good practice to keep this in two stages, it makes your code cleaner
 * and easier to read, edit and develop.
 */

$sessionName = session_name();
$sessionId = session_id();
$sessionCookie = session_get_cookie_params();
?>

<p><a href="session_destroy.php">Förstör sessionen</a>.</p>

<p><a href="session_write.php">Skriv till sessionen</a>.</p>

<p>Name of session: '<?= $sessionName ?>'</p>

<p>Id of this session: '<?= $sessionId ?>'</p>

<p>Details of the session cookie:</p>
<pre><?= print_r($sessionCookie, 1) ?></pre>

<p>Content of the $_SESSION variable.</p>
<pre><?= var_dump($_SESSION) ?></pre>