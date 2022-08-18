<?php

/**
 * Divide your view files into "two stages", start by coding PHP and preparing
 * the content into variables (1), then output the content/variables together
 * with HTML elements (2).
 * It is good practice to keep this in two stages, it makes your code cleaner
 * and easier to read, edit and develop.
 */

// Get incoming arguments from querystring
// $date = null;
// if (isset($_GET['date'])) {
//     $date = $_GET['date'];
// }

$date = $_GET['date'] ?? null;

// Extract details about the date, if it is a valid date
$timestamp = null;
if ($date) {
    $timestamp = strtotime($date);
}

if ($timestamp) {
    $dateStr = date('Y-m-d', $timestamp);
    $monthStr = date('F', $timestamp);
    $monthDaysStr = date('t', $timestamp);
    $weekStr = date('W', $timestamp);
    $dayStr = date('l', $timestamp);
}

?>


<h2>Skicka parameter till webbsidan med querystring och GET</h2>

<?php if ($date) : ?>
    <p>
        The incoming date argument is <code><?= htmlentities($date) ?></code>.
    </p>

    <?php if ($timestamp) : ?>
        <p>
            The date is <?= $dateStr ?> and that is/was a <?= $dayStr ?> in the 
            week <?= $weekStr ?> in the month <?= $monthStr ?> that has 
            <?= $monthDaysStr ?> days.
        </p>
    <?php else : ?>
        <p>The incoming date is not a valid date.</p>
    <?php endif; ?>

<?php else : ?>
    <p>
        You did not send a date through the querystring, do that by adding this 
        to the url: <code>?date=2022-08-23</code>
    </p>
<?php endif; ?>

