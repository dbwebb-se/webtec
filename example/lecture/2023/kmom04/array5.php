<?php
include('../config/config.php');

$date = $_GET["date"] ?? date('Y-m-d');
$timestamp = strtotime($date);

$year       = date("Y", $timestamp);
$month      = date("M", $timestamp);
$dayInMonth = date("d", $timestamp);


?><h1>Lek med GET formulär</h1>

<form method="get" action="nysida.php">
    <p>
        <label>Date: <input type="text" name="date" value="<?= $date ?>"></label>
    </p>

    <p>
        <input type="submit" name="doit" value="Skicka">
    </p>
</form>

<ul>
    <li><?= $year ?></li>
    <li><?= $month ?></li>
    <li><?= $dayInMonth ?></li>
</ul>

<pre>
<?= print_r($_GET, true) ?>
</pre>

<!--
<pre>
<?= var_dump($_GET) ?>
</pre>
-->