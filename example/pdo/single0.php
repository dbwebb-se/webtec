<?php

require "functions.php";


// Get details from the query string
$id = $_GET['id'] ?? null;

// Exit the script if the id is missing
if (!$id) {
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
;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the SQL statement towards the database
$args = [$id];
$stmt->execute($args);

// Get the resultset
$res = $stmt->fetch();

// Include the view that shows the row
require "view/single.php";
