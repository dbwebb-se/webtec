<?php

// Lägg till namnsdagar och helgdagar från databasen i webtec_ht01 kmom05, se exempel/database db.sqlite

// Get incoming arguments from query string
$date = $_GET['date'] ?? null;

// Name of the week day and months in Swedish
$weekdays = array("Monday" => "Måndag", "Tuesday" => "Tisdag", "Wednesday" => "Onsdag", "Thursday" => "Torsdag", "Friday" => " Fredag", "Saturday" => "Lördag", "Sunday" => "Söndag");
$months = ["Januari","Februari","Mars","April","Maj","Juni","Juli",
    "Augusti","September","Oktober","November","December"];

$dateStr = "";
if ($date) {
    $dateStr = htmlentities($date);
    $dateIncoming = date_create($dateStr);
    $noOfDaysInMonth = date_format($dateIncoming, 't');
    $monthNo = date_format($dateIncoming, 'n');
    $dayStr = date_format($dateIncoming, 'l');
    $year = date_format($dateIncoming, 'o');
    $prevDate = date('Y-m-d', strtotime($dateStr . ' - 1 months'));
    $prevDateMonthNo = date_format(date_create($prevDate), 'n');
    $nextDate = date('Y-m-d', strtotime($dateStr . ' + 1 months'));
    $nextDateMonthNo = date_format(date_create($nextDate), 'n');
}

include('../view/header.php');
?>

<main class="main">
    <article class="article">
        <header>
            <h1>Månadskalender</h1>
        </header>
        <form method="get">
            <p>
                Datum:
                <!-- <input type="text" value="<?= $dateStr ?>" name="date" placeholder="Skriv in ett datum"> -->
                <input type="date" value="<?= $dateStr ?>" name="date">
            </p>

            <p>
                <input type="submit" value="Skicka" name="doit">
                <input type="reset" value="Rensa">
            </p>

            <div>
                <?php if ($dateStr) : ?>
                    <!-- <p>You have submitted the date: <code><?= $dateStr ?></code>.</p> -->
                    <table class="calender">
                        <tr>
                            <th colspan="3" class="month"><?= $months[$monthNo - 1] . " " . $year?></th>
                        </tr>
                        <?php for ($i = 1; $i <= $noOfDaysInMonth; $i++) : ?>
                            <?php $tempDay = date_create($year . '-' . $monthNo . '-' . $i); ?>
                            <?php $nameOfTheDay = $weekdays[date_format($tempDay, 'l')] ?>
                            <?php $noOfTheDay = date_format($tempDay, 'z') + 1?>
                            <?php $weekNo = date_format($tempDay, 'W')?>

                            <?php if ($nameOfTheDay == "Söndag") : ?>
                                <tr class="sunday">
                                <td class="date dateSunday"><?= $i ?></td>
                            <?php else : ?>
                                <tr>
                                <td class="date"><?= $i ?></td>
                            <?php endif; ?>

                            <td class="day"><?= $nameOfTheDay ?>  
                                <code style="font-style:italic;"><?= $noOfTheDay ?></code><br>Namn
                            </td>

                            <?php if ($nameOfTheDay == "Måndag" || $i == 1) :?>
                                <td class="weekNo"><?= ltrim($weekNo, "0") ?></td>
                            <?php else : ?>
                                <td> </td>
                            <?php endif; ?>
                            </tr>
                        <?php endfor; ?>
                    </table>
                <?php endif; ?>
            </div>
        </form>
        <?php if ($dateStr) : ?>
            <p class="monthLinks">
                <a class="prevMonth" href="month.php?date=<?= $prevDate ?>&doit=Skicka">&laquo; <?= $months[$prevDateMonthNo - 1] ?></a>
                <a class="nextMonth" href="month.php?date=<?= $nextDate ?>&doit=Skicka"><?= $months[$nextDateMonthNo - 1] ?> &raquo;</a>
            </p>
        <?php endif; ?>

        <!-- <p>This is how you can debug the content of the incoming <code>$_GET</code> variable.</p>
        <pre><?= var_dump($_GET) ?></pre> -->

    </article>
</main>


<?php include('../view/footer.php') ?>