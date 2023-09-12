<?php
include('../config/config.php');

$age = 42;
$birthDay = 7;
$birthMonth = 3;

// Extract the year only
$currentYear = date('Y');
echo $currentYear . "<br>";

// Calculate the birth year from the age
$birthYear = $currentYear - $age;

$seconds = time();
echo $seconds . "<br>";

?>

<p>
    Jag föddes den <?= $birthDay ?>/<?= $birthMonth ?> och jag är <?= $age ?> år gammal. Kan du räkna ut vilket år jag föddes? jajamensan, du föddes år <?= $birthYear ?>.
</p>




