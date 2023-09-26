<?php
include("../src/functions.php");

$search = $_GET["search"] ?? null;
include("../view/search_form.php");


if ($search) {
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
        OR namn LIKE ?
        OR datum LIKE ?
    ;
    EOD;

    // Prepare the SQL statement so it can be executed
    $stmt = $db->prepare($sql);

    // Execute the SQL statement towards the database
    $args = [$search, $search, $search];
    $stmt->execute($args);

    // Get the resultset
    $res = $stmt->fetchAll();

    //echo "<pre>", print_r($res, true), "</pre>";
    include("../view/table.php");
}



