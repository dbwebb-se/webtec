<?php

include('../config/config.php');

// Get incoming values from posted form
$guessedName = $_POST["name"] ?? "";

// Get value from session
$randomName = $_SESSION["randomName"] ?? "";

$success = (mb_strtolower($guessedName, 'UTF-8') == mb_strtolower($randomName, 'UTF-8')) ? true : false;

if ($success) {
    $_SESSION["guessedName"] = ucfirst($guessedName);
    // Redirect when success
    $_SESSION["flashMessage"] = "Rätt gissat!";
    header("Location: guessname_result.php");
    exit();
}

// Redirect when failed
$_SESSION["flashMessage"] = "Fel namn, prova igen!";
header("Location: guessname.php#form");
exit();
