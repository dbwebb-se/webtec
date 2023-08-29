<?php include('../config/config.php');

$title = 'Idag';

// Set the timezone to use
date_default_timezone_set('Europe/Stockholm');
setlocale(LC_TIME, "sv_SE");

// The date of today
$today = date('Y-m-d H:i:s');

// Name of the week day
$weekday = date('l');
$weekdays = array("Monday" => "Måndag", "Tuesday" => "Tisdag", "Wednesday" => "Onsdag", "Thursday" => "Torsdag", "Friday" => " Fredag", "Saturday" => "Lördag", "Sunday" => "Söndag");
$weekday_se = $weekdays[$weekday];

// Week number
$week_no = date('W');

include('../view/header.php');
?>

<main class="main">
    <article class="article today">
        <header>
            <h1>Aktuellt datum och tid</h1>
        </header>

        <p class="clock"><?= $today ?></p>

        <p class="weekday"><?= $weekday_se ?></p>

        <p class="week">Veckonummer <?= $week_no ?></p>
    </article>
</main>


<?php include('../view/footer.php') ?>