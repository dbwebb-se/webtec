<?php
include('../config/config.php');

$title = 'Fotoalmanacka';

include('../view/header.php');

// Get incoming arguments from query string
$month = $_GET['month'] ?? null;

date_default_timezone_set('Europe/Stockholm');
setlocale(LC_TIME, "sv_SE");

// The date of today
$todayStr = date('Y-m-d H:i:s');
$today = date_create($todayStr);

// Name of the week day and months in Swedish
$weekdays = array("Monday" => "Måndag", "Tuesday" => "Tisdag", "Wednesday" => "Onsdag", "Thursday" => "Torsdag", "Friday" => " Fredag", "Saturday" => "Lördag", "Sunday" => "Söndag");
$months = ["Januari","Februari","Mars","April","Maj","Juni","Juli",
    "Augusti","September","Oktober","November","December"];

// Photos to calender
$photos = [
    "img/gallery/daisyCloseup.jpg",
    "img/gallery/scillaCloseup.jpg",
    "img/gallery/honeysuckleCloseup.jpg",
    "img/gallery/lavender.jpg",
    "img/gallery/plant.jpg",
    "img/gallery/grass.jpg",
    "img/gallery/trees.jpg",
    "img/gallery/hedge.jpg",
    "img/gallery/weed.jpg",
    "img/gallery/deck.jpg",
    "img/gallery/generic.jpg",
    "img/gallery/spruceHigh.jpg",
];

// Get all the namedays
$namedays = getNameDaysByName();
// var_dump($namedays);

$year = date_format($today, 'Y');
if ($month) {
    $today = date_create($year . '-' . $month . '-' . '01');
}
$monthNo = date_format($today, 'n');
$noOfDaysInMonth = date_format($today, 't');
$tempDay = date_create($year . '-' . $monthNo . '-' . '01');
$firstDayNo = date_format($tempDay, 'N');

$prevDate = date('Y-m-d', strtotime($todayStr . ' - 1 months'));
$prevNoOfDays = date_format(date_create($prevDate), 't');

?>

<main class="main">
    <h1><?= $title ?></h1>

    <table class="photo_cal">
        <tr>
            <th colspan="7"> <img src="<?= $photos[$monthNo - 1] ?>" alt="<?= $months[$monthNo - 1] ?>"></th>
        </tr>
        <tr>
            <th colspan="7" class="month-heading"><?= $months[$monthNo - 1] . " " . $year?></th>
        </tr>
        <tr class="name-weekday-heading">
            <?php foreach ($weekdays as $key => $weekday) : ?>
                <td><?= $weekday ?></td>
            <?php endforeach; ?>
        </tr>
        <tr class="cal-space">
            <th colspan="7"> </th>
        </tr>
        <tr>
        <?php $counter = 1 ?>
        <?php for ($i = $prevNoOfDays + 3 - $firstDayNo; $i <= $prevNoOfDays; $i++) : ?>
            <td class="cal-date pale"><?= $i ?></td>
            <?php $counter += 1 ?> 
        <?php endfor; ?>
        <?php for ($i = 1; $i <= $noOfDaysInMonth; $i++) : ?>
            <?php $tempDay = date_create($year . '-' . $monthNo . '-' . $i); ?>
            <?php $noOfTheDay = date_format($tempDay, 'z') + 1?>
            <?php $date = $i . '/' . $monthNo; ?>
            <?php $name = getNameDay($date, $namedays); ?>
            <?php if ($counter % 7 == 0) : ?>
                <td class="cal-date sunday">
                    <?= $i ?>
                    <code style="font-style:italic;font-size:0.7em;float:right;"><?= $noOfTheDay ?></code>
                    <p class="nameday"> <?= $name ?> </p>
                </td>
                </tr>
                <tr>
            <?php else : ?>
                <td class="cal-date">
                    <?= $i ?>
                    <code style="font-style:italic;font-size:0.7em;float:right;"><?= $noOfTheDay ?></code>
                    <p class="nameday"> <?= $name ?> </p>
                </td>
            <?php endif; ?>
            <?php $counter += 1 ?> 
        <?php endfor; ?>
        </tr>
    </table>
</main>

<?php include('../view/footer.php') ?>
