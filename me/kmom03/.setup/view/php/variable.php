<?php

/**
 * Divide your view files into "two stages", start by coding PHP and preparing
 * the content into variables (1), then output the content/variables together
 * with HTML elements (2).
 * It is good practice to keep this in two stages, it makes your code cleaner
 * and easier to read, edit and develop.
 */

$name = "Mikael";
$city = "Bankeryd";

// Integer
$age = 42;
$birthDay = 7;
$birthMonth = 3;

// Float/double
$radius = 7.0;
$pi = 3.14159;

$circumference = 2 * $radius * $pi;
$area = $pi * $radius * $radius;
?>


<h2>Variabler</h2>

<p>
    Jag har hört talas om <?= $name ?> som bor i <?= $city ?>. Vet du vem det är?
</p> 

<p>
    Jag föddes den <?= $birthDay ?>/<?= $birthMonth ?> och jag är <?= $age ?> år gammal. Kan du räkna ut vilket år jag föddes?
</p>

<p>
    Cirkelns radie är <?= $radius ?> enheter, dess omkrets är <?= $circumference ?> enheter och dess area är <?= $area ?> enheter i kvadrat.
</p>
