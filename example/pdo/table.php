<?php

$res = $res ?? [];

?><style>
table, th, td {
    border: 1px solid black;
}
</style>
<p>Your resultset contains <?= count($res) ?> rows.</p>
<table>
    <tr>
        <th>Id</th>
        <th>Id (klickbar)</th>
        <th>Namn</th>
        <th>Datum</th>
        <th>Namnlängd</th>
        <th>Admin</th>
    </tr>

<?php foreach ($res as $row) : ?>
    <tr>
        <td><?= $row['rowid'] ?></td>
        <td>
            <a href="single.php?id=<?= $row['rowid'] ?>">
                <?= $row['rowid'] ?>
            </a>
        </td>
        <td><?= $row['namn'] ?></td>
        <td><?= $row['datum'] ?></td>
        <td><?= $row['namnlangd'] ?></td>
        <td>
            <a href="update.php?id=<?= $row['rowid'] ?>">
                Update
            </a>
            <a href="delete.php?id=<?= $row['rowid'] ?>">
                Delete
            </a>
        </td>
    </tr>
<?php endforeach ?>
