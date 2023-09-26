<?php
include("../src/functions.php");

// Skapa en DSN.
// Koppla oss mot databasen via dess DSN.
$fileName = "../db/db.sqlite";
if ($_SERVER["SERVER_NAME"] !== "www.student.bth.se") {
    $fileName = "C:\db\db.sqlite";
}
$dsn = "sqlite:$fileName";
$db = connectToDatabase($dsn);

// Skapa SQL-satsen.
$sql = <<<EOD
SELECT
    rowid,
    *
FROM namnlista
WHERE
    namn = ?
    OR namn = ?
    OR namn = ?
;
EOD;

// Förbereda SQL-satsen så att den kan köras.
$stmt = $db->prepare($sql);

// Kör SQL-satsen mot databasen.
$args = ["Mikael", "Carina", "Magnus"];
$stmt->execute($args);

// Hämta resultatet, kallas också “resultset”, från databasfrågan.
$res = $stmt->fetchAll();

// Visa innhåller i resultsetet.
echo "<pre>", print_r($res, true), "</pre>";

?><style>
table, th, td {
    border: 1px solid black;
}
</style>
<table>
    <tr>
        <th>Id</th>
        <th>Namn</th>
        <th>Datum</th>
        <th>Namnlängd</th>
    </tr>

<?php foreach ($res as $row) : ?>
    <tr>
        <td><?= $row['rowid'] ?></td>
        <td><?= $row['namn'] ?></td>
        <td><?= $row['datum'] ?></td>
        <td><?= $row['namnlangd'] ?></td>
    </tr>
<?php endforeach ?>
