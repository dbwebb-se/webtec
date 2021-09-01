<?php

declare(strict_types=1);

$dateNow = new DateTime();
$dateLondon = new DateTime();
$dateLondon->setTimeZone(new DateTimeZone('Europe/London'));
$dateOld = new DateTime('2001-01-12');

echo "Dagens datum: " . $dateNow->format('Y-m-d') . "\n";

echo "Svensk tid: " . $dateNow->format('H:i:s') . "\n";
echo "London tid: " . $dateLondon->format('H:i:s') . "\n";

$dateOld->sub(new DateInterval('P3D'));
echo "Datum 2001-01-12, 3 dagar tillbaka: " . $dateOld->format('Y-m-d') . "\n\n";
