<?php

require "functions.php";


// Get details from the posted form
$doit = $_POST['doit'] ?? null;
$name = $_POST['name'] ?? null;
$date = $_POST['date'] ?? null;
$nameLength = $_POST['nameLength'] ?? "Nej";

if (!$doit) {
    die("You have accessed this page without a posted form.");
}

// Connect to the database
$dsn = "sqlite:db/db.sqlite";
$db = connectToDatabase($dsn);

// Create the SQL statement
$sql = <<<EOD
INSERT INTO namnlista
    (namn, datum, namnlangd)
VALUES
    (?, ?, ?)
;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the SQL statement towards the database
$args = [$name, $date, $nameLength];
$stmt->execute($args);

// Get the id of the last inserted row
$id = $db->lastInsertId();

// Redirect to a result page
//header("Location: search.php?query=" . urlencode($name));
header("Location: single.php?id=$id");
