<?php

require "functions.php";

// Connect to the database
$dsn = "sqlite:db/db.sqlite";
$db = connectToDatabase($dsn);

// Print out the success
echo "<p>The database at '$dsn' is now connected.<p>Dumping the database connection:<pre>";
var_dump($db);
