<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title><?= $title ?> | Me-sidan</title>
    <meta name="referrer" content="unsafe-url">
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php $uriFile = basename($_SERVER["REQUEST_URI"]); ?>
    <nav class="navbar">
        <ul>
            <li><a class="<?= $uriFile == "me.php" ? "selected" : null ?>" href="me.php">Me</a></li>
            <li><a class="<?= $uriFile == "report.php" ? "selected" : null ?>" href="report.php">Report</a></li>
            <li><a class="<?= $uriFile == "about.php" ? "selected" : null ?>" href="about.php">About</a></li>
            <li><a class="<?= $uriFile == "today.php" ? "selected" : null ?>" href="today.php">Today</a></li>
            <li><a class="<?= $uriFile == "friday.php" ? "selected" : null ?>" href="friday.php">Friday</a></li>
            <li><a class="<?= $uriFile == "month.php" ? "selected" : null ?>" href="month.php">Month</a></li>
            <li><a class="<?= $uriFile == "gallery.php" ? "selected" : null ?>" href="gallery.php">Gallery</a></li>
            <li><a class="<?= $uriFile == "photocal.php" ? "selected" : null ?>" href="photocal.php">Fotoalmanacka</a></li>
            <li><a class="<?= $uriFile == "guessname.php" ? "selected" : null ?>" href="guessname.php">Gissa namn</a></li>
            <li><a class="<?= $uriFile == "datastructure.php" ? "selected" : null ?>" href="datastructure.php">Datastructure</a></li>
            <li><a class="<?= $uriFile == "session.php" ? "selected" : null ?>" href="session.php">Session</a></li>
        </ul>
    </nav>
    <header class="header">
        <img class="logo" src="img/logo.png" alt="Logo">
        <span class="title">Kursen webtec</span>
        <span class="subtitle">Maries rapportsida</span>
    </header>
