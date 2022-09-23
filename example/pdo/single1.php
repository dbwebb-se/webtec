<?php

// Include the functions
require "src/database.php";

// Get details from the query string
$id = $_GET['id'] ?? null;
$name = $_GET['name'] ?? null;

// Exit the script if the id is missing
if (!($id || $name)) {
    die("You have accessed this page without entering an is through the query string.");
}

// Connect to the database
$dsn = "sqlite:db/db.sqlite";
$db = connectToDatabase($dsn);

// Create the SQL statement
$sql = <<<EOD
SELECT
    rowid,
    *
FROM namnlista
WHERE
    rowid = ?
    OR
    namn = ?
;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the SQL statement towards the database
$args = [$id, $name];
$stmt->execute($args);

// Get the resultset
$res = $stmt->fetch();

// If empty resultset
if (!$res) {
    die("The query did not find a match in the database table, empty resultset.");
}

// Include the view that shows the row
require "view/single.php";
