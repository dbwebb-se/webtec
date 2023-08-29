<?php

/**
 * Divide your view files into "two stages", start by coding PHP and preparing
 * the content into variables (1), then output the content/variables together
 * with HTML elements (2).
 * It is good practice to keep this in two stages, it makes your code cleaner
 * and easier to read, edit and develop.
 */

 // Extract details about the day
$dayNum = date('N');
$dayStr = date('l');

// For testing, extract details from a day that is certain to be a Friday
// Comment out when no testing
// $dateStr = '2022-08-26';
// $timestamp = strtotime($dateStr);
// $dayNum = date('N', $timestamp);
// $dayStr = date('l', $timestamp);

// Set the message with a default text
$message = "Today it is $dayStr, it is NOT yet Friday!!! Carpe Diem.";

// Check if it is Friday, day 5 in the week
if ($dayNum == 5) {
    // Change the message if it is Friday
    $message = "Hurray!!! Today it is $dayStr!!! Carpe Diem!";
}

// How many days left to Friday?
$daysLeft = 0;
if ($dayNum < 5) {
    $daysLeft = 5 - $dayNum;
    $message = "$message It is $daysLeft days left to Friday, hang on...";
} elseif ($dayNum > 5) {
    $daysLeft = 7 - $dayNum + 5;
    $message = "$message It was just Friday but it will come again in $daysLeft days.";
} else {
    $message = "$message Horrayyy Friday!!!";
}

?>


<h2>Villkor med if</h2>

<p><?= $message ?></p> 

