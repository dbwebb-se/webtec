<?php

/**
 * Divide your view files into "two stages", start by coding PHP and preparing
 * the content into variables (1), then output the content/variables together
 * with HTML elements (2).
 * It is good practice to keep this in two stages, it makes your code cleaner
 * and easier to read, edit and develop.
 */

 // Calculate the time it took to process this page
$timestampFirst = $_SERVER["REQUEST_TIME_FLOAT"];
$timestampLast = microtime(true);
$diff = $timestampLast - $timestampFirst;
$loadTime = round($diff * 1000, 3);

// Get name of the current pagecontroller
$requestUri = $_SERVER["SCRIPT_NAME"];
$pageController = basename($requestUri);

?>


<h2>Detaljer om requesten med SERVER</h2>

<table>
    <tr>
        <th>Nyckel</th>
        <th>Värde</th>
    </tr>

    <tr>
        <td>SERVER_SOFTWARE</td>
        <td><?= htmlentities($_SERVER['SERVER_SOFTWARE']) ?></td>
    </tr>

    <tr>
        <td>SERVER_ADDR</td>
        <td><?= htmlentities($_SERVER['SERVER_ADDR']) ?></td>
    </tr>

    <tr>
        <td>REQUEST_TIME_FLOAT</td>
        <td><?= htmlentities($_SERVER['REQUEST_TIME_FLOAT']) ?></td>
    </tr>

    <tr>
        <td>REQUEST_METHOD</td>
        <td><?= htmlentities($_SERVER['REQUEST_METHOD']) ?></td>
    </tr>

    <tr>
        <td>REQUEST_URI</td>
        <td><?= htmlentities($_SERVER['REQUEST_URI']) ?></td>
    </tr>

    <tr>
        <td>SCRIPT_NAME</td>
        <td><?= htmlentities($_SERVER['SCRIPT_NAME']) ?></td>
    </tr>
</table>

<!--
<p>This is how you can debug the content of the incoming <code>$_SERVER</code> variable.</p>
<pre><?= var_dump($_SERVER) ?></pre>
-->

<p>Sidans laddningstid är <?= $loadTime ?> ms (så här långt).</p>

<p>Sidkontrollern som laddades heter '<?= $pageController ?>'.</p>

