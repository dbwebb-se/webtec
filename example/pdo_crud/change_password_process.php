<?php

// Include the config file
include("config/config.php");

// Check if user is logged in or redirect to login
$user = checkIfUserLoggedInOrRedirectToLogin();

// Get incoming from post form
$password1 = $_POST["password_new1"] ?? null;
$password2 = $_POST["password_new2"] ?? null;

// Check that passwords match
if ($password1 !== $password2) {
    setFlashMessage("warning", "The passwords did not match!");
    redirectTo("change_password.php");
}

// Generate a new password hash from the new password string
$hash = password_hash($password1, PASSWORD_DEFAULT);

// Connect to the database
$dsn = "sqlite:db/user.sqlite";
$db = connectToDatabase($dsn);

// Create the SQL statement
$sql = <<<EOD
UPDATE user SET
    password = ?
WHERE
    acronym = ?
;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the SQL statement towards the database
$args = [$hash, $user];
$stmt->execute($args);

// Redirect to the user page
setFlashMessage("success", "The password was changed in the database!");
redirectTo("user.php");
