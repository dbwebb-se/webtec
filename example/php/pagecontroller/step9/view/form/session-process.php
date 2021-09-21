<?php

$rollTheDice    = $_POST["doit"]  ?? null;
$resetTheGame   = $_POST["reset"] ?? null;
$destroySession = $_POST["kill"]  ?? null;

if ($rollTheDice) {
    $dice = rand(1, 6);
    $_SESSION["dice"] = $dice;

    $sum = $_SESSION["sum"] ?? 0;
    $_SESSION["sum"] = $sum + $dice;

    $rolls = $_SESSION["rolls"] ?? 0;
    $_SESSION["rolls"] = $rolls + 1;
} else if ($resetTheGame) {
    unset($_SESSION["dice"]);
    unset($_SESSION["sum"]);
} else if ($destroySession) {
    sessionDestroy();
}

header("Location: session.php");
