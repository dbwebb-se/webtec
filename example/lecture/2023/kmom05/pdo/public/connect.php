<?php
include("../src/functions.php");

$fileName = "../db/db.sqlite";
$dsn = "sqlite:$fileName";
$db = connectToDatabase($dsn);

/*
try {
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to the database using DSN:<br>'$dsn'<br>";
    throw $e;
}
*/

var_dump($db);
