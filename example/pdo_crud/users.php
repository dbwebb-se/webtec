<?php

// Include the config file
include("config/config.php");

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
;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the SQL statement towards the database
$stmt->execute();

// Get the resultset and print it out
$res = $stmt->fetchAll();
require "view/users.php";