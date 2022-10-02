<?php

// Include the config file
include("config/config.php");

// Get the header with the navbar
require "view/header.php";

// Get details from the query string
$user = $_GET['user'] ?? null;

// Exit the script if the id is missing
if (!$user) {
    die("You have accessed this page without entering an is through the query string.");
}

// Connect to the database
$dsn = "sqlite:db/user.sqlite";
$db = connectToDatabase($dsn);

// Create the SQL statement
$sql = <<<EOD
SELECT
    rowid,
    acronym,
    name,
    role,
    avatar,
    signature
FROM user
WHERE
    acronym = ?
;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the SQL statement towards the database
$args = [$user];
$stmt->execute($args);

// Get the resultset
$res = $stmt->fetch();

// If empty resultset
if (!$res) {
    die("The query did not find a match in the database table, empty resultset.");
}

// Include the view that shows the row
require "view/profile.php";
