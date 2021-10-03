<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?? null ?> | My website</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/favicon.ico">
</head>
<body>

<div class="navbar">
    <?php require __DIR__ . "/../navbar.php" ?>
</div>

<div class="row row-main">
    <main class="main fullwidth">
        <?php if (isset($main)) : ?>
            <?= $main ?>
        <?php else : ?>
            <h1>Page</h1>
            <p>This is default text for the page.</p>
        <?php endif; ?>
    </main>
</div>

<script src="js/main.js"></script>
</body>
</html>
