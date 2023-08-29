<?php

$sessionName = session_name();
$sessionId = session_id();
$sessionCookie = session_get_cookie_params();
?>

<p>Name of session: '<?= $sessionName ?>'</p>

<p>Id of this session: '<?= $sessionId ?>'</p>

<p>Details of the session cookie:</p>
<pre><?= print_r($sessionCookie, 1) ?></pre>

<p>Content of the $_SESSION variable.</p>
<pre><?= var_dump($_SESSION) ?></pre>