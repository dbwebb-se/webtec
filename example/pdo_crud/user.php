<?php

// Include the config file
include("config/config.php");

// Check if user is logged in or redirect to login
$user = checkIfUserLoggedInOrRedirectToLogin();

// Get the header with the navbar
require "view/header.php";

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

// Include the view that shows the row
require "view/user.php";
