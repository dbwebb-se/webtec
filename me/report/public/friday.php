<?php include('../config/config.php');

$title = 'Fredag';

// Set the timezone to use
date_default_timezone_set('Europe/Stockholm');

 // Extract details about the day
 $dayNum = date('N');
 $dayStr = date('l');

// Name of the week day
$weekdays = array("Monday" => "Måndag", "Tuesday" => "Tisdag", "Wednesday" => "Onsdag", "Thursday" => "Torsdag", "Friday" => " Fredag", "Saturday" => "Lördag", "Sunday" => "Söndag");
$dayStrSe = $weekdays[$dayStr];

// Set the message with a default text
$message = "Idag är det inte fredag utan <strong>$dayStrSe!</strong>";

// Set friday image
$image = "img/happy_friday.jpeg";
$imageAlt = "Bild på glad fredag";

// Check if it is Friday, day 5 in the week
if ($dayNum == 5) {
    // Change the message if it is Friday
    $message = "Hurra!!! Idag är det <strong>$dayStrSe!!!</strong>";
}

// How many days left to Friday?
$daysLeft = 0;
if ($dayNum < 5) {
    $daysLeft = 5 - $dayNum;
    $message = "$message Det är $daysLeft dagar kvar tills fredag.";
} elseif ($dayNum > 5) {
    $daysLeft = 7 - $dayNum + 5;
    $message = "$message Det har precis varit fredag, nästa fredag kommer om $daysLeft dagar.";
} else {
    $message = "$message Hurra!!!";
}

// Get incoming arguments from query string
$date = $_GET['date'] ?? null;

$dateStr = "";
$dateNum = 0;

if ($date) {
    $dateStr = htmlentities($date);
    $dateIncoming = date_create($dateStr);
    $dateNum = date_format($dateIncoming, 'N');
}

// Check if incoming is Friday, day 5 in the week
$messageGet = "";
if ($dateNum == 5) {
    // Change the message if it is Friday
    $messageGet = "Hurra!!! Inkommande datum är <strong>FREDAG!!!</strong>";
}

include('../view/header.php');
?>

<main class="main">
    <article class="article today">
        <header>
            <h1>Vilken veckodag är det idag?</h1>
        </header>

        <p><?= $message ?></p>

        <?php if ($dayNum == 5) : ?>
            <p class="friday"><?= $dayStrSe ?></p>

            <figure class="figure center">
                <img src=<?= $image ?> alt=<?= $imageAlt ?>>
                </figcaption>Happy Friday</figcaption>
            </figure>
        <?php endif; ?>

        <?php if ($dateStr) : ?>
            <p><?= $messageGet ?></p>
        <?php endif; ?>
    </article>
</main>


<?php include('../view/footer.php') ?>