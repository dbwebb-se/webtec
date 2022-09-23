<?php

require "functions.php";

// Connect to the database
$dsn = "sqlite:db/db.sqlite";
$db = connectToDatabase($dsn);

// Prepare and execute the SQL statement
$sql = <<<EOD
SELECT
    rowid,
    *
FROM namnlista
WHERE
    namn = 'Mikael'
    OR namn = 'Magnus'
    OR namn = 'Carina'
;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the SQL statement towards the database
$stmt->execute();

// Get the resultset and print it out
$res = $stmt->fetchAll();
echo "<pre>", print_r($res, true), "</pre>";
