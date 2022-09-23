<?php

require "functions.php";


// Get details from the posted form
$doit = $_POST['doit'] ?? null;
$id = $_POST['id'] ?? null;
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
UPDATE namnlista SET
    namn = ?,
    datum = ?,
    namnlangd = ?
WHERE
    rowid = ?
;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the SQL statement towards the database
$args = [$name, $date, $nameLength, $id];
$stmt->execute($args);

// Redirect to a result page
header("Location: update.php?id=" . urlencode($id));
