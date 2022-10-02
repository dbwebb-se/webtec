<?php

// Include the config file
include("config/config.php");

// Get the current user from the session
$user = checkIfUserLoggedIn();

// Get incoming from post form
$doit = $_POST["doit"] ?? null;

// Check if the form was submitted
if (!$doit) {
    exit("Direct access to this page is forbidden, the form was not submitted!");
}

// Connect to the database
$dsn = "sqlite:db/user.sqlite";
$db = connectToDatabase($dsn);

// Create the SQL statement
$sql = <<<EOD
-- Delete a user
DELETE FROM user
WHERE
    acronym = ?
;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the SQL statement towards the database
$args = [$user];
$stmt->execute($args);

// Redirect to the login page
setFlashMessage("success", "The user was deleted!");
redirectTo("logout_process.php");
