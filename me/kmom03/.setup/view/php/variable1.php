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

// Extract the year only
$currentYear = date('Y');

// Calculate the birth year from the age
$birthYear = $currentYear - $age;

// Float/double
$radius = 7.0;
//$pi = 3.14159;
$pi = pi();

$circumference = 2 * $radius * $pi;
$area = $pi * $radius * $radius;

// Format number for output
$formattedRadius = number_format($radius, 1);
$formattedCircumference = number_format($circumference, 2);
$formattedArea = number_format($area, 2);

// ROT13
$messageAsRot13 = "Xhqbf! Qh svknqr rkgenhcctvsgra!";
$cleartextMessage = str_rot13($messageAsRot13);

?>


<h2>Variabler</h2>

<p>
    Jag har hört talas om <?= $name ?> som bor i <?= $city ?>. Vet du vem det är?
</p> 

<p>
    Jag föddes den <?= $birthDay ?>/<?= $birthMonth ?> och jag är <?= $age ?> år gammal. Kan du räkna ut vilket år jag föddes?
</p>

<p>
    I år är det <?= $currentYear ?> och om du är <?= $age ?> i år så föddes du år <?= $birthYear ?>.
</p>

<p>
    Cirkelns radie är <?= $radius ?> enheter, dess omkrets är <?= $circumference ?> enheter och dess area är <?= $area ?> enheter i kvadrat. 
</p>

<p>
    Cirkelns radie är <?= $formattedRadius ?> enheter, dess omkrets är <?= $formattedCircumference ?> enheter och dess area är <?= $formattedArea ?> enheter i kvadrat (formatterad utskrift). 
</p>

<p>
    Det "krypterade" meddelandet är "<?= $messageAsRot13 ?>".
</p>

<p>
    Meddelande i klartext är "<?= $cleartextMessage ?>".
</p>
