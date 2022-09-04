<?php

include('../config/config.php');

// Get incoming values from posted form
$name     = $_POST["name"] ?? "";
$address  = $_POST["address"] ?? "";
$checkbox = $_POST["check"] ?? false;

$success = $name && $address && $checkbox;

// Save the data to a database or process it by some means

if ($success) {
    // Redirect when success
    header("Location: form_result.php");
    exit();
}

// Redirect when failed
header("Location: datastructure.php#form");
exit();

//var_dump($success);
//var_dump($_POST);
