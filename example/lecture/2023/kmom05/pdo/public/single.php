<?php
include("../src/functions.php");

// Get details from the query string
$id = $_GET["id"] ?? null; 

// Exit the script if the id is missing
if (!$id) {
    die("Du måste skicka in en ?id=xxxx");
}

// Connect to the database
$fileName = "../db/db.sqlite";
if ($_SERVER["SERVER_NAME"] !== "www.student.bth.se") {
    $fileName = "C:\db\db.sqlite";
}
$dsn = "sqlite:$fileName";
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
//echo "<pre>", print_r($res, true), "</pre>";

include("../view/single.php");
