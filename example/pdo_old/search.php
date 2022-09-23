<?php

require "functions.php";


// Get details if the form is posted or not
$doit  = $_GET['doit'] ?? null;
$query = $_GET['query'] ?? null;

// Include the view that shows the search form
require "view/searchForm.php";

// Do the search query, if the form is submitted
if ($doit || $query) {
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
        namn LIKE ?
        OR datum LIKE ?
        OR namnlangd LIKE ?
        OR rowid = ?
    ;
    EOD;

    // Prepare the SQL statement so it can be executed
    $stmt = $db->prepare($sql);

    // Execute the SQL statement towards the database
    $args = [$query, $query, $query, $query];
    $stmt->execute($args);

    // Get the resultset
    $res = $stmt->fetchAll();
}

// Print out the resultset
require "view/table.php";
