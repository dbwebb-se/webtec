<?php

/**
 * Divide your view files into "two stages", start by coding PHP and preparing
 * the content into variables (1), then output the content/variables together
 * with HTML elements (2).
 * It is good practice to keep this in two stages, it makes your code cleaner
 * and easier to read, edit and develop.
 */

$paintings = [
    "Jean-Léon Gérôme" => "img/The_leap_of_Marcus_Curtius_(1850-55),_by_Jean-Léon_Gérôme.jpg",
    "Justus Sustermans" => "img/BMVB1452-Justus_Sustermans-La_familia_de_Darius_davant_Alexandre_el_Gran.jpeg",
    "Matthias Laurenz Gräff" => "img/Matthias_Laurenz_Gräff,__Traum_Österreich_-_Vorstellung_und_Wirklichkeit_.jpg",
    "Sebastiano Ricci" => "img/Sebastiano_Ricci_-_A_Recusa_de_Arquimedes.jpg",
];

$paintings["Niels Simonsen"] = "img/Episoden_af_Træfning_ved_Sankelmark,_den_6._Februar.jpg";
$paintings["Gustave Moreau"] = "img/Moreau_-_Thomyris_et_Cyrus,_Inv._13978.jpg";

?>


<h2>Key/value array: Gissa artisten</h2>

<p>Här är ett galleri med historiska målningar. Försök gissa vilken konstnär eller 
    målning det är. När du håller musen över bilden så framträder svaret.</p>

<div class="gallery">
<?php foreach ($paintings as $key => $value) : ?>
    <img src="<?= $value ?>" title="<?= $key . " " . $value ?>" alt="<?= $value ?>">
<?php endforeach; ?>
</div>

<p>Hur många rätt fick du?</p>
