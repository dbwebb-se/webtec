<?php

/**
 * Divide your view files into "two stages", start by coding PHP and preparing
 * the content into variables (1), then output the content/variables together
 * with HTML elements (2).
 * It is good practice to keep this in two stages, it makes your code cleaner
 * and easier to read, edit and develop.
 */

 /* PART 1 */
// Prepare variables before loop
$sum = 0;
$number = 1;
$oddStr = "";

// Do the loop and sum odd numbers
while ($sum <= 42) {
    // Add to the sum, if the number is odd
    if ($number % 2 === 1) {
        $sum += $number;
        $oddStr .= "Adding $number, sum is $sum.<br>";
    }
    $number++;
}



/* PART 2 */
// Extract details about the current day
$timestampToday = time();
$dateStrToday = date('Y-m-d', $timestampToday);
$week = date('W', $timestampToday);
$dayToday = date('l', $timestampToday);
$todayMessage = "Today is $dayToday in week $week and the date is $dateStrToday.";

// Calculate the first day of the week
// When we loop through the week we need to have the timestamp from the
// first day in the week
$dayNum = date('N');
$timeStampWeekStart = $timestampToday - ($dayNum - 1) * 60 * 60 * 24;

// Loop through each day in the week and build up the result as a string
$weekStr = "<ul>\n";
for ($i = 0; $i <= 6; $i++) {
    $timestamp = $timeStampWeekStart + $i * 60 * 60 * 24;
    $dateStr = date('Y-m-d', $timestamp);
    $dayStr = date('l', $timestamp);

    $isToday = "";
    if ($dateStrToday === $dateStr) {
        $isToday = " (today)";
    }

    $weekStr .= "<li>$dayStr $dateStr $isToday</li>\n";
}
$weekStr .= "</ul>\n"

?>


<h2>Loopar med for och while</h2>

<p>Calculating the sum of odd numbers, until the sum is 42 or more.</p>

<p><?= $oddStr ?></p> 

<p><?= $todayMessage ?></p> 

<?= $weekStr ?> 
