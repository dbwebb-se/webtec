<?php
include('../config/config.php');

$name       = $_POST["name"]     ?? "";
$password   = $_POST["password"] ?? " ";
$message    = $_POST["message"]   ?? "";

$success = $name && $password && $message;
if ($success) {
    // Skriv till databasen eller spara i fil...
    header("Location: array6_result.php");
    exit;
}

// gick fel, fyll i formuläret igen!
header("Location: array6.php");
exit;

//echo "<pre>";
//echo print_r($_POST, true);
//var_dump($_POST);
//echo "MOPED";
